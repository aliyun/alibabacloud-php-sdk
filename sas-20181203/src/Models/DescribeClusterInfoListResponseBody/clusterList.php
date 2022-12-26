<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterInfoListResponseBody;

use AlibabaCloud\Tea\Model;

class clusterList extends Model
{
    /**
     * @example cfeb7a9f99ce740e98c5595d0fe37****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example test111
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example ManagedKubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Available
     *
     * @var string
     */
    public $state;

    /**
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
