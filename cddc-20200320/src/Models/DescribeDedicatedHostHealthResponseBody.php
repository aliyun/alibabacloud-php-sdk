<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostHealthResponseBody\hostEvents;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostHealthResponseBody extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var mixed[]
     */
    public $resourceEvent;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $healthStatus;

    /**
     * @var hostEvents
     */
    public $hostEvents;
    protected $_name = [
        'dedicatedHostId' => 'DedicatedHostId',
        'resourceEvent'   => 'ResourceEvent',
        'requestId'       => 'RequestId',
        'healthStatus'    => 'HealthStatus',
        'hostEvents'      => 'HostEvents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->resourceEvent) {
            $res['ResourceEvent'] = $this->resourceEvent;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->hostEvents) {
            $res['HostEvents'] = null !== $this->hostEvents ? $this->hostEvents->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostHealthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['ResourceEvent'])) {
            $model->resourceEvent = $map['ResourceEvent'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['HostEvents'])) {
            $model->hostEvents = hostEvents::fromMap($map['HostEvents']);
        }

        return $model;
    }
}
