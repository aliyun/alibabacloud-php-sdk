<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class RectVerticalRequest extends Model
{
    /**
     * @description 子场景ID
     *
     * @var string
     */
    public $subSceneId;

    /**
     * @description 矫正数据
     *
     * @var string
     */
    public $verticalRect;

    /**
     * @description 是否开启门预测
     *
     * @var bool
     */
    public $detectDoor;

    /**
     * @description 需要预测的门的数量
     *
     * @var int
     */
    public $countDetectDoor;
    protected $_name = [
        'subSceneId'      => 'SubSceneId',
        'verticalRect'    => 'VerticalRect',
        'detectDoor'      => 'DetectDoor',
        'countDetectDoor' => 'CountDetectDoor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subSceneId) {
            $res['SubSceneId'] = $this->subSceneId;
        }
        if (null !== $this->verticalRect) {
            $res['VerticalRect'] = $this->verticalRect;
        }
        if (null !== $this->detectDoor) {
            $res['DetectDoor'] = $this->detectDoor;
        }
        if (null !== $this->countDetectDoor) {
            $res['CountDetectDoor'] = $this->countDetectDoor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RectVerticalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }
        if (isset($map['VerticalRect'])) {
            $model->verticalRect = $map['VerticalRect'];
        }
        if (isset($map['DetectDoor'])) {
            $model->detectDoor = $map['DetectDoor'];
        }
        if (isset($map['CountDetectDoor'])) {
            $model->countDetectDoor = $map['CountDetectDoor'];
        }

        return $model;
    }
}
