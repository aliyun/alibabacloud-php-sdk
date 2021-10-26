<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupLatencyResponseBody\latencyPacket;
use AlibabaCloud\Tea\Model;

class DescribeGroupLatencyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var latencyPacket
     */
    public $latencyPacket;
    protected $_name = [
        'requestId'     => 'RequestId',
        'latencyPacket' => 'LatencyPacket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->latencyPacket) {
            $res['LatencyPacket'] = null !== $this->latencyPacket ? $this->latencyPacket->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LatencyPacket'])) {
            $model->latencyPacket = latencyPacket::fromMap($map['LatencyPacket']);
        }

        return $model;
    }
}
