<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetLoadBalancerRequest extends Model
{
    /**
     * @description The ID of the load balancer, used to uniquely identify the load balancer to be queried. This ID is returned directly when the load balancer is created, or it can be obtained through the [ListLoadBalancers](https://help.aliyun.com/document_detail/2868897.html) interface for querying all load balancers under a site.
     *
     * This parameter is required.
     *
     * @example 99867648760****
     *
     * @var int
     */
    public $id;

    /**
     * @description The site ID, which can be obtained by calling the [ListSites](~~ListSites~~) interface.
     *
     * This parameter is required.
     *
     * @example 1159101787****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'id' => 'Id',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLoadBalancerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
