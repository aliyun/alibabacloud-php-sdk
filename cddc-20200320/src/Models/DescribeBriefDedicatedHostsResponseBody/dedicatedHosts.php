<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeBriefDedicatedHostsResponseBody;

use AlibabaCloud\Tea\Model;

class dedicatedHosts extends Model
{
    /**
     * @var string
     */
    public $allocationStatus;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $hostStatus;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $hostCPU;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $hostMem;

    /**
     * @var string
     */
    public $createdTime;
    protected $_name = [
        'allocationStatus' => 'AllocationStatus',
        'region'           => 'Region',
        'hostStatus'       => 'HostStatus',
        'zoneId'           => 'ZoneId',
        'hostCPU'          => 'HostCPU',
        'dedicatedHostId'  => 'DedicatedHostId',
        'engine'           => 'Engine',
        'hostMem'          => 'HostMem',
        'createdTime'      => 'CreatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationStatus) {
            $res['AllocationStatus'] = $this->allocationStatus;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->hostStatus) {
            $res['HostStatus'] = $this->hostStatus;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->hostCPU) {
            $res['HostCPU'] = $this->hostCPU;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->hostMem) {
            $res['HostMem'] = $this->hostMem;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['HostStatus'])) {
            $model->hostStatus = $map['HostStatus'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['HostCPU'])) {
            $model->hostCPU = $map['HostCPU'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['HostMem'])) {
            $model->hostMem = $map['HostMem'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        return $model;
    }
}
