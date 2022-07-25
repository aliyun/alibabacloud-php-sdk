<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class PredImageRequest extends Model
{
    /**
     * @var bool
     */
    public $correctVertical;

    /**
     * @var int
     */
    public $countDetectDoor;

    /**
     * @var bool
     */
    public $detectDoor;

    /**
     * @var string
     */
    public $subSceneId;
    protected $_name = [
        'correctVertical' => 'CorrectVertical',
        'countDetectDoor' => 'CountDetectDoor',
        'detectDoor'      => 'DetectDoor',
        'subSceneId'      => 'SubSceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->correctVertical) {
            $res['CorrectVertical'] = $this->correctVertical;
        }
        if (null !== $this->countDetectDoor) {
            $res['CountDetectDoor'] = $this->countDetectDoor;
        }
        if (null !== $this->detectDoor) {
            $res['DetectDoor'] = $this->detectDoor;
        }
        if (null !== $this->subSceneId) {
            $res['SubSceneId'] = $this->subSceneId;
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
        if (isset($map['CorrectVertical'])) {
            $model->correctVertical = $map['CorrectVertical'];
        }
        if (isset($map['CountDetectDoor'])) {
            $model->countDetectDoor = $map['CountDetectDoor'];
        }
        if (isset($map['DetectDoor'])) {
            $model->detectDoor = $map['DetectDoor'];
        }
        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }

        return $model;
    }
}
