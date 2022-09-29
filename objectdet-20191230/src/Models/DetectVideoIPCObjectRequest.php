<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectVideoIPCObjectRequest extends Model
{
    /**
     * @var bool
     */
    public $callbackOnlyHasObject;

    /**
     * @var int
     */
    public $startTimestamp;

    /**
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
