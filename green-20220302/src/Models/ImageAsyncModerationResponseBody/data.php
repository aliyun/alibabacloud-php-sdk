<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageAsyncModerationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the moderated object.
     *
     * @example fb5ffab1-993b-449f-b8d6-b97d5e3331f2
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The reqId field returned by the Image Async Moderation API. You can use this field to query the detection results.
     *
     * @example A07B3DB9-D762-5C56-95B1-8EC55CF176D2
     *
     * @var string
     */
    public $reqId;
    protected $_name = [
        'dataId' => 'DataId',
        'reqId' => 'ReqId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }

        return $model;
    }
}
