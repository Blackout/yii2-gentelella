<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace yiister\gentelella\widgets;

use rmrevin\yii\fontawesome\component\Icon;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;
use yiister\gentelella\assets\SparklineAsset;

class SparklineTile extends Widget
{
	public $options = [];
	public $clientOptions = [];
	public $tag = 'span';
	
	public $text;
	public $number;
	public $data;
	
	public $useDefaultClientOptions = true;
	public $defaultClientOptions = [
		'type'		=> 'line',	// line | bar | discrete | pie
		'lineColor'	=> '#26B99A',
		'fillColor'	=> '#ffffff',
		'lineWidth'	=> 3,
		'width'		=> '100%',
		'spotColor'	=> '#34495E',
		'minSpotColor'	=> '#34495E',
		
		'height' 	=> 40,
		'barWidth'	=> 8,
		'colorMap'	=> [7 => "#a1a1a1"],
		'barSpacing'	=> 2,
		'barColor'	=> "#26B99A",
	];


	public function init()
	{
		parent::init();
		
		// Init Options
		if (!isset($this->id)) $this->id = $this->getId(); // uniqid((new \ReflectionClass($this))->getShortName())
		$this->clientOptions = ($this->useDefaultClientOptions ? array_merge($this->defaultClientOptions, $this->clientOptions) : $this->clientOptions);
	}

	public function run()
	{
		// Register Assets
		$this->registerClientScript();
		
		// Output Html
		echo Html::beginTag('div', ['class' => 'tile']);
			echo Html::tag('span', $this->text);
			echo Html::tag('h2', $this->number);
			echo Html::tag($this->tag, null, ['id' => $this->id, 'class' => 'sparkline-tile']);
		echo Html::endTag('div', ['class' => 'tile']);
	}
	
	protected function registerClientScript()
	{
		// Register Asset to be included
		SparklineAsset::register($this->view);
	
		// Register JS
		$this->view->registerJs(sprintf('$("#%s").sparkline(%s, %s);',
			$this->id,
			Json::encode($this->data),
			Json::encode((array)$this->clientOptions)
		));
		
		// Return
		return $this;
	}
}
