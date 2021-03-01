<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertClusterRequest extends Model
{
    /**
     * @var string
     */
    public $logicalRegionId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var int
     */
    public $networkMode;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $oversoldFactor;

    /**
     * @var string
     */
    public $iaasProvider;
    protected $_name = [
        'logicalRegionId' => 'LogicalRegionId',
        'clusterName'     => 'ClusterName',
        'clusterType'     => 'ClusterType',
        'networkMode'     => 'NetworkMode',
        'vpcId'           => 'VpcId',
        'oversoldFactor'  => 'OversoldFactor',
        'iaasProvider'    => 'IaasProvider',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->oversoldFactor) {
            $res['OversoldFactor'] = $this->oversoldFactor;
        }
        if (null !== $this->iaasProvider) {
            $res['IaasProvider'] = $this->iaasProvider;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['OversoldFactor'])) {
            $model->oversoldFactor = $map['OversoldFactor'];
        }
        if (isset($map['IaasProvider'])) {
            $model->iaasProvider = $map['IaasProvider'];
        }

        return $model;
    }
}
