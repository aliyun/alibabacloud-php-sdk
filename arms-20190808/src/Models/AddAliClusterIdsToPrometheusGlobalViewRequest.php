<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class AddAliClusterIdsToPrometheusGlobalViewRequest extends Model
{
    /**
     * @description The IDs of clusters. Separate multiple IDs with commas (,).
     *
     * This parameter is required.
     *
     * @example cd1d55bef19904324a20ed0ebb86caa5c,c5b48729918ab4745a24482ac29d0973a, c00a94896641449098bf24931e4166003, cd174485c09384060ba542bc1be1185a4
     *
     * @var string
     */
    public $clusterIds;

    /**
     * @description The ID of the global aggregation instance.
     *
     * This parameter is required.
     *
     * @example global-v2-cn-1478326682034601-vss8pd0i
     *
     * @var string
     */
    public $globalViewClusterId;

    /**
     * @description The name of the global aggregation instance.
     *
     * This parameter is required.
     *
     * @example zyGlobalView
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterIds' => 'ClusterIds',
        'globalViewClusterId' => 'GlobalViewClusterId',
        'groupName' => 'GroupName',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }
        if (null !== $this->globalViewClusterId) {
            $res['GlobalViewClusterId'] = $this->globalViewClusterId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAliClusterIdsToPrometheusGlobalViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            $model->clusterIds = $map['ClusterIds'];
        }
        if (isset($map['GlobalViewClusterId'])) {
            $model->globalViewClusterId = $map['GlobalViewClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
