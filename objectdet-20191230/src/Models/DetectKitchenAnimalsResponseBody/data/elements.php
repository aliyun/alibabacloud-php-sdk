<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectKitchenAnimalsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectKitchenAnimalsResponseBody\data\elements\rectangles;

class elements extends Model
{
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
        'rectangles' => 'Rectangles',
        'score' => 'Score',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->rectangles) {
            $this->rectangles->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
