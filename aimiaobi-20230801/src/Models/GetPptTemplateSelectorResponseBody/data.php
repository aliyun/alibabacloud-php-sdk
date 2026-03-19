<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPptTemplateSelectorResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPptTemplateSelectorResponseBody\data\career;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPptTemplateSelectorResponseBody\data\colour;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPptTemplateSelectorResponseBody\data\suitScene;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPptTemplateSelectorResponseBody\data\suitStyle;

class data extends Model
{
    /**
     * @var career[]
     */
    public $career;

    /**
     * @var colour[]
     */
    public $colour;

    /**
     * @var suitScene[]
     */
    public $suitScene;

    /**
     * @var suitStyle[]
     */
    public $suitStyle;
    protected $_name = [
        'career' => 'Career',
        'colour' => 'Colour',
        'suitScene' => 'SuitScene',
        'suitStyle' => 'SuitStyle',
    ];

    public function validate()
    {
        if (\is_array($this->career)) {
            Model::validateArray($this->career);
        }
        if (\is_array($this->colour)) {
            Model::validateArray($this->colour);
        }
        if (\is_array($this->suitScene)) {
            Model::validateArray($this->suitScene);
        }
        if (\is_array($this->suitStyle)) {
            Model::validateArray($this->suitStyle);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->career) {
            if (\is_array($this->career)) {
                $res['Career'] = [];
                $n1 = 0;
                foreach ($this->career as $item1) {
                    $res['Career'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->colour) {
            if (\is_array($this->colour)) {
                $res['Colour'] = [];
                $n1 = 0;
                foreach ($this->colour as $item1) {
                    $res['Colour'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suitScene) {
            if (\is_array($this->suitScene)) {
                $res['SuitScene'] = [];
                $n1 = 0;
                foreach ($this->suitScene as $item1) {
                    $res['SuitScene'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suitStyle) {
            if (\is_array($this->suitStyle)) {
                $res['SuitStyle'] = [];
                $n1 = 0;
                foreach ($this->suitStyle as $item1) {
                    $res['SuitStyle'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Career'])) {
            if (!empty($map['Career'])) {
                $model->career = [];
                $n1 = 0;
                foreach ($map['Career'] as $item1) {
                    $model->career[$n1] = career::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Colour'])) {
            if (!empty($map['Colour'])) {
                $model->colour = [];
                $n1 = 0;
                foreach ($map['Colour'] as $item1) {
                    $model->colour[$n1] = colour::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SuitScene'])) {
            if (!empty($map['SuitScene'])) {
                $model->suitScene = [];
                $n1 = 0;
                foreach ($map['SuitScene'] as $item1) {
                    $model->suitScene[$n1] = suitScene::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SuitStyle'])) {
            if (!empty($map['SuitStyle'])) {
                $model->suitStyle = [];
                $n1 = 0;
                foreach ($map['SuitStyle'] as $item1) {
                    $model->suitStyle[$n1] = suitStyle::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
