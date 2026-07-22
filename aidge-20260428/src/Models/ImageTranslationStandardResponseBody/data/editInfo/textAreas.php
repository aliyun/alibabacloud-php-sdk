<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationStandardResponseBody\data\editInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationStandardResponseBody\data\editInfo\textAreas\texts;

class textAreas extends Model
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $fontsize;

    /**
     * @var string
     */
    public $horizontalLayout;

    /**
     * @var int
     */
    public $lineCount;

    /**
     * @var texts[]
     */
    public $texts;

    /**
     * @var string
     */
    public $verticalLayout;
    protected $_name = [
        'color' => 'Color',
        'content' => 'Content',
        'fontsize' => 'Fontsize',
        'horizontalLayout' => 'HorizontalLayout',
        'lineCount' => 'LineCount',
        'texts' => 'Texts',
        'verticalLayout' => 'VerticalLayout',
    ];

    public function validate()
    {
        if (\is_array($this->texts)) {
            Model::validateArray($this->texts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->fontsize) {
            $res['Fontsize'] = $this->fontsize;
        }

        if (null !== $this->horizontalLayout) {
            $res['HorizontalLayout'] = $this->horizontalLayout;
        }

        if (null !== $this->lineCount) {
            $res['LineCount'] = $this->lineCount;
        }

        if (null !== $this->texts) {
            if (\is_array($this->texts)) {
                $res['Texts'] = [];
                $n1 = 0;
                foreach ($this->texts as $item1) {
                    $res['Texts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->verticalLayout) {
            $res['VerticalLayout'] = $this->verticalLayout;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Fontsize'])) {
            $model->fontsize = $map['Fontsize'];
        }

        if (isset($map['HorizontalLayout'])) {
            $model->horizontalLayout = $map['HorizontalLayout'];
        }

        if (isset($map['LineCount'])) {
            $model->lineCount = $map['LineCount'];
        }

        if (isset($map['Texts'])) {
            if (!empty($map['Texts'])) {
                $model->texts = [];
                $n1 = 0;
                foreach ($map['Texts'] as $item1) {
                    $model->texts[$n1] = texts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VerticalLayout'])) {
            $model->verticalLayout = $map['VerticalLayout'];
        }

        return $model;
    }
}
