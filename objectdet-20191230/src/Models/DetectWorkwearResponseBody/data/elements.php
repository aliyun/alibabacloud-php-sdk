<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponseBody\data;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponseBody\data\elements\property;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponseBody\data\elements\rectangles;
use AlibabaCloud\Tea\Model;

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
     * @example 0.63913465
     *
     * @var float
     */
    public $score;

    /**
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'property'   => 'Property',
        'rectangles' => 'Rectangles',
        'score'      => 'Score',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->property) {
            $res['Property'] = [];
            if (null !== $this->property && \is_array($this->property)) {
                $n = 0;
                foreach ($this->property as $item) {
                    $res['Property'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rectangles) {
            $res['Rectangles'] = null !== $this->rectangles ? $this->rectangles->toMap() : null;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Property'])) {
            if (!empty($map['Property'])) {
                $model->property = [];
                $n               = 0;
                foreach ($map['Property'] as $item) {
                    $model->property[$n++] = null !== $item ? property::fromMap($item) : $item;
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
