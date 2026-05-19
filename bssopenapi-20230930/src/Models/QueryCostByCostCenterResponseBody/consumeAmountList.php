<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostByCostCenterResponseBody;

use AlibabaCloud\Dara\Model;

class consumeAmountList extends Model
{
    /**
     * @var string
     */
    public $allocatedAmount;

    /**
     * @var string
     */
    public $costCenterCode;

    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $directAmount;

    /**
     * @var int
     */
    public $level;

    /**
     * @var int
     */
    public $ownerAccountId;

    /**
     * @var string
     */
    public $ownerAccountName;

    /**
     * @var int
     */
    public $parentCostCenterId;

    /**
     * @var int
     */
    public $preCostCenterId;

    /**
     * @var string
     */
    public $totalAllocatedAmount;

    /**
     * @var string
     */
    public $totalAllocatedAmountPercent;
    protected $_name = [
        'allocatedAmount' => 'AllocatedAmount',
        'costCenterCode' => 'CostCenterCode',
        'costCenterId' => 'CostCenterId',
        'costCenterName' => 'CostCenterName',
        'directAmount' => 'DirectAmount',
        'level' => 'Level',
        'ownerAccountId' => 'OwnerAccountId',
        'ownerAccountName' => 'OwnerAccountName',
        'parentCostCenterId' => 'ParentCostCenterId',
        'preCostCenterId' => 'PreCostCenterId',
        'totalAllocatedAmount' => 'TotalAllocatedAmount',
        'totalAllocatedAmountPercent' => 'TotalAllocatedAmountPercent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocatedAmount) {
            $res['AllocatedAmount'] = $this->allocatedAmount;
        }

        if (null !== $this->costCenterCode) {
            $res['CostCenterCode'] = $this->costCenterCode;
        }

        if (null !== $this->costCenterId) {
            $res['CostCenterId'] = $this->costCenterId;
        }

        if (null !== $this->costCenterName) {
            $res['CostCenterName'] = $this->costCenterName;
        }

        if (null !== $this->directAmount) {
            $res['DirectAmount'] = $this->directAmount;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
        }

        if (null !== $this->ownerAccountName) {
            $res['OwnerAccountName'] = $this->ownerAccountName;
        }

        if (null !== $this->parentCostCenterId) {
            $res['ParentCostCenterId'] = $this->parentCostCenterId;
        }

        if (null !== $this->preCostCenterId) {
            $res['PreCostCenterId'] = $this->preCostCenterId;
        }

        if (null !== $this->totalAllocatedAmount) {
            $res['TotalAllocatedAmount'] = $this->totalAllocatedAmount;
        }

        if (null !== $this->totalAllocatedAmountPercent) {
            $res['TotalAllocatedAmountPercent'] = $this->totalAllocatedAmountPercent;
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
        if (isset($map['AllocatedAmount'])) {
            $model->allocatedAmount = $map['AllocatedAmount'];
        }

        if (isset($map['CostCenterCode'])) {
            $model->costCenterCode = $map['CostCenterCode'];
        }

        if (isset($map['CostCenterId'])) {
            $model->costCenterId = $map['CostCenterId'];
        }

        if (isset($map['CostCenterName'])) {
            $model->costCenterName = $map['CostCenterName'];
        }

        if (isset($map['DirectAmount'])) {
            $model->directAmount = $map['DirectAmount'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        if (isset($map['OwnerAccountName'])) {
            $model->ownerAccountName = $map['OwnerAccountName'];
        }

        if (isset($map['ParentCostCenterId'])) {
            $model->parentCostCenterId = $map['ParentCostCenterId'];
        }

        if (isset($map['PreCostCenterId'])) {
            $model->preCostCenterId = $map['PreCostCenterId'];
        }

        if (isset($map['TotalAllocatedAmount'])) {
            $model->totalAllocatedAmount = $map['TotalAllocatedAmount'];
        }

        if (isset($map['TotalAllocatedAmountPercent'])) {
            $model->totalAllocatedAmountPercent = $map['TotalAllocatedAmountPercent'];
        }

        return $model;
    }
}
