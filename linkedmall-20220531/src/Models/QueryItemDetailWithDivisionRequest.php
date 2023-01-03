<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class QueryItemDetailWithDivisionRequest extends Model
{
    /**
     * @example 1339d4e******46ea9d126df506af8d2b
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
     * @example 410503006
     *
     * @var string
     */
    public $divisionCode;

    /**
     * @example 10000035-61936646****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example 18******263
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'distributionMallId' => 'DistributionMallId',
        'distributorId'      => 'DistributorId',
        'divisionCode'       => 'DivisionCode',
        'lmItemId'           => 'LmItemId',
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
        if (null !== $this->divisionCode) {
            $res['DivisionCode'] = $this->divisionCode;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryItemDetailWithDivisionRequest
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
        if (isset($map['DivisionCode'])) {
            $model->divisionCode = $map['DivisionCode'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
