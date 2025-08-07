<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models\GetIqsUsageResult;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $api;

    /**
     * @var int
     */
    public $billingQps;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var int
     */
    public $failedCalls;

    /**
     * @var string
     */
    public $ladderType;

    /**
     * @var string
     */
    public $mainAccountId;

    /**
     * @var string
     */
    public $subAccountId;

    /**
     * @var int
     */
    public $successCalls;

    /**
     * @var int
     */
    public $totalCalls;

    /**
     * @var int
     */
    public $valueAddedAdvanced;

    /**
     * @var int
     */
    public $valueAddedSummary;
    protected $_name = [
        'api' => 'api',
        'billingQps' => 'billingQps',
        'date' => 'date',
        'engineType' => 'engineType',
        'failedCalls' => 'failedCalls',
        'ladderType' => 'ladderType',
        'mainAccountId' => 'mainAccountId',
        'subAccountId' => 'subAccountId',
        'successCalls' => 'successCalls',
        'totalCalls' => 'totalCalls',
        'valueAddedAdvanced' => 'valueAddedAdvanced',
        'valueAddedSummary' => 'valueAddedSummary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->api) {
            $res['api'] = $this->api;
        }

        if (null !== $this->billingQps) {
            $res['billingQps'] = $this->billingQps;
        }

        if (null !== $this->date) {
            $res['date'] = $this->date;
        }

        if (null !== $this->engineType) {
            $res['engineType'] = $this->engineType;
        }

        if (null !== $this->failedCalls) {
            $res['failedCalls'] = $this->failedCalls;
        }

        if (null !== $this->ladderType) {
            $res['ladderType'] = $this->ladderType;
        }

        if (null !== $this->mainAccountId) {
            $res['mainAccountId'] = $this->mainAccountId;
        }

        if (null !== $this->subAccountId) {
            $res['subAccountId'] = $this->subAccountId;
        }

        if (null !== $this->successCalls) {
            $res['successCalls'] = $this->successCalls;
        }

        if (null !== $this->totalCalls) {
            $res['totalCalls'] = $this->totalCalls;
        }

        if (null !== $this->valueAddedAdvanced) {
            $res['valueAddedAdvanced'] = $this->valueAddedAdvanced;
        }

        if (null !== $this->valueAddedSummary) {
            $res['valueAddedSummary'] = $this->valueAddedSummary;
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
        if (isset($map['api'])) {
            $model->api = $map['api'];
        }

        if (isset($map['billingQps'])) {
            $model->billingQps = $map['billingQps'];
        }

        if (isset($map['date'])) {
            $model->date = $map['date'];
        }

        if (isset($map['engineType'])) {
            $model->engineType = $map['engineType'];
        }

        if (isset($map['failedCalls'])) {
            $model->failedCalls = $map['failedCalls'];
        }

        if (isset($map['ladderType'])) {
            $model->ladderType = $map['ladderType'];
        }

        if (isset($map['mainAccountId'])) {
            $model->mainAccountId = $map['mainAccountId'];
        }

        if (isset($map['subAccountId'])) {
            $model->subAccountId = $map['subAccountId'];
        }

        if (isset($map['successCalls'])) {
            $model->successCalls = $map['successCalls'];
        }

        if (isset($map['totalCalls'])) {
            $model->totalCalls = $map['totalCalls'];
        }

        if (isset($map['valueAddedAdvanced'])) {
            $model->valueAddedAdvanced = $map['valueAddedAdvanced'];
        }

        if (isset($map['valueAddedSummary'])) {
            $model->valueAddedSummary = $map['valueAddedSummary'];
        }

        return $model;
    }
}
