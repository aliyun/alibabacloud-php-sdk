<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionResponseBody\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionResponseBody\data\elements\box;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var box
     */
    public $box;

    /**
     * @example 0
     *
     * @var int
     */
    public $boxId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isIntrude;

    /**
     * @example 0.950289249420166
     *
     * @var int
     */
    public $score;

    /**
     * @example person
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'box'       => 'Box',
        'boxId'     => 'BoxId',
        'isIntrude' => 'IsIntrude',
        'score'     => 'Score',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->box) {
            $res['Box'] = null !== $this->box ? $this->box->toMap() : null;
        }
        if (null !== $this->boxId) {
            $res['BoxId'] = $this->boxId;
        }
        if (null !== $this->isIntrude) {
            $res['IsIntrude'] = $this->isIntrude;
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
        if (isset($map['Box'])) {
            $model->box = box::fromMap($map['Box']);
        }
        if (isset($map['BoxId'])) {
            $model->boxId = $map['BoxId'];
        }
        if (isset($map['IsIntrude'])) {
            $model->isIntrude = $map['IsIntrude'];
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
