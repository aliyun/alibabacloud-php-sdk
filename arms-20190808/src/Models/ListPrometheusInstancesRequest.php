<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListPrometheusInstancesRequest extends Model
{
    /**
     * @description Optional instance types (if left blank, all types of instances will be queried):
     *
     * - Edge Kubernetes
     * @example cloud-product-prometheus
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to obtain global aggregation instances. Valid values:
     *
     *   true
     *   false
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $showGlobalView;
    protected $_name = [
        'clusterType'    => 'ClusterType',
        'regionId'       => 'RegionId',
        'showGlobalView' => 'ShowGlobalView',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->showGlobalView) {
            $res['ShowGlobalView'] = $this->showGlobalView;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrometheusInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowGlobalView'])) {
            $model->showGlobalView = $map['ShowGlobalView'];
        }

        return $model;
    }
}
