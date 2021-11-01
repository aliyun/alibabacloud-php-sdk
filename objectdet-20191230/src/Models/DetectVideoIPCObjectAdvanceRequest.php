<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class DetectVideoIPCObjectAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoURLObject;

    /**
     * @description 是否只有检测到物体才回调
     *
     * @var bool
     */
    public $callbackOnlyHasObject;

    /**
     * @description 视频的开始时间戳(秒)，即UTC时间，默认为0
     *
     * @var int
     */
    public $startTimestamp;
    protected $_name = [
        'videoURLObject'        => 'VideoURLObject',
        'callbackOnlyHasObject' => 'CallbackOnlyHasObject',
        'startTimestamp'        => 'StartTimestamp',
    ];

    public function validate()
    {
        Model::validateRequired('videoURLObject', $this->videoURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURLObject) {
            $res['VideoURLObject'] = $this->videoURLObject;
        }
        if (null !== $this->callbackOnlyHasObject) {
            $res['CallbackOnlyHasObject'] = $this->callbackOnlyHasObject;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectVideoIPCObjectAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURLObject'])) {
            $model->videoURLObject = $map['VideoURLObject'];
        }
        if (isset($map['CallbackOnlyHasObject'])) {
            $model->callbackOnlyHasObject = $map['CallbackOnlyHasObject'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        return $model;
    }
}
