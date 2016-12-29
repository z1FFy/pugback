<?php
/**
 * PHP Application Skeleton
 * on Slim Framework & Pug(Jade) Template engine
 *
 * @author Denis Kuschenko <ziffyweb@gmail.com>
 * @link http://z1web.ru
 * @copyright 2016 z1WEBCORE
 */

class View {
	public
		$pug,
		$data,
        $path,
        $GET,
		$domain,
		$subFolder;
	function __construct()
	{
        $this->pug = new Pug\Pug([
          'prettyprint' => true
        ]);
	}

	function render($view,$data=null)
	{
        $this->data['domain'] = $this->domain;
        $this->data['subFolder'] = $this->subFolder;
        $this->data['sitePath'] = 'http://' . $this->domain . $this->subFolder;
		$this->data['resPath'] = $this->data['sitePath'] . '/app/static';
		$this->data['path'] = $this->path;
		$this->data['GET'] = $this->GET;
		if ($data!=null)
			foreach ($data as $key => $item)
				$this->data[$key] = $item;

		$output = $this->pug->render(
			'app/' . $view . '.pug',
			$this->data);
		return $output;
	}
}