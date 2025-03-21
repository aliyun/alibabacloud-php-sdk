<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterResponseBody\components;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterResponseBody\networks;
use AlibabaCloud\Tea\Model;

class DescribeClusterResponseBody extends Model
{
    /**
     * @description Cluster Description
     *
     * @example Default cluster
     *
     * @var string
     */
    public $clusterDescription;

    /**
     * @description Cluster ID
     *
     * @example i116913051662373010974
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Cluster Name
     *
     * @example Eflo-YJ-Test-Cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Cluster Type
     *
     * @example AckEdgePro
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description Component Information
     *
     * @var components[]
     */
    public $components;

    /**
     * @description Type of IP in the compute network
     *
     * @example IPv4
     *
     * @var string
     */
    public $computingIpVersion;

    /**
     * @description Creation Time
     *
     * @example 2022-06-08T07:05:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Cluster Number
     *
     * @example A2
     *
     * @var string
     */
    public $hpnZone;

    /**
     * @description Network Information
     *
     * @var networks[]
     */
    public $networks;

    /**
     * @description Number of Nodes
     *
     * @example 2
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @description Number of Node Groups
     *
     * @example 2
     *
     * @var int
     */
    public $nodeGroupCount;

    /**
     * @description Open Eni Jumbo Frame
     *
     * @example close
     *
     * @var string
     */
    public $openEniJumboFrame;

    /**
     * @description Cluster State
     *
     * @example running
     *
     * @var string
     */
    public $operatingState;

    /**
     * @description Request ID.
     *
     * @example 887FA855-89F4-5DB3-B305-C5879EC480E6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Resource Group ID
     *
     * @example rg-aek2k3rqlvv6ytq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Task ID
     *
     * @example i152609221670466904596
     *
     * @var string
     */
    public $taskId;

    /**
     * @description Update Time
     *
     * @example 2022-08-23T06:36:17.000Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description VPC ID
     *
     * @example vpc-0jlkqysom5dmcviymep3f
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
        'networks' => 'Networks',
        'nodeCount' => 'NodeCount',
        'nodeGroupCount' => 'NodeGroupCount',
        'openEniJumboFrame' => 'OpenEniJumboFrame',
        'operatingState' => 'OperatingState',
        'requestId' => 'RequestId',
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
            $res['Components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['Components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->openEniJumboFrame) {
            $res['OpenEniJumboFrame'] = $this->openEniJumboFrame;
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
                $n = 0;
                foreach ($map['Components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Networks'])) {
            if (!empty($map['Networks'])) {
                $model->networks = [];
                $n = 0;
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
        if (isset($map['OpenEniJumboFrame'])) {
            $model->openEniJumboFrame = $map['OpenEniJumboFrame'];
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
