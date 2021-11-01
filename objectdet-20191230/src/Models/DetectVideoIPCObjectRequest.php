<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectVideoIPCObjectRequest extends Model
{
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

    /**
     * @description 视频文件URL地址
     *
     * @var string
     */
    public $videoURL;
    protected $_name = [
        'callbackOnlyHasObject' => 'CallbackOnlyHasObject',
        'startTimestamp'        => 'StartTimestamp',
        'videoURL'              => 'VideoURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackOnlyHasObject) {
            $res['CallbackOnlyHasObject'] = $this->callbackOnlyHasObject;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectVideoIPCObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackOnlyHasObject'])) {
            $model->callbackOnlyHasObject = $map['CallbackOnlyHasObject'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }

        return $model;
    }
}
