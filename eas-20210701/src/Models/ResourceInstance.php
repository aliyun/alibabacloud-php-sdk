<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ResourceInstance extends Model
{
    /**
     * @var string
     */
    public $arch;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $instanceCpuCount;

    /**
     * @var int
     */
    public $instanceGpuCount;

    /**
     * @var string
     */
    public $instanceGpuMemory;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceIp;

    /**
     * @var string
     */
    public $instanceMemory;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var float
     */
    public $instanceUsedCpu;

    /**
     * @var int
     */
    public $instanceUsedGpu;

    /**
     * @var string
     */
    public $instanceUsedMemory;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'arch'               => 'Arch',
        'autoRenewal'        => 'AutoRenewal',
        'chargeType'         => 'ChargeType',
        'createTime'         => 'CreateTime',
        'expiredTime'        => 'ExpiredTime',
        'instanceCpuCount'   => 'InstanceCpuCount',
        'instanceGpuCount'   => 'InstanceGpuCount',
        'instanceGpuMemory'  => 'InstanceGpuMemory',
        'instanceId'         => 'InstanceId',
        'instanceIp'         => 'InstanceIp',
        'instanceMemory'     => 'InstanceMemory',
        'instanceName'       => 'InstanceName',
        'instanceStatus'     => 'InstanceStatus',
        'instanceType'       => 'InstanceType',
        'instanceUsedCpu'    => 'InstanceUsedCpu',
        'instanceUsedGpu'    => 'InstanceUsedGpu',
        'instanceUsedMemory' => 'InstanceUsedMemory',
        'region'             => 'Region',
        'zone'               => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arch) {
            $res['Arch'] = $this->arch;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->instanceCpuCount) {
            $res['InstanceCpuCount'] = $this->instanceCpuCount;
        }
        if (null !== $this->instanceGpuCount) {
            $res['InstanceGpuCount'] = $this->instanceGpuCount;
        }
        if (null !== $this->instanceGpuMemory) {
            $res['InstanceGpuMemory'] = $this->instanceGpuMemory;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceIp) {
            $res['InstanceIp'] = $this->instanceIp;
        }
        if (null !== $this->instanceMemory) {
            $res['InstanceMemory'] = $this->instanceMemory;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceUsedCpu) {
            $res['InstanceUsedCpu'] = $this->instanceUsedCpu;
        }
        if (null !== $this->instanceUsedGpu) {
            $res['InstanceUsedGpu'] = $this->instanceUsedGpu;
        }
        if (null !== $this->instanceUsedMemory) {
            $res['InstanceUsedMemory'] = $this->instanceUsedMemory;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arch'])) {
            $model->arch = $map['Arch'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InstanceCpuCount'])) {
            $model->instanceCpuCount = $map['InstanceCpuCount'];
        }
        if (isset($map['InstanceGpuCount'])) {
            $model->instanceGpuCount = $map['InstanceGpuCount'];
        }
        if (isset($map['InstanceGpuMemory'])) {
            $model->instanceGpuMemory = $map['InstanceGpuMemory'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceIp'])) {
            $model->instanceIp = $map['InstanceIp'];
        }
        if (isset($map['InstanceMemory'])) {
            $model->instanceMemory = $map['InstanceMemory'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceUsedCpu'])) {
            $model->instanceUsedCpu = $map['InstanceUsedCpu'];
        }
        if (isset($map['InstanceUsedGpu'])) {
            $model->instanceUsedGpu = $map['InstanceUsedGpu'];
        }
        if (isset($map['InstanceUsedMemory'])) {
            $model->instanceUsedMemory = $map['InstanceUsedMemory'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
