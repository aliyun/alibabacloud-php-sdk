<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateRoomRealTimeStreamAddressResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F8DB7E25-6A35-161A-AA41-B7A658AF****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The RTMP ingest URL.
     *
     * @var string
     */
    public $rtmpAddress;
    protected $_name = [
        'requestId' => 'RequestId',
        'rtmpAddress' => 'RtmpAddress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rtmpAddress) {
            $res['RtmpAddress'] = $this->rtmpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoomRealTimeStreamAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RtmpAddress'])) {
            $model->rtmpAddress = $map['RtmpAddress'];
        }

        return $model;
    }
}
