<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterBasicInfoResponseBody;

use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @description The ID of cluster.
     *
     * @example c870ec78ecbcb41d2a35c679823ef****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example testackpro
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   **ManagedKubernetes**: managed Kubernetes cluster
     *   **NotManagedKubernetes**: non-managed Kubernetes cluster
     *   **PrivateKubernetes**: private cluster
     *   **kubernetes**: dedicated Kubernetes cluster
     *   **ask**: dedicated ASK cluster
     *
     * @example kubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The timestamp when the cluster was created. Unit: milliseconds.
     *
     * @example 1662038134000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The version of the cluster.
     *
     * @example 1.22.10-aliyun.1
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description The number of instances in the cluster.
     *
     * @example 10
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The ID of the region in which the cluster is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   **unavailable**
     *   **Available**
     *   **Creating**
     *   **CreateFailed**
     *
     * @example Available
     *
     * @var string
     */
    public $state;

    /**
     * @description Indicates whether the cluster is enabled. Valid values:
     *
     *   **true**: The cluster is enabled.
     *   **false**: The cluster is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $targetResult;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'clusterName'    => 'ClusterName',
        'clusterType'    => 'ClusterType',
        'createTime'     => 'CreateTime',
        'currentVersion' => 'CurrentVersion',
        'instanceCount'  => 'InstanceCount',
        'regionId'       => 'RegionId',
        'state'          => 'State',
        'targetResult'   => 'TargetResult',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->targetResult) {
            $res['TargetResult'] = $this->targetResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInfo
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TargetResult'])) {
            $model->targetResult = $map['TargetResult'];
        }

        return $model;
    }
}
