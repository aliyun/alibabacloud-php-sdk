<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeEvaluateDedicatedHostsForInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class dedicatedHosts extends Model
{
    /**
     * @var bool
     */
    public $isContainReadOnlyInstance;

    /**
     * @var bool
     */
    public $hostAllocationStatus;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $hostFreeMem;

    /**
     * @var string
     */
    public $hostStatus;

    /**
     * @var int
     */
    public $hostFreeCPU;

    /**
     * @var int
     */
    public $hostStorage;

    /**
     * @var int
     */
    public $hostCPU;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $hostFreeStorage;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var bool
     */
    public $isCouldSSD;

    /**
     * @var bool
     */
    public $isAvailableForInstance;

    /**
     * @var int
     */
    public $hostMem;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $IPAddress;
    protected $_name = [
        'isContainReadOnlyInstance' => 'IsContainReadOnlyInstance',
        'hostAllocationStatus'      => 'HostAllocationStatus',
        'comment'                   => 'Comment',
        'hostFreeMem'               => 'HostFreeMem',
        'hostStatus'                => 'HostStatus',
        'hostFreeCPU'               => 'HostFreeCPU',
        'hostStorage'               => 'HostStorage',
        'hostCPU'                   => 'HostCPU',
        'regionId'                  => 'RegionId',
        'hostFreeStorage'           => 'HostFreeStorage',
        'vSwitchId'                 => 'VSwitchId',
        'dedicatedHostName'         => 'DedicatedHostName',
        'zoneId'                    => 'ZoneId',
        'dedicatedHostId'           => 'DedicatedHostId',
        'engine'                    => 'Engine',
        'isCouldSSD'                => 'IsCouldSSD',
        'isAvailableForInstance'    => 'IsAvailableForInstance',
        'hostMem'                   => 'HostMem',
        'createdTime'               => 'CreatedTime',
        'IPAddress'                 => 'IPAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isContainReadOnlyInstance) {
            $res['IsContainReadOnlyInstance'] = $this->isContainReadOnlyInstance;
        }
        if (null !== $this->hostAllocationStatus) {
            $res['HostAllocationStatus'] = $this->hostAllocationStatus;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->hostFreeMem) {
            $res['HostFreeMem'] = $this->hostFreeMem;
        }
        if (null !== $this->hostStatus) {
            $res['HostStatus'] = $this->hostStatus;
        }
        if (null !== $this->hostFreeCPU) {
            $res['HostFreeCPU'] = $this->hostFreeCPU;
        }
        if (null !== $this->hostStorage) {
            $res['HostStorage'] = $this->hostStorage;
        }
        if (null !== $this->hostCPU) {
            $res['HostCPU'] = $this->hostCPU;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->hostFreeStorage) {
            $res['HostFreeStorage'] = $this->hostFreeStorage;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->isCouldSSD) {
            $res['IsCouldSSD'] = $this->isCouldSSD;
        }
        if (null !== $this->isAvailableForInstance) {
            $res['IsAvailableForInstance'] = $this->isAvailableForInstance;
        }
        if (null !== $this->hostMem) {
            $res['HostMem'] = $this->hostMem;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
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
        if (isset($map['IsContainReadOnlyInstance'])) {
            $model->isContainReadOnlyInstance = $map['IsContainReadOnlyInstance'];
        }
        if (isset($map['HostAllocationStatus'])) {
            $model->hostAllocationStatus = $map['HostAllocationStatus'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['HostFreeMem'])) {
            $model->hostFreeMem = $map['HostFreeMem'];
        }
        if (isset($map['HostStatus'])) {
            $model->hostStatus = $map['HostStatus'];
        }
        if (isset($map['HostFreeCPU'])) {
            $model->hostFreeCPU = $map['HostFreeCPU'];
        }
        if (isset($map['HostStorage'])) {
            $model->hostStorage = $map['HostStorage'];
        }
        if (isset($map['HostCPU'])) {
            $model->hostCPU = $map['HostCPU'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['HostFreeStorage'])) {
            $model->hostFreeStorage = $map['HostFreeStorage'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['IsCouldSSD'])) {
            $model->isCouldSSD = $map['IsCouldSSD'];
        }
        if (isset($map['IsAvailableForInstance'])) {
            $model->isAvailableForInstance = $map['IsAvailableForInstance'];
        }
        if (isset($map['HostMem'])) {
            $model->hostMem = $map['HostMem'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }

        return $model;
    }
}
