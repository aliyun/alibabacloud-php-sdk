<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig\stickers\stickerId;
use AlibabaCloud\Tea\Model;

class stickers extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0.5
     *
     * @var float
     */
    public $height;

    /**
     * @description This parameter is required.
     *
     * @var stickerId
     */
    public $stickerId;

    /**
     * @description This parameter is required.
     *
     * @example 0.5
     *
     * @var float
     */
    public $width;

    /**
     * @description This parameter is required.
     *
     * @example 0.5
     *
     * @var float
     */
    public $x;

    /**
     * @description This parameter is required.
     *
     * @example 0.5
     *
     * @var float
     */
    public $y;
    protected $_name = [
        'height' => 'Height',
        'stickerId' => 'StickerId',
        'width' => 'Width',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->stickerId) {
            $res['StickerId'] = null !== $this->stickerId ? $this->stickerId->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return stickers
     */
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
