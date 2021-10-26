<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceLatencyResponseBody\instanceLatency;
use AlibabaCloud\Tea\Model;

class DescribeInstanceLatencyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceLatency
     */
    public $instanceLatency;
    protected $_name = [
        'requestId'       => 'RequestId',
        'instanceLatency' => 'InstanceLatency',
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
        if (null !== $this->instanceLatency) {
            $res['InstanceLatency'] = null !== $this->instanceLatency ? $this->instanceLatency->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceLatencyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceLatency'])) {
            $model->instanceLatency = instanceLatency::fromMap($map['InstanceLatency']);
        }

        return $model;
    }
}
