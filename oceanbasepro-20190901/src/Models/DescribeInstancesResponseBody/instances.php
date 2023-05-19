<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The time in UTC when the cluster expires.
     *
     * @var string[]
     */
    public $availableZones;

    /**
     * @description The storage space of each replica node in the cluster, in GB.
     *
     * @example oceanbase_oceanbasepost_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The product code of the OceanBase cluster.
     * - oceanbase_obpre_public_intl: indicates an OceanBase cluster that is billed based on the subscription plan and that is deployed in an international site.
     * @example 14
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The number of OceanBase clusters queried.
     *
     * @example 2021-10-19T07:13:41Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The request ID.
     *
     * @example 1-1-1
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description Alibaba Cloud provides SDKs in different languages to help you quickly integrate Alibaba Cloud products and services by using APIs. We recommend that you use an SDK to call APIs. In this way, you do not need to sign for verification.
     *
     * @example multiple
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The information about the memory resources of the cluster.
     *
     * @example 200
     *
     * @var string
     */
    public $diskSize;

    /**
     * @description The number of CPU cores used in the cluster.
     *
     * @example cloud_essd_pl1
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example true
     *
     * @var bool
     */
    public $enableUpgradeNodes;

    /**
     * @description The whitelist information of the cluster.
     *
     * @example 2606682
     *
     * @var int
     */
    public $expireSeconds;

    /**
     * @description The information about the storage resources of the cluster.
     *
     * @example 2021-10-17T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The instance type.
     *
     * @example 14C70G
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The total storage space of the cluster, in GB.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The return result of the request.
     *
     * @example ob4test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceRole;

    /**
     * @description You can call this operation to obtain the list of OceanBase clusters.
     *
     * @example KAFKA_PUBLIC
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The return result of the request.
     *
     * @example 2021-10-19T07:13:41Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description The information about the CPU resources of the cluster.
     *
     * @example 70
     *
     * @var int
     */
    public $mem;

    /**
     * @description It is an Alibaba Cloud asset management and configuration tool, with which you can manage multiple Alibaba Cloud products and services by using commands. It is easy to use and a good helper in migration to cloud.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @description The type of the storage disk where the cluster is deployed.
     * The default value is cloud_essd_pl1, which indicates an ESSD cloud disk.
     * @var resource
     */
    public $resource;

    /**
     * @description The number of OceanBase clusters queried.
     *
     * @example group1
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The number of the page to return.
     *
     * - Default value: 1
     * @var string[]
     */
    public $securityIps;

    /**
     * @description The billing method for the OceanBase cluster. Valid values:
     * - POSTPAY: the pay-as-you-go billing method.
     * @example NORMAL
     *
     * @var string
     */
    public $series;

    /**
     * @description The number of resource units in the cluster.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $state;

    /**
     * @description The number of resource units in the cluster.
     *
     * @example 20
     *
     * @var int
     */
    public $usedDiskSize;

    /**
     * @description The total number of CPU cores of the cluster.
     *
     * @example 2.2.77
     *
     * @var string
     */
    public $version;

    /**
     * @description vpcId
     *
     * @example vpc-8vb8qjrixzovjpy******
     *
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
        'instanceRole'       => 'InstanceRole',
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
        if (null !== $this->instanceRole) {
            $res['InstanceRole'] = $this->instanceRole;
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
        if (isset($map['InstanceRole'])) {
            $model->instanceRole = $map['InstanceRole'];
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
