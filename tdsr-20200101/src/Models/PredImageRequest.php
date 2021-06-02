<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class PredImageRequest extends Model
{
    /**
     * @description 子场景ID
     *
     * @var string
     */
    public $subSceneId;

    /**
     * @description 是否门预测
     *
     * @var bool
     */
    public $detectDoor;

    /**
     * @description 门数量(DetectDoor为false时，可为0)
     *
     * @var int
     */
    public $countDetectDoor;

    /**
     * @description 是否垂直矫正
     *
     * @var bool
     */
    public $correctVertical;
    protected $_name = [
        'subSceneId'      => 'SubSceneId',
        'detectDoor'      => 'DetectDoor',
        'countDetectDoor' => 'CountDetectDoor',
        'correctVertical' => 'CorrectVertical',
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
        if (null !== $this->detectDoor) {
            $res['DetectDoor'] = $this->detectDoor;
        }
        if (null !== $this->countDetectDoor) {
            $res['CountDetectDoor'] = $this->countDetectDoor;
        }
        if (null !== $this->correctVertical) {
            $res['CorrectVertical'] = $this->correctVertical;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PredImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }
        if (isset($map['DetectDoor'])) {
            $model->detectDoor = $map['DetectDoor'];
        }
        if (isset($map['CountDetectDoor'])) {
            $model->countDetectDoor = $map['CountDetectDoor'];
        }
        if (isset($map['CorrectVertical'])) {
            $model->correctVertical = $map['CorrectVertical'];
        }

        return $model;
    }
}
