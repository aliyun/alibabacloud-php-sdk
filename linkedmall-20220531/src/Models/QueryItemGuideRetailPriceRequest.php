<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class QueryItemGuideRetailPriceRequest extends Model
{
    /**
     * @example 122889******114694
     *
     * @var string
     */
    public $distributionMallId;

    /**
     * @example 75547******9212928
     *
     * @var string
     */
    public $distributorId;

    /**
     * @var string[]
     */
    public $lmItemIds;

    /**
     * @example 18******263
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'distributionMallId' => 'DistributionMallId',
        'distributorId'      => 'DistributorId',
        'lmItemIds'          => 'LmItemIds',
        'tenantId'           => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributionMallId) {
            $res['DistributionMallId'] = $this->distributionMallId;
        }
        if (null !== $this->distributorId) {
            $res['DistributorId'] = $this->distributorId;
        }
        if (null !== $this->lmItemIds) {
            $res['LmItemIds'] = $this->lmItemIds;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryItemGuideRetailPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributionMallId'])) {
            $model->distributionMallId = $map['DistributionMallId'];
        }
        if (isset($map['DistributorId'])) {
            $model->distributorId = $map['DistributorId'];
        }
        if (isset($map['LmItemIds'])) {
            if (!empty($map['LmItemIds'])) {
                $model->lmItemIds = $map['LmItemIds'];
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
