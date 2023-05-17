<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class ListDistributionItemWithoutCacheRequest extends Model
{
    /**
     * @example 19e690e*****07a29c8
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
     * @example 1
     *
     * @var int
     */
    public $itemStatus;

    /**
     * @example 10000***-6193664*****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 7521****8332932
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'distributionMallId' => 'DistributionMallId',
        'distributorId'      => 'DistributorId',
        'itemStatus'         => 'ItemStatus',
        'lmItemId'           => 'LmItemId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
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
        if (null !== $this->itemStatus) {
            $res['ItemStatus'] = $this->itemStatus;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDistributionItemWithoutCacheRequest
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
        if (isset($map['ItemStatus'])) {
            $model->itemStatus = $map['ItemStatus'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
