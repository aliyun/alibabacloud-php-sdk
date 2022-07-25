<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class RectVerticalRequest extends Model
{
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

    /**
     * @var string
     */
    public $verticalRect;
    protected $_name = [
        'countDetectDoor' => 'CountDetectDoor',
        'detectDoor'      => 'DetectDoor',
        'subSceneId'      => 'SubSceneId',
        'verticalRect'    => 'VerticalRect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countDetectDoor) {
            $res['CountDetectDoor'] = $this->countDetectDoor;
        }
        if (null !== $this->detectDoor) {
            $res['DetectDoor'] = $this->detectDoor;
        }
        if (null !== $this->subSceneId) {
            $res['SubSceneId'] = $this->subSceneId;
        }
        if (null !== $this->verticalRect) {
            $res['VerticalRect'] = $this->verticalRect;
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
        if (isset($map['CountDetectDoor'])) {
            $model->countDetectDoor = $map['CountDetectDoor'];
        }
        if (isset($map['DetectDoor'])) {
            $model->detectDoor = $map['DetectDoor'];
        }
        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }
        if (isset($map['VerticalRect'])) {
            $model->verticalRect = $map['VerticalRect'];
        }

        return $model;
    }
}
