<?php


/**
 * admins routes
 */
if (RitaRouter::isStation('admin')) {

	RitaRouter::connect(
		'/Payments', 
		array( 'plugin' => 'Payments','controller' => 'Payments', 'action' => 'index'),
		array( 
			'alias' => 'cp.pay',
			'parent' => 'cp.rita'
		)
	);


	RitaRouter::connect(
		'/gateways', 
		array( 'controller' => 'gateways'),
		array( 
			'alias' => 'cp.pay.gateways',
			'parent' => 'cp.pay'
		)
	);

	RitaRouter::connect(
		'/:action/*', 
		array(),
		array(
			
			'parent' => 'cp.pay.gateways'
		)
	);
			

}
