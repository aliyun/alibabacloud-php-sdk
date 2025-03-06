<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceLatencyResponseBody\instanceLatency;
use AlibabaCloud\Tea\Model;

class DescribeInstanceLatencyResponseBody extends Model
{
    /**
     * @description The list of average latencies in the instance.
     *
     * @var instanceLatency
     */
    public $instanceLatency;

    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ004
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceLatency' => 'InstanceLatency',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceLatency) {
            $res['InstanceLatency'] = null !== $this->instanceLatency ? $this->instanceLatency->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceLatency'])) {
            $model->instanceLatency = instanceLatency::fromMap($map['InstanceLatency']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
