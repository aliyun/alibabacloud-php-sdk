<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateCmsOrderRequest extends Model
{
    /**
     * @var string
     */
    public $apiCount;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $customTimeSeries;

    /**
     * @var string
     */
    public $eventStoreNum;

    /**
     * @var string
     */
    public $eventStoreTime;

    /**
     * @var string
     */
    public $logMonitorStream;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $phoneCount;

    /**
     * @var string
     */
    public $siteEcsNum;

    /**
     * @var string
     */
    public $siteOperatorNum;

    /**
     * @var string
     */
    public $siteTaskNum;

    /**
     * @var string
     */
    public $smsCount;

    /**
     * @var string
     */
    public $suggestType;
    protected $_name = [
        'apiCount'         => 'ApiCount',
        'autoPay'          => 'AutoPay',
        'autoRenewPeriod'  => 'AutoRenewPeriod',
        'autoUseCoupon'    => 'AutoUseCoupon',
        'customTimeSeries' => 'CustomTimeSeries',
        'eventStoreNum'    => 'EventStoreNum',
        'eventStoreTime'   => 'EventStoreTime',
        'logMonitorStream' => 'LogMonitorStream',
        'payType'          => 'PayType',
        'period'           => 'Period',
        'periodUnit'       => 'PeriodUnit',
        'phoneCount'       => 'PhoneCount',
        'siteEcsNum'       => 'SiteEcsNum',
        'siteOperatorNum'  => 'SiteOperatorNum',
        'siteTaskNum'      => 'SiteTaskNum',
        'smsCount'         => 'SmsCount',
        'suggestType'      => 'SuggestType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiCount) {
            $res['ApiCount'] = $this->apiCount;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->customTimeSeries) {
            $res['CustomTimeSeries'] = $this->customTimeSeries;
        }
        if (null !== $this->eventStoreNum) {
            $res['EventStoreNum'] = $this->eventStoreNum;
        }
        if (null !== $this->eventStoreTime) {
            $res['EventStoreTime'] = $this->eventStoreTime;
        }
        if (null !== $this->logMonitorStream) {
            $res['LogMonitorStream'] = $this->logMonitorStream;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->phoneCount) {
            $res['PhoneCount'] = $this->phoneCount;
        }
        if (null !== $this->siteEcsNum) {
            $res['SiteEcsNum'] = $this->siteEcsNum;
        }
        if (null !== $this->siteOperatorNum) {
            $res['SiteOperatorNum'] = $this->siteOperatorNum;
        }
        if (null !== $this->siteTaskNum) {
            $res['SiteTaskNum'] = $this->siteTaskNum;
        }
        if (null !== $this->smsCount) {
            $res['SmsCount'] = $this->smsCount;
        }
        if (null !== $this->suggestType) {
            $res['SuggestType'] = $this->suggestType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCmsOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiCount'])) {
            $model->apiCount = $map['ApiCount'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['CustomTimeSeries'])) {
            $model->customTimeSeries = $map['CustomTimeSeries'];
        }
        if (isset($map['EventStoreNum'])) {
            $model->eventStoreNum = $map['EventStoreNum'];
        }
        if (isset($map['EventStoreTime'])) {
            $model->eventStoreTime = $map['EventStoreTime'];
        }
        if (isset($map['LogMonitorStream'])) {
            $model->logMonitorStream = $map['LogMonitorStream'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PhoneCount'])) {
            $model->phoneCount = $map['PhoneCount'];
        }
        if (isset($map['SiteEcsNum'])) {
            $model->siteEcsNum = $map['SiteEcsNum'];
        }
        if (isset($map['SiteOperatorNum'])) {
            $model->siteOperatorNum = $map['SiteOperatorNum'];
        }
        if (isset($map['SiteTaskNum'])) {
            $model->siteTaskNum = $map['SiteTaskNum'];
        }
        if (isset($map['SmsCount'])) {
            $model->smsCount = $map['SmsCount'];
        }
        if (isset($map['SuggestType'])) {
            $model->suggestType = $map['SuggestType'];
        }

        return $model;
    }
}
