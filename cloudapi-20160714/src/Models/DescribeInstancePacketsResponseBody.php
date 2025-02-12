<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancePacketsResponseBody\instancePackets;

class DescribeInstancePacketsResponseBody extends Model
{
    /**
     * @var instancePackets
     */
    public $instancePackets;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instancePackets' => 'InstancePackets',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instancePackets) {
            $this->instancePackets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instancePackets) {
            $res['InstancePackets'] = null !== $this->instancePackets ? $this->instancePackets->toArray($noStream) : $this->instancePackets;
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
        if (isset($map['InstancePackets'])) {
            $model->instancePackets = instancePackets::fromMap($map['InstancePackets']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
