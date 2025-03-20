<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListLoadBalancerOriginStatusRequest extends Model
{
    /**
     * @description Load balancer ID. When querying multiple load balancers, separate the IDs with commas. A maximum of 100 load balancer IDs can be passed at once. Load balancer IDs can be obtained by calling the [ListLoadBalancers](https://help.aliyun.com/document_detail/2868897.html) interface.
     *
     * This parameter is required.
     *
     * @example 99874066052****,100892832360****
     *
     * @var string
     */
    public $loadBalancerIds;

    /**
     * @description Source address pool type. Various source address pools are configured under the load balancer, including default pools, fallback pools, and primary region pools. Only the status of origins in the default pool affects the status of the load balancer itself. Passing `default_pool` means only querying the status of origins in the default source address pool under the load balancer.
     *
     * @example default_pool
     *
     * @var string
     */
    public $poolType;

    /**
     * @description Site ID.
     *
     * This parameter is required.
     *
     * @example 1159101787****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'loadBalancerIds' => 'LoadBalancerIds',
        'poolType' => 'PoolType',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerIds) {
            $res['LoadBalancerIds'] = $this->loadBalancerIds;
        }
        if (null !== $this->poolType) {
            $res['PoolType'] = $this->poolType;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLoadBalancerOriginStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerIds'])) {
            $model->loadBalancerIds = $map['LoadBalancerIds'];
        }
        if (isset($map['PoolType'])) {
            $model->poolType = $map['PoolType'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
