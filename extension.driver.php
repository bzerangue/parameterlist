<?php

	Class extension_parameterlist extends Extension {

		public function install() {
		}

		public function uninstall() {
		}

		public function getSubscribedDelegates(){
			return array(
				array(
					'page' => '/frontend/',
					'delegate' => 'FrontendParamsResolve',
					'callback' => '__addParam'
				)
			);
		}

		/**
		 * Add parameters to parameter pool
		 *
		 * @param array $context
		 *  delegate context
		 */

		public function __addParam($context) {

			/* ADD PARAMETERS BELOW HERE */

			// Adding a unix-timestamp parameter
			$context['params']['unix-timestamp'] = getdate()[0]; 


			/* END OF PARAMETERS */

		}

	}