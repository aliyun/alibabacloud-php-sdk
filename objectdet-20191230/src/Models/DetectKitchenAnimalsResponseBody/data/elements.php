<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectKitchenAnimalsResponseBody\data;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectKitchenAnimalsResponseBody\data\elements\rectangles;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var rectangles
     */
    public $rectangles;

    /**
     * @example 0.75105053
     *
     * @var float
     */
    public $score;

    /**
     * @example mouse
     *
     * @var string
     */
    public $type;
    protected $_name = [
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
