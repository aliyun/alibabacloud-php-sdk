<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\ResourceInstance\labels;

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
     * @var int
     */
    public $instanceSystemDiskSize;

    /**
     * @var string
     */
    public $instanceTenantIp;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var float
     */
    public $instanceUsedCpu;

    /**
     * @var float
     */
    public $instanceUsedGpu;

    /**
     * @var string
     */
    public $instanceUsedGpuMemory;

    /**
     * @var string
     */
    public $instanceUsedMemory;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'arch' => 'Arch',
        'autoRenewal' => 'AutoRenewal',
        'chargeType' => 'ChargeType',
        'createTime' => 'CreateTime',
        'expiredTime' => 'ExpiredTime',
        'instanceCpuCount' => 'InstanceCpuCount',
        'instanceGpuCount' => 'InstanceGpuCount',
        'instanceGpuMemory' => 'InstanceGpuMemory',
        'instanceId' => 'InstanceId',
        'instanceIp' => 'InstanceIp',
        'instanceMemory' => 'InstanceMemory',
        'instanceName' => 'InstanceName',
        'instanceStatus' => 'InstanceStatus',
        'instanceSystemDiskSize' => 'InstanceSystemDiskSize',
        'instanceTenantIp' => 'InstanceTenantIp',
        'instanceType' => 'InstanceType',
        'instanceUsedCpu' => 'InstanceUsedCpu',
        'instanceUsedGpu' => 'InstanceUsedGpu',
        'instanceUsedGpuMemory' => 'InstanceUsedGpuMemory',
        'instanceUsedMemory' => 'InstanceUsedMemory',
        'labels' => 'Labels',
        'region' => 'Region',
        'resourceId' => 'ResourceId',
        'zone' => 'Zone',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->instanceSystemDiskSize) {
            $res['InstanceSystemDiskSize'] = $this->instanceSystemDiskSize;
        }

        if (null !== $this->instanceTenantIp) {
            $res['InstanceTenantIp'] = $this->instanceTenantIp;
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

        if (null !== $this->instanceUsedGpuMemory) {
            $res['InstanceUsedGpuMemory'] = $this->instanceUsedGpuMemory;
        }

        if (null !== $this->instanceUsedMemory) {
            $res['InstanceUsedMemory'] = $this->instanceUsedMemory;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
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

        if (isset($map['InstanceSystemDiskSize'])) {
            $model->instanceSystemDiskSize = $map['InstanceSystemDiskSize'];
        }

        if (isset($map['InstanceTenantIp'])) {
            $model->instanceTenantIp = $map['InstanceTenantIp'];
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

        if (isset($map['InstanceUsedGpuMemory'])) {
            $model->instanceUsedGpuMemory = $map['InstanceUsedGpuMemory'];
        }

        if (isset($map['InstanceUsedMemory'])) {
            $model->instanceUsedMemory = $map['InstanceUsedMemory'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
