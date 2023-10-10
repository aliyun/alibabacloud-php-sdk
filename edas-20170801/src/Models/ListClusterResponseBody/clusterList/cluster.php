<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterResponseBody\clusterList;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @description The ID of the cluster in EDAS.
     *
     * @example b98b5919-c111-4dad-9f74-7233********
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example cluster-test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   0: regular Docker cluster
     *   1: Swarm cluster
     *   2: Elastic Compute Service (ECS) cluster
     *   3: self-managed Kubernetes cluster in Enterprise Distributed Application Service (EDAS)
     *   4: cluster in which Pandora automatically registers applications
     *   5: ACK cluster
     *
     * @example 2
     *
     * @var int
     */
    public $clusterType;

    /**
     * @description The total number of CPU cores.
     *
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The number of used CPU cores.
     *
     * @example 1
     *
     * @var int
     */
    public $cpuUsed;

    /**
     * @description The timestamp when the cluster was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1502888064561
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the cluster in Container Service for Kubernetes (ACK).
     *
     * @example c2ce************b9203a9
     *
     * @var string
     */
    public $csClusterId;

    /**
     * @description The description of the cluster.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The provider of the cluster.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $iaasProvider;

    /**
     * @description The total size of memory. Unit: MB.
     *
     * @example 3072
     *
     * @var int
     */
    public $mem;

    /**
     * @description The size of used memory. Unit: MB.
     *
     * @example 200
     *
     * @var int
     */
    public $memUsed;

    /**
     * @description The network type of the cluster. Valid values:
     *
     *   1: classic network
     *   2: virtual private cloud (VPC)
     *
     * @example 1
     *
     * @var int
     */
    public $networkMode;

    /**
     * @description The number of instances.
     *
     * @example 2
     *
     * @var int
     */
    public $nodeNum;

    /**
     * @description The CPU overcommit ratio that is supported by a Docker cluster. Valid values:
     *
     *   1: 1:1, which means that CPU resources are not overcommitted.
     *   2: 1:2, which means that CPU resources are overcommitted by 1:2.
     *   4: 1:4, which means that CPU resources are overcommitted by 1:4.
     *   8: 1:8, which means that CPU resources are overcommitted by 1:8.
     *
     * @example 1
     *
     * @var int
     */
    public $oversoldFactor;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example 461
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The timestamp when the cluster was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1533820823203
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description VPC ID
     *
     * @example vpc-23727****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'clusterName'     => 'ClusterName',
        'clusterType'     => 'ClusterType',
        'cpu'             => 'Cpu',
        'cpuUsed'         => 'CpuUsed',
        'createTime'      => 'CreateTime',
        'csClusterId'     => 'CsClusterId',
        'description'     => 'Description',
        'iaasProvider'    => 'IaasProvider',
        'mem'             => 'Mem',
        'memUsed'         => 'MemUsed',
        'networkMode'     => 'NetworkMode',
        'nodeNum'         => 'NodeNum',
        'oversoldFactor'  => 'OversoldFactor',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'updateTime'      => 'UpdateTime',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->cpuUsed) {
            $res['CpuUsed'] = $this->cpuUsed;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->csClusterId) {
            $res['CsClusterId'] = $this->csClusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->iaasProvider) {
            $res['IaasProvider'] = $this->iaasProvider;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->memUsed) {
            $res['MemUsed'] = $this->memUsed;
        }
        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->oversoldFactor) {
            $res['OversoldFactor'] = $this->oversoldFactor;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CpuUsed'])) {
            $model->cpuUsed = $map['CpuUsed'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CsClusterId'])) {
            $model->csClusterId = $map['CsClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IaasProvider'])) {
            $model->iaasProvider = $map['IaasProvider'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['MemUsed'])) {
            $model->memUsed = $map['MemUsed'];
        }
        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['OversoldFactor'])) {
            $model->oversoldFactor = $map['OversoldFactor'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
