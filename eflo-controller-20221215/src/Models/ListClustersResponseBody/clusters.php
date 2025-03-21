<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClustersResponseBody;

use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @description Cluster description
     *
     * @example PPU-cluster2 bz
     *
     * @var string
     */
    public $clusterDescription;

    /**
     * @description Cluster ID
     *
     * @example i137590131672134915401
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Cluster name
     *
     * @example cnp_test_cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Cluster type
     *
     * @example AckEdgePro
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description Component information
     *
     * @example {}
     *
     * @var mixed
     */
    public $components;

    /**
     * @description IP version of the computing network
     *
     * @example IPv4
     *
     * @var string
     */
    public $computingIpVersion;

    /**
     * @description Creation time
     *
     * @example 1672134938
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Cluster number
     *
     * @example B1
     *
     * @var string
     */
    public $hpnZone;

    /**
     * @description Number of nodes
     *
     * @example 12
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @description Number of node groups
     *
     * @example 2
     *
     * @var int
     */
    public $nodeGroupCount;

    /**
     * @description Cluster status
     *
     * @example initializing
     *
     * @var string
     */
    public $operatingState;

    /**
     * @description Resource group ID
     *
     * @example rg-aek2ajbjoloa23q
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Task ID
     *
     * @example i156365121663149566024
     *
     * @var string
     */
    public $taskId;

    /**
     * @description Update time
     *
     * @example 1672134968
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description VPC ID
     *
     * @example vpc-0jlx4hol2bjboafzmffvd
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterDescription' => 'ClusterDescription',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'clusterType' => 'ClusterType',
        'components' => 'Components',
        'computingIpVersion' => 'ComputingIpVersion',
        'createTime' => 'CreateTime',
        'hpnZone' => 'HpnZone',
        'nodeCount' => 'NodeCount',
        'nodeGroupCount' => 'NodeGroupCount',
        'operatingState' => 'OperatingState',
        'resourceGroupId' => 'ResourceGroupId',
        'taskId' => 'TaskId',
        'updateTime' => 'UpdateTime',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterDescription) {
            $res['ClusterDescription'] = $this->clusterDescription;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->components) {
            $res['Components'] = $this->components;
        }
        if (null !== $this->computingIpVersion) {
            $res['ComputingIpVersion'] = $this->computingIpVersion;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->hpnZone) {
            $res['HpnZone'] = $this->hpnZone;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->nodeGroupCount) {
            $res['NodeGroupCount'] = $this->nodeGroupCount;
        }
        if (null !== $this->operatingState) {
            $res['OperatingState'] = $this->operatingState;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterDescription'])) {
            $model->clusterDescription = $map['ClusterDescription'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Components'])) {
            $model->components = $map['Components'];
        }
        if (isset($map['ComputingIpVersion'])) {
            $model->computingIpVersion = $map['ComputingIpVersion'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HpnZone'])) {
            $model->hpnZone = $map['HpnZone'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['NodeGroupCount'])) {
            $model->nodeGroupCount = $map['NodeGroupCount'];
        }
        if (isset($map['OperatingState'])) {
            $model->operatingState = $map['OperatingState'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
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
