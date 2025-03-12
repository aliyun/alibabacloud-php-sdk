<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterInfoListResponseBody;

use AlibabaCloud\Tea\Model;

class clusterList extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * @example cfeb7a9f99ce740e98c5595d0fe37****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the container cluster.
     *
     * @example test111
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   **ManagedKubernetes**: managed Kubernetes cluster.
     *   **NotManagedKubernetes**: non-managed Kubernetes cluster.
     *   **PrivateKubernetes**: private cluster.
     *   **kubernetes**: dedicated Kubernetes cluster.
     *   **ask**: dedicated serverless Kubernetes (ASK) cluster.
     *
     * @example ManagedKubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The region in which the cluster resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   **unavailable**: The cluster is unavailable.
     *   **Available**: The cluster is available.
     *   **Creating**: The cluster is being created.
     *   **CreateFailed**: The cluster failed to be created.
     *
     * @example Available
     *
     * @var string
     */
    public $state;

    /**
     * @description Indicates whether container network topology was enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $targetResult;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'clusterName'  => 'ClusterName',
        'clusterType'  => 'ClusterType',
        'regionId'     => 'RegionId',
        'state'        => 'State',
        'targetResult' => 'TargetResult',
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
     * @return clusterList
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
