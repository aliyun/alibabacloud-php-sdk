<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeElasticBillsResponseBody;

use AlibabaCloud\Dara\Model;

class bills extends Model
{
    /**
     * @var float
     */
    public $credit;

    /**
     * @var float
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
     * @var float
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
     * @var float
     */
    public $trafficCu;
    protected $_name = [
        'credit' => 'Credit',
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
        if (null !== $this->credit) {
            $res['Credit'] = $this->credit;
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
        if (isset($map['Credit'])) {
            $model->credit = $map['Credit'];
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
