<?php 

namespace Phalcon {

	/**
	 * Phalcon\Async
	 */
	
	class Async {

		const NOWAIT = 1;

		const MSG_NOERROR = 2;

		const MSG_EXCEPT = 4;

		protected static $_num;

		protected static $_filename;

		protected static $_proj;

		/**
		 * Called asynchronous
		 *
		 *<code>
		 *	$async = \Phalcon\Async::call(function () {
		 *		return 'one';
		 *	 });
		 *</code>
		 *
		 * @param closure $callable
		 * @return int
		 */
		public static function call($closure){ }


		/**
		 * Gets asynchronous result
		 *
		 *<code>
		 *	$id = \Phalcon\Async::call(function () {
		 *		return 'one';
		 *	});
		 *	$data = \Phalcon\Async::recv($id);
		 *</code>
		 *
		 * @param int $pid
		 * @param int $flag
		 * @return mixed
		 */
		public static function recv($async){ }


		/**
		 * Gets all asynchronous result
		 *
		 *<code>
		 *	$id = \Phalcon\Async::call(function () {
		 *		return 'one';
		 *	});
		 *	$data = \Phalcon\Async::recvAll();
		 *</code>
		 *
		 * @return array
		 */
		public static function recvAll(){ }


		/**
		 * Gets result count
		 *
		 *<code>
		 *	Phalcon\Async::count();
		 *</code>
		 *
		 * @return int
		 */
		public static function count(){ }


		/**
		 * Gets result count
		 *
		 *<code>
		 *	Phalcon\Async::clear();
		 *</code>
		 *
		 * @return bool
		 */
		public static function clear(){ }

	}
}
