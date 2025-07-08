<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class QueryWarningThresholdNewResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $contactPhone;

    /**
     * @var int
     */
    public $dailyHaltLimit;

    /**
     * @var int
     */
    public $dailyWarningLimit;

    /**
     * @var int
     */
    public $domesticDailySuccess;

    /**
     * @var int
     */
    public $domesticDailyTotal;

    /**
     * @var int
     */
    public $domesticMonthlySuccess;

    /**
     * @var int
     */
    public $domesticMonthlyTotal;

    /**
     * @var int
     */
    public $monthlyHaltLimit;

    /**
     * @var int
     */
    public $monthlyWarningLimit;

    /**
     * @var int
     */
    public $outDailySuccess;

    /**
     * @var int
     */
    public $outDailyTotal;

    /**
     * @var int
     */
    public $outMonthlySuccess;

    /**
     * @var int
     */
    public $outMonthlyTotal;

    /**
     * @var bool
     */
    public $prevWaringNotice;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bizType' => 'BizType',
        'contactPhone' => 'ContactPhone',
        'dailyHaltLimit' => 'DailyHaltLimit',
        'dailyWarningLimit' => 'DailyWarningLimit',
        'domesticDailySuccess' => 'DomesticDailySuccess',
        'domesticDailyTotal' => 'DomesticDailyTotal',
        'domesticMonthlySuccess' => 'DomesticMonthlySuccess',
        'domesticMonthlyTotal' => 'DomesticMonthlyTotal',
        'monthlyHaltLimit' => 'MonthlyHaltLimit',
        'monthlyWarningLimit' => 'MonthlyWarningLimit',
        'outDailySuccess' => 'OutDailySuccess',
        'outDailyTotal' => 'OutDailyTotal',
        'outMonthlySuccess' => 'OutMonthlySuccess',
        'outMonthlyTotal' => 'OutMonthlyTotal',
        'prevWaringNotice' => 'PrevWaringNotice',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->contactPhone) {
            $res['ContactPhone'] = $this->contactPhone;
        }

        if (null !== $this->dailyHaltLimit) {
            $res['DailyHaltLimit'] = $this->dailyHaltLimit;
        }

        if (null !== $this->dailyWarningLimit) {
            $res['DailyWarningLimit'] = $this->dailyWarningLimit;
        }

        if (null !== $this->domesticDailySuccess) {
            $res['DomesticDailySuccess'] = $this->domesticDailySuccess;
        }

        if (null !== $this->domesticDailyTotal) {
            $res['DomesticDailyTotal'] = $this->domesticDailyTotal;
        }

        if (null !== $this->domesticMonthlySuccess) {
            $res['DomesticMonthlySuccess'] = $this->domesticMonthlySuccess;
        }

        if (null !== $this->domesticMonthlyTotal) {
            $res['DomesticMonthlyTotal'] = $this->domesticMonthlyTotal;
        }

        if (null !== $this->monthlyHaltLimit) {
            $res['MonthlyHaltLimit'] = $this->monthlyHaltLimit;
        }

        if (null !== $this->monthlyWarningLimit) {
            $res['MonthlyWarningLimit'] = $this->monthlyWarningLimit;
        }

        if (null !== $this->outDailySuccess) {
            $res['OutDailySuccess'] = $this->outDailySuccess;
        }

        if (null !== $this->outDailyTotal) {
            $res['OutDailyTotal'] = $this->outDailyTotal;
        }

        if (null !== $this->outMonthlySuccess) {
            $res['OutMonthlySuccess'] = $this->outMonthlySuccess;
        }

        if (null !== $this->outMonthlyTotal) {
            $res['OutMonthlyTotal'] = $this->outMonthlyTotal;
        }

        if (null !== $this->prevWaringNotice) {
            $res['PrevWaringNotice'] = $this->prevWaringNotice;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ContactPhone'])) {
            $model->contactPhone = $map['ContactPhone'];
        }

        if (isset($map['DailyHaltLimit'])) {
            $model->dailyHaltLimit = $map['DailyHaltLimit'];
        }

        if (isset($map['DailyWarningLimit'])) {
            $model->dailyWarningLimit = $map['DailyWarningLimit'];
        }

        if (isset($map['DomesticDailySuccess'])) {
            $model->domesticDailySuccess = $map['DomesticDailySuccess'];
        }

        if (isset($map['DomesticDailyTotal'])) {
            $model->domesticDailyTotal = $map['DomesticDailyTotal'];
        }

        if (isset($map['DomesticMonthlySuccess'])) {
            $model->domesticMonthlySuccess = $map['DomesticMonthlySuccess'];
        }

        if (isset($map['DomesticMonthlyTotal'])) {
            $model->domesticMonthlyTotal = $map['DomesticMonthlyTotal'];
        }

        if (isset($map['MonthlyHaltLimit'])) {
            $model->monthlyHaltLimit = $map['MonthlyHaltLimit'];
        }

        if (isset($map['MonthlyWarningLimit'])) {
            $model->monthlyWarningLimit = $map['MonthlyWarningLimit'];
        }

        if (isset($map['OutDailySuccess'])) {
            $model->outDailySuccess = $map['OutDailySuccess'];
        }

        if (isset($map['OutDailyTotal'])) {
            $model->outDailyTotal = $map['OutDailyTotal'];
        }

        if (isset($map['OutMonthlySuccess'])) {
            $model->outMonthlySuccess = $map['OutMonthlySuccess'];
        }

        if (isset($map['OutMonthlyTotal'])) {
            $model->outMonthlyTotal = $map['OutMonthlyTotal'];
        }

        if (isset($map['PrevWaringNotice'])) {
            $model->prevWaringNotice = $map['PrevWaringNotice'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
