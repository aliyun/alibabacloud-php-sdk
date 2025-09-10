<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponseBody\data\elements\property;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponseBody\data\elements\rectangles;

class elements extends Model
{
    /**
     * @var property[]
     */
    public $property;

    /**
     * @var rectangles
     */
    public $rectangles;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'property' => 'Property',
        'rectangles' => 'Rectangles',
        'score' => 'Score',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->property)) {
            Model::validateArray($this->property);
        }
        if (null !== $this->rectangles) {
            $this->rectangles->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->property) {
            if (\is_array($this->property)) {
                $res['Property'] = [];
                $n1 = 0;
                foreach ($this->property as $item1) {
                    $res['Property'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rectangles) {
            $res['Rectangles'] = null !== $this->rectangles ? $this->rectangles->toArray($noStream) : $this->rectangles;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Property'])) {
            if (!empty($map['Property'])) {
                $model->property = [];
                $n1 = 0;
                foreach ($map['Property'] as $item1) {
                    $model->property[$n1] = property::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Rectangles'])) {
            $model->rectangles = rectangles::fromMap($map['Rectangles']);
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
