<?php 

namespace Phalcon\Assets\Filters {

	/**
	 * Phalcon\Assets\Filters\None
	 *
	 * Returns the content without make any modification to the original source
	 */
	
	class None implements \Phalcon\Assets\FilterInterface {

		/**
		 * Returns the content without be touched
		 *
		 * @param string content
		 * @return string
		 */
		public function filter($content){ }

	}
}
