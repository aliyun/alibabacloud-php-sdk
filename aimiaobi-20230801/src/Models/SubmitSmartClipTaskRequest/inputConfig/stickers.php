<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig\stickers\stickerId;

class stickers extends Model
{
    /**
     * @var float
     */
    public $height;
    /**
     * @var stickerId
     */
    public $stickerId;
    /**
     * @var float
     */
    public $width;
    /**
     * @var float
     */
    public $x;
    /**
     * @var float
     */
    public $y;
    protected $_name = [
        'height'    => 'Height',
        'stickerId' => 'StickerId',
        'width'     => 'Width',
        'x'         => 'X',
        'y'         => 'Y',
    ];

    public function validate()
    {
        if (null !== $this->stickerId) {
            $this->stickerId->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->stickerId) {
            $res['StickerId'] = null !== $this->stickerId ? $this->stickerId->toArray($noStream) : $this->stickerId;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        if (null !== $this->x) {
            $res['X'] = $this->x;
        }

        if (null !== $this->y) {
            $res['Y'] = $this->y;
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
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['StickerId'])) {
            $model->stickerId = stickerId::fromMap($map['StickerId']);
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
