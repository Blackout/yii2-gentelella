<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace yiister\gentelella\widgets;

use rmrevin\yii\fontawesome\component\Icon;
use yii\base\Widget;
use yii\helpers\ChainHtml;

class StatsTile extends Widget
{
	public $options = ['class' => 'tile-stats'];
	public $icon;
	public $header;
	public $text;
	public $number;

	public function run()
	{
		return	(new ChainHtml())->
			start('div', $this->options)->
				if(empty($this->icon) === false)->
					tag('div', new Icon($this->icon), ['class' => 'icon'])->
				tag('div', $this->number, ['class' => 'count'])->
				tag('h3', $this->header)->
				tag('p', $this->text)->
			end('div');
	}
}
