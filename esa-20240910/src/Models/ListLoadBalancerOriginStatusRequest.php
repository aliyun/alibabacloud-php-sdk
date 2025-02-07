<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ListLoadBalancerOriginStatusRequest extends Model
{
    /**
     * @var string
     */
    public $loadBalancerIds;
    /**
     * @var string
     */
    public $poolType;
    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'loadBalancerIds' => 'LoadBalancerIds',
        'poolType'        => 'PoolType',
        'siteId'          => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
