<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionResponseBody\data\elements\box;

class elements extends Model
{
    /**
     * @var box
     */
    public $box;

    /**
     * @var int
     */
    public $boxId;

    /**
     * @var bool
     */
    public $isIntrude;

    /**
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'box' => 'Box',
        'boxId' => 'BoxId',
        'isIntrude' => 'IsIntrude',
        'score' => 'Score',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->box) {
            $this->box->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->box) {
            $res['Box'] = null !== $this->box ? $this->box->toArray($noStream) : $this->box;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
