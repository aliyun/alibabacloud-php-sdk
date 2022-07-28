<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class QueryRefundApplicationDetail4DistributionRequest extends Model
{
    /**
     * @var string
     */
    public $distributorId;

    /**
     * @var string
     */
    public $subDistributionOrderId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'distributorId'          => 'DistributorId',
        'subDistributionOrderId' => 'SubDistributionOrderId',
        'tenantId'               => 'TenantId',
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
        if (null !== $this->subDistributionOrderId) {
            $res['SubDistributionOrderId'] = $this->subDistributionOrderId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRefundApplicationDetail4DistributionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributorId'])) {
            $model->distributorId = $map['DistributorId'];
        }
        if (isset($map['SubDistributionOrderId'])) {
            $model->subDistributionOrderId = $map['SubDistributionOrderId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
