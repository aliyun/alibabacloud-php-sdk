<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceDropPacketResponseBody\instanceDropPacket;

class DescribeInstanceDropPacketResponseBody extends Model
{
    /**
     * @var instanceDropPacket
     */
    public $instanceDropPacket;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceDropPacket' => 'InstanceDropPacket',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceDropPacket) {
            $this->instanceDropPacket->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceDropPacket) {
            $res['InstanceDropPacket'] = null !== $this->instanceDropPacket ? $this->instanceDropPacket->toArray($noStream) : $this->instanceDropPacket;
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
        if (isset($map['InstanceDropPacket'])) {
            $model->instanceDropPacket = instanceDropPacket::fromMap($map['InstanceDropPacket']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
