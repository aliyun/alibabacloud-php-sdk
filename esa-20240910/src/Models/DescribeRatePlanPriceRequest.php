<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DescribeRatePlanPriceRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $planName;
    protected $_name = [
        'amount' => 'Amount',
        'period' => 'Period',
        'planName' => 'PlanName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }

        return $model;
    }
}
