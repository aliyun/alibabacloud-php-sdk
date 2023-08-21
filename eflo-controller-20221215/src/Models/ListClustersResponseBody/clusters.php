<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClustersResponseBody;

use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @var string
     */
    public $clusterDescription;

    /**
     * @example i137590131672134915401
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example cnp_test_cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example AckEdgPro
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $components;

    /**
     * @example 1672134938
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 12
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $nodeGroupCount;

    /**
     * @example initializing
     *
     * @var string
     */
    public $operatingState;

    /**
     * @example rg-aek2ajbjoloa23q
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example i156365121663149566024
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 1672134968
     *
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterDescription' => 'ClusterDescription',
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'clusterType'        => 'ClusterType',
        'components'         => 'Components',
        'createTime'         => 'CreateTime',
        'nodeCount'          => 'NodeCount',
        'nodeGroupCount'     => 'NodeGroupCount',
        'operatingState'     => 'OperatingState',
        'resourceGroupId'    => 'ResourceGroupId',
        'taskId'             => 'TaskId',
        'updateTime'         => 'UpdateTime',
        'vpcId'              => 'VpcId',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
