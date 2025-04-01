<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostOptimizationOverviewResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $billingCycleDate;

    /**
     * @var string
     */
    public $currentBillingCost;

    /**
     * @var string
     */
    public $expectedSavingCost;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $optCheckItemNum;

    /**
     * @var string
     */
    public $optResourceNum;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'billingCycleDate' => 'BillingCycleDate',
        'currentBillingCost' => 'CurrentBillingCost',
        'expectedSavingCost' => 'ExpectedSavingCost',
        'gmtModified' => 'GmtModified',
        'optCheckItemNum' => 'OptCheckItemNum',
        'optResourceNum' => 'OptResourceNum',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingCycleDate) {
            $res['BillingCycleDate'] = $this->billingCycleDate;
        }

        if (null !== $this->currentBillingCost) {
            $res['CurrentBillingCost'] = $this->currentBillingCost;
        }

        if (null !== $this->expectedSavingCost) {
            $res['ExpectedSavingCost'] = $this->expectedSavingCost;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->optCheckItemNum) {
            $res['OptCheckItemNum'] = $this->optCheckItemNum;
        }

        if (null !== $this->optResourceNum) {
            $res['OptResourceNum'] = $this->optResourceNum;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['BillingCycleDate'])) {
            $model->billingCycleDate = $map['BillingCycleDate'];
        }

        if (isset($map['CurrentBillingCost'])) {
            $model->currentBillingCost = $map['CurrentBillingCost'];
        }

        if (isset($map['ExpectedSavingCost'])) {
            $model->expectedSavingCost = $map['ExpectedSavingCost'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['OptCheckItemNum'])) {
            $model->optCheckItemNum = $map['OptCheckItemNum'];
        }

        if (isset($map['OptResourceNum'])) {
            $model->optResourceNum = $map['OptResourceNum'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
