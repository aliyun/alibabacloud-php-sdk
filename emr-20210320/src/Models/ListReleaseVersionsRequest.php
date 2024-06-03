<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListReleaseVersionsRequest extends Model
{
    /**
     * @description The type of the cluster.
     *
     * This parameter is required.
     * @example DATALAKE
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The type of the IaaS resource.
     *
     * @example ECS
     *
     * @var string
     */
    public $iaasType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'iaasType'    => 'IaasType',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->iaasType) {
            $res['IaasType'] = $this->iaasType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListReleaseVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['IaasType'])) {
            $model->iaasType = $map['IaasType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
