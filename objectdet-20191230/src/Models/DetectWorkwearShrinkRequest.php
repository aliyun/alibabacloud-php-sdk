<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Dara\Model;

class DetectWorkwearShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clothesShrink;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string[]
     */
    public $labels;
    protected $_name = [
        'clothesShrink' => 'Clothes',
        'imageUrl' => 'ImageUrl',
        'labels' => 'Labels',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clothesShrink) {
            $res['Clothes'] = $this->clothesShrink;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = $item1;
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
        if (isset($map['Clothes'])) {
            $model->clothesShrink = $map['Clothes'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
