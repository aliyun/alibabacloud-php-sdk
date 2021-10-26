<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceDropPacketResponseBody\instanceDropPacket;
use AlibabaCloud\Tea\Model;

class DescribeInstanceDropPacketResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceDropPacket
     */
    public $instanceDropPacket;
    protected $_name = [
        'requestId'          => 'RequestId',
        'instanceDropPacket' => 'InstanceDropPacket',
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
        if (null !== $this->instanceDropPacket) {
            $res['InstanceDropPacket'] = null !== $this->instanceDropPacket ? $this->instanceDropPacket->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceDropPacketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceDropPacket'])) {
            $model->instanceDropPacket = instanceDropPacket::fromMap($map['InstanceDropPacket']);
        }

        return $model;
    }
}
