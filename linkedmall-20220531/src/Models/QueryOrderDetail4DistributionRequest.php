<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class QueryOrderDetail4DistributionRequest extends Model
{
    /**
     * @var string
     */
    public $distributorId;

    /**
     * @var string
     */
    public $mainDistributionOrderId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'distributorId'           => 'DistributorId',
        'mainDistributionOrderId' => 'MainDistributionOrderId',
        'tenantId'                => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributorId) {
            $res['DistributorId'] = $this->distributorId;
        }
        if (null !== $this->mainDistributionOrderId) {
            $res['MainDistributionOrderId'] = $this->mainDistributionOrderId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderDetail4DistributionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributorId'])) {
            $model->distributorId = $map['DistributorId'];
        }
        if (isset($map['MainDistributionOrderId'])) {
            $model->mainDistributionOrderId = $map['MainDistributionOrderId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
