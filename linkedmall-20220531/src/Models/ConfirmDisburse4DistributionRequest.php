<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class ConfirmDisburse4DistributionRequest extends Model
{
    /**
     * @var string
     */
    public $distributionTradeId;

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
        'distributionTradeId'     => 'DistributionTradeId',
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
        if (null !== $this->distributionTradeId) {
            $res['DistributionTradeId'] = $this->distributionTradeId;
        }
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
     * @return ConfirmDisburse4DistributionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributionTradeId'])) {
            $model->distributionTradeId = $map['DistributionTradeId'];
        }
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
