<?php

class GatewaysController extends PaymentsAppController{
	
/**
 * 
 */
	public $name = 'Gateways';
	
/**
 * 
 */
	public $titleController = 'دروازه بانک‌ها';

/**
 * 
 */
	
	
	
	
/**
 * MembersController::admin_index()
 * 
 * @return void
 */
	public function admin_index() {
		$this->titleAction('دروازه‌ها','فهرست تمامی دروازه های تعریف شده');	
		
		$gateways = $this->Paginator->paginate();	
		$this->set('gateways' , $gateways);
	}


/**
 * MembersController::admin_add()
 * 
 * @return void
 */
	public function admin_add() {
		$this->titleAction('ایجاد پروفایل','شما میتوانید یک پروفایل برای اعضا ایجاد نمائید');
		
		if ($this->request->is('post')) {
			$this->Member->create();
			if ($this->Member->save($this->request->data)) {
                $this->Session->alertSuccess(__('%s ایجاد شد','پروفایل'));
                return $this->redirect(array('action' => 'index'));
            } else {
            	$this->Session->alertWarning(__('ذخیره سازی متوقف گردید. لطفا اخطار ها رو بررسی کنید.'));
			}
		}	
		
	}
	

/**
 * MembersController::admin_edit()
 * 
 * @param mixed $id
 * @return
 */
	public function admin_edit($id = null) {
		$this->titleAction('ویرایش پروفایل', 'شما می تواند گزینه‌های مورد نظرتان را ویرایش نمائید');
		if (!$id) {
     	   throw new NotFoundException(__('شناسه نامعتبر می باشد.'));
	    }
		
		$user = $this->Member->findById($id);
		if (!$user) {
        	throw new NotFoundException(__('کاربر پیدا نشد'));
    	}
		if ($this->request->is(array('post', 'put'))) {
			$this->Member->id = $id;
	      	if ($this->Member->save($this->request->data)) {
	            	$this->Session->alertSuccess(__('کاربر %s بروز رسانی شد', $this->request->data('Member.fullname') ));
	        	    return $this->redirect(array('action' => 'index'));
	        }
	        	$this->Session->alertWarning(__('ذخیره سازی متوقف گردید. لطفا اخطار ها رو بررسی کنید.'));
    	}
        if (!$this->request->data) {
        	$this->request->data = $user;
    	} 
    	
    			
	}
	
/**
 * MembersController::delete()
 * 
 * @param mixed $id
 * @return
 */
	public function admin_delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	
	    if ($this->Member->delete($id)) {
	        	$this->Session->alertSuccess(__('پروفایل با شناسه: %s حذف گردید', $id ));
	            return $this->redirect(array('action' => 'index'));
	    }
	}		
		
}