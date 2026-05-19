<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class QueryCostByCostCenterRequest extends Model
{
    /**
     * @var int
     */
    public $billingMonth;

    /**
     * @var bool
     */
    public $displayZeroAmountBills;

    /**
     * @var bool
     */
    public $groupByCostCenterLevel;

    /**
     * @var string
     */
    public $metrics;

    /**
     * @var int
     */
    public $ownerAccountId;
    protected $_name = [
        'billingMonth' => 'BillingMonth',
        'displayZeroAmountBills' => 'DisplayZeroAmountBills',
        'groupByCostCenterLevel' => 'GroupByCostCenterLevel',
        'metrics' => 'Metrics',
        'ownerAccountId' => 'OwnerAccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingMonth) {
            $res['BillingMonth'] = $this->billingMonth;
        }

        if (null !== $this->displayZeroAmountBills) {
            $res['DisplayZeroAmountBills'] = $this->displayZeroAmountBills;
        }

        if (null !== $this->groupByCostCenterLevel) {
            $res['GroupByCostCenterLevel'] = $this->groupByCostCenterLevel;
        }

        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }

        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
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
        if (isset($map['BillingMonth'])) {
            $model->billingMonth = $map['BillingMonth'];
        }

        if (isset($map['DisplayZeroAmountBills'])) {
            $model->displayZeroAmountBills = $map['DisplayZeroAmountBills'];
        }

        if (isset($map['GroupByCostCenterLevel'])) {
            $model->groupByCostCenterLevel = $map['GroupByCostCenterLevel'];
        }

        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }

        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        return $model;
    }
}
