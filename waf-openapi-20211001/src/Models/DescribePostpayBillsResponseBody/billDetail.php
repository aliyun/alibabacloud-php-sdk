<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePostpayBillsResponseBody;

use AlibabaCloud\Dara\Model;

class billDetail extends Model
{
    /**
     * @var string
     */
    public $chargeData;

    /**
     * @var float
     */
    public $credit;

    /**
     * @var string
     */
    public $creditChargeData;

    /**
     * @var string
     */
    public $cu;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var float
     */
    public $functionCredit;

    /**
     * @var string
     */
    public $functionCu;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var float
     */
    public $trafficCredit;

    /**
     * @var string
     */
    public $trafficCu;
    protected $_name = [
        'chargeData' => 'ChargeData',
        'credit' => 'Credit',
        'creditChargeData' => 'CreditChargeData',
        'cu' => 'Cu',
        'endTime' => 'EndTime',
        'functionCredit' => 'FunctionCredit',
        'functionCu' => 'FunctionCu',
        'startTime' => 'StartTime',
        'trafficCredit' => 'TrafficCredit',
        'trafficCu' => 'TrafficCu',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeData) {
            $res['ChargeData'] = $this->chargeData;
        }

        if (null !== $this->credit) {
            $res['Credit'] = $this->credit;
        }

        if (null !== $this->creditChargeData) {
            $res['CreditChargeData'] = $this->creditChargeData;
        }

        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->functionCredit) {
            $res['FunctionCredit'] = $this->functionCredit;
        }

        if (null !== $this->functionCu) {
            $res['FunctionCu'] = $this->functionCu;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->trafficCredit) {
            $res['TrafficCredit'] = $this->trafficCredit;
        }

        if (null !== $this->trafficCu) {
            $res['TrafficCu'] = $this->trafficCu;
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
        if (isset($map['ChargeData'])) {
            $model->chargeData = $map['ChargeData'];
        }

        if (isset($map['Credit'])) {
            $model->credit = $map['Credit'];
        }

        if (isset($map['CreditChargeData'])) {
            $model->creditChargeData = $map['CreditChargeData'];
        }

        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FunctionCredit'])) {
            $model->functionCredit = $map['FunctionCredit'];
        }

        if (isset($map['FunctionCu'])) {
            $model->functionCu = $map['FunctionCu'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TrafficCredit'])) {
            $model->trafficCredit = $map['TrafficCredit'];
        }

        if (isset($map['TrafficCu'])) {
            $model->trafficCu = $map['TrafficCu'];
        }

        return $model;
    }
}
