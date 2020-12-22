<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionResponseBody\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionResponseBody\data\elements\box;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $isIntrude;

    /**
     * @var box
     */
    public $box;

    /**
     * @var int
     */
    public $boxId;
    protected $_name = [
        'score'     => 'Score',
        'type'      => 'Type',
        'isIntrude' => 'IsIntrude',
        'box'       => 'Box',
        'boxId'     => 'BoxId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->isIntrude) {
            $res['IsIntrude'] = $this->isIntrude;
        }
        if (null !== $this->box) {
            $res['Box'] = null !== $this->box ? $this->box->toMap() : null;
        }
        if (null !== $this->boxId) {
            $res['BoxId'] = $this->boxId;
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
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['IsIntrude'])) {
            $model->isIntrude = $map['IsIntrude'];
        }
        if (isset($map['Box'])) {
            $model->box = box::fromMap($map['Box']);
        }
        if (isset($map['BoxId'])) {
            $model->boxId = $map['BoxId'];
        }

        return $model;
    }
}
