<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetClusterResponseBody;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example 5439271a-015b-433d-befb-d76d****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The import status of the cluster. Valid values:
     *
     *   1: The cluster is imported.
     *   2: The cluster fails to be imported.
     *   3: The cluster is being imported.
     *   4: The cluster is deleted.
     *   0: The cluster is not imported.
     *
     * @example 0
     *
     * @var int
     */
    public $clusterImportStatus;

    /**
     * @description The name of the cluster.
     *
     * @example ClusterTest
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
     *   3: self-managed Kubernetes cluster in EDAS
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
     * @example 4
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The number of used CPU cores.
     *
     * @example 2
     *
     * @var int
     */
    public $cpuUsed;

    /**
     * @description The time when the cluster was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1570708232145
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the Container Service for Kubernetes (ACK) cluster.
     *
     * @example c2ce62869f4d4466b920312315f05****
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
     * @description The provider of Infrastructure as a Service (IaaS) resources used in the cluster.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $iaasProvider;

    /**
     * @description The total size of memory. Unit: MB.
     *
     * @example 2048
     *
     * @var int
     */
    public $mem;

    /**
     * @description The size of used memory. Unit: MB.
     *
     * @example 1024
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
     * @example 2
     *
     * @var int
     */
    public $networkMode;

    /**
     * @description The number of ECS instances.
     *
     * @example 4
     *
     * @var int
     */
    public $nodeNum;

    /**
     * @description The overcommit ratio supported by a Docker cluster. Valid values:
     *
     *   1: 1:1, which means that resources are not overcommitted.
     *   2: 1:2, which means that resources are overcommitted by 1:2.
     *   4: 1:4, which means that resources are overcommitted by 1:4.
     *   8: 1:8, which means that resources are overcommitted by 1:8.
     *
     * @example 2
     *
     * @var int
     */
    public $oversoldFactor;

    /**
     * @description The ID of the region where the cluster resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The subtype of the Kubernetes cluster. Valid values: ManagedKubernetes, Ask, and ExternalKubernetes. ManagedKubernetes refers to the ACK cluster. Ask refers to the Serverless Kubernetes (ASK) cluster. ExternalKubernetes refers to the external cluster.
     *
     * @example ManagedKubernetes
     *
     * @var string
     */
    public $subClusterType;

    /**
     * @description The time when the cluster was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1570708232145
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-xxxxz1mlwpb****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'clusterImportStatus' => 'ClusterImportStatus',
        'clusterName'         => 'ClusterName',
        'clusterType'         => 'ClusterType',
        'cpu'                 => 'Cpu',
        'cpuUsed'             => 'CpuUsed',
        'createTime'          => 'CreateTime',
        'csClusterId'         => 'CsClusterId',
        'description'         => 'Description',
        'iaasProvider'        => 'IaasProvider',
        'mem'                 => 'Mem',
        'memUsed'             => 'MemUsed',
        'networkMode'         => 'NetworkMode',
        'nodeNum'             => 'NodeNum',
        'oversoldFactor'      => 'OversoldFactor',
        'regionId'            => 'RegionId',
        'subClusterType'      => 'SubClusterType',
        'updateTime'          => 'UpdateTime',
        'vpcId'               => 'VpcId',
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
        if (null !== $this->clusterImportStatus) {
            $res['ClusterImportStatus'] = $this->clusterImportStatus;
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
        if (null !== $this->subClusterType) {
            $res['SubClusterType'] = $this->subClusterType;
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
        if (isset($map['ClusterImportStatus'])) {
            $model->clusterImportStatus = $map['ClusterImportStatus'];
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
        if (isset($map['SubClusterType'])) {
            $model->subClusterType = $map['SubClusterType'];
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
