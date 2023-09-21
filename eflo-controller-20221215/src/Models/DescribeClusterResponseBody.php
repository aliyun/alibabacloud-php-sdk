<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterResponseBody\components;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterResponseBody\networks;
use AlibabaCloud\Tea\Model;

class DescribeClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterDescription;

    /**
     * @example i116913051662373010974
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example Eflo-YJ-Test-Cluster
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
     * @var components[]
     */
    public $components;

    /**
     * @example 2022-06-08T07:05:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $hpnZone;

    /**
     * @var networks[]
     */
    public $networks;

    /**
     * @example 2
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
     * @example running
     *
     * @var string
     */
    public $operatingState;

    /**
     * @example 887FA855-89F4-5DB3-B305-C5879EC480E6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-aek2k3rqlvv6ytq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example i152609221670466904596
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 2022-08-23T06:36:17.000Z
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
        'hpnZone'            => 'HpnZone',
        'networks'           => 'Networks',
        'nodeCount'          => 'NodeCount',
        'nodeGroupCount'     => 'NodeGroupCount',
        'operatingState'     => 'OperatingState',
        'requestId'          => 'RequestId',
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
            $res['Components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['Components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->hpnZone) {
            $res['HpnZone'] = $this->hpnZone;
        }
        if (null !== $this->networks) {
            $res['Networks'] = [];
            if (null !== $this->networks && \is_array($this->networks)) {
                $n = 0;
                foreach ($this->networks as $item) {
                    $res['Networks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeClusterResponseBody
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
            if (!empty($map['Components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['Components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HpnZone'])) {
            $model->hpnZone = $map['HpnZone'];
        }
        if (isset($map['Networks'])) {
            if (!empty($map['Networks'])) {
                $model->networks = [];
                $n               = 0;
                foreach ($map['Networks'] as $item) {
                    $model->networks[$n++] = null !== $item ? networks::fromMap($item) : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
