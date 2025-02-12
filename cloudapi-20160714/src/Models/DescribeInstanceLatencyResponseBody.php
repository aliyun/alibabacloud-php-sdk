<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceLatencyResponseBody\instanceLatency;

class DescribeInstanceLatencyResponseBody extends Model
{
    /**
     * @var instanceLatency
     */
    public $instanceLatency;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceLatency' => 'InstanceLatency',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceLatency) {
            $this->instanceLatency->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceLatency) {
            $res['InstanceLatency'] = null !== $this->instanceLatency ? $this->instanceLatency->toArray($noStream) : $this->instanceLatency;
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
        if (isset($map['InstanceLatency'])) {
            $model->instanceLatency = instanceLatency::fromMap($map['InstanceLatency']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
