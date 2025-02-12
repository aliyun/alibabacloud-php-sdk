<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupLatencyResponseBody\latencyPacket;

class DescribeGroupLatencyResponseBody extends Model
{
    /**
     * @var latencyPacket
     */
    public $latencyPacket;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'latencyPacket' => 'LatencyPacket',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->latencyPacket) {
            $this->latencyPacket->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latencyPacket) {
            $res['LatencyPacket'] = null !== $this->latencyPacket ? $this->latencyPacket->toArray($noStream) : $this->latencyPacket;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
