<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupLatencyResponseBody\latencyPacket;
use AlibabaCloud\Tea\Model;

class DescribeGroupLatencyResponseBody extends Model
{
    /**
     * @var latencyPacket
     */
    public $latencyPacket;

    /**
     * @example 75DC3AB0-421C-5371-8170-86AEABF77AD0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'latencyPacket' => 'LatencyPacket',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latencyPacket) {
            $res['LatencyPacket'] = null !== $this->latencyPacket ? $this->latencyPacket->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupLatencyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LatencyPacket'])) {
            $model->latencyPacket = latencyPacket::fromMap($map['LatencyPacket']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
