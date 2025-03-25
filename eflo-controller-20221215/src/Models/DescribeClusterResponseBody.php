<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterResponseBody\components;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterResponseBody\networks;

class DescribeClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterDescription;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var components[]
     */
    public $components;

    /**
     * @var string
     */
    public $computingIpVersion;

    /**
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
     * @var int
     */
    public $nodeCount;

    /**
     * @var int
     */
    public $nodeGroupCount;

    /**
     * @var string
     */
    public $openEniJumboFrame;

    /**
     * @var string
     */
    public $operatingState;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $updateTime;

    /**
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

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        if (\is_array($this->networks)) {
            Model::validateArray($this->networks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->components)) {
                $res['Components'] = [];
                $n1 = 0;
                foreach ($this->components as $item1) {
                    $res['Components'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->networks)) {
                $res['Networks'] = [];
                $n1 = 0;
                foreach ($this->networks as $item1) {
                    $res['Networks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Components'] as $item1) {
                    $model->components[$n1++] = components::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Networks'] as $item1) {
                    $model->networks[$n1++] = networks::fromMap($item1);
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
