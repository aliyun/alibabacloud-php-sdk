<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string[]
     */
    public $availableZones;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $diskSize;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var bool
     */
    public $enableUpgradeNodes;

    /**
     * @var int
     */
    public $expireSeconds;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $securityIps;

    /**
     * @var string
     */
    public $series;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $usedDiskSize;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'availableZones'     => 'AvailableZones',
        'commodityCode'      => 'CommodityCode',
        'cpu'                => 'Cpu',
        'createTime'         => 'CreateTime',
        'deployMode'         => 'DeployMode',
        'deployType'         => 'DeployType',
        'diskSize'           => 'DiskSize',
        'diskType'           => 'DiskType',
        'enableUpgradeNodes' => 'EnableUpgradeNodes',
        'expireSeconds'      => 'ExpireSeconds',
        'expireTime'         => 'ExpireTime',
        'instanceClass'      => 'InstanceClass',
        'instanceId'         => 'InstanceId',
        'instanceName'       => 'InstanceName',
        'instanceType'       => 'InstanceType',
        'maintainTime'       => 'MaintainTime',
        'mem'                => 'Mem',
        'payType'            => 'PayType',
        'resource'           => 'Resource',
        'resourceGroupId'    => 'ResourceGroupId',
        'securityIps'        => 'SecurityIps',
        'series'             => 'Series',
        'state'              => 'State',
        'usedDiskSize'       => 'UsedDiskSize',
        'version'            => 'Version',
        'vpcId'              => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableZones) {
            $res['AvailableZones'] = $this->availableZones;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->enableUpgradeNodes) {
            $res['EnableUpgradeNodes'] = $this->enableUpgradeNodes;
        }
        if (null !== $this->expireSeconds) {
            $res['ExpireSeconds'] = $this->expireSeconds;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }
        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->usedDiskSize) {
            $res['UsedDiskSize'] = $this->usedDiskSize;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableZones'])) {
            if (!empty($map['AvailableZones'])) {
                $model->availableZones = $map['AvailableZones'];
            }
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['EnableUpgradeNodes'])) {
            $model->enableUpgradeNodes = $map['EnableUpgradeNodes'];
        }
        if (isset($map['ExpireSeconds'])) {
            $model->expireSeconds = $map['ExpireSeconds'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityIps'])) {
            if (!empty($map['SecurityIps'])) {
                $model->securityIps = $map['SecurityIps'];
            }
        }
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UsedDiskSize'])) {
            $model->usedDiskSize = $map['UsedDiskSize'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
