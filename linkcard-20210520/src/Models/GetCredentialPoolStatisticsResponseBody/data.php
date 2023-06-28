<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCredentialPoolStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $cardActiveNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $cardTotalNum;

    /**
     * @example 259****
     *
     * @var string
     */
    public $credentialInstanceId;

    /**
     * @example CM-SF-M-2-12G
     *
     * @var string
     */
    public $credentialNO;

    /**
     * @example CT-SC-M-1-30M
     *
     * @var string
     */
    public $credentialType;

    /**
     * @example 6.00GB
     *
     * @var string
     */
    public $effectiveAvailableFlow;

    /**
     * @example 12.00GB
     *
     * @var string
     */
    public $effectiveTotalFlow;

    /**
     * @var int
     */
    public $monthExceedFee;

    /**
     * @example 100
     *
     * @var int
     */
    public $monthFeatureFee;

    /**
     * @example 3.00GB
     *
     * @var int
     */
    public $monthUsedAmount;

    /**
     * @example 6.00GB
     *
     * @var string
     */
    public $poolAvaiable;

    /**
     * @example 12.00GB
     *
     * @var string
     */
    public $poolGrandTotal;

    /**
     * @example 6.00GB
     *
     * @var string
     */
    public $poolGrandTotalUsed;

    /**
     * @example 0KB
     *
     * @var string
     */
    public $poolOutUsed;

    /**
     * @example 0KB
     *
     * @var string
     */
    public $poolUsed;

    /**
     * @example 0
     *
     * @var int
     */
    public $smsUsed;
    protected $_name = [
        'cardActiveNum'          => 'CardActiveNum',
        'cardTotalNum'           => 'CardTotalNum',
        'credentialInstanceId'   => 'CredentialInstanceId',
        'credentialNO'           => 'CredentialNO',
        'credentialType'         => 'CredentialType',
        'effectiveAvailableFlow' => 'EffectiveAvailableFlow',
        'effectiveTotalFlow'     => 'EffectiveTotalFlow',
        'monthExceedFee'         => 'MonthExceedFee',
        'monthFeatureFee'        => 'MonthFeatureFee',
        'monthUsedAmount'        => 'MonthUsedAmount',
        'poolAvaiable'           => 'PoolAvaiable',
        'poolGrandTotal'         => 'PoolGrandTotal',
        'poolGrandTotalUsed'     => 'PoolGrandTotalUsed',
        'poolOutUsed'            => 'PoolOutUsed',
        'poolUsed'               => 'PoolUsed',
        'smsUsed'                => 'SmsUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardActiveNum) {
            $res['CardActiveNum'] = $this->cardActiveNum;
        }
        if (null !== $this->cardTotalNum) {
            $res['CardTotalNum'] = $this->cardTotalNum;
        }
        if (null !== $this->credentialInstanceId) {
            $res['CredentialInstanceId'] = $this->credentialInstanceId;
        }
        if (null !== $this->credentialNO) {
            $res['CredentialNO'] = $this->credentialNO;
        }
        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }
        if (null !== $this->effectiveAvailableFlow) {
            $res['EffectiveAvailableFlow'] = $this->effectiveAvailableFlow;
        }
        if (null !== $this->effectiveTotalFlow) {
            $res['EffectiveTotalFlow'] = $this->effectiveTotalFlow;
        }
        if (null !== $this->monthExceedFee) {
            $res['MonthExceedFee'] = $this->monthExceedFee;
        }
        if (null !== $this->monthFeatureFee) {
            $res['MonthFeatureFee'] = $this->monthFeatureFee;
        }
        if (null !== $this->monthUsedAmount) {
            $res['MonthUsedAmount'] = $this->monthUsedAmount;
        }
        if (null !== $this->poolAvaiable) {
            $res['PoolAvaiable'] = $this->poolAvaiable;
        }
        if (null !== $this->poolGrandTotal) {
            $res['PoolGrandTotal'] = $this->poolGrandTotal;
        }
        if (null !== $this->poolGrandTotalUsed) {
            $res['PoolGrandTotalUsed'] = $this->poolGrandTotalUsed;
        }
        if (null !== $this->poolOutUsed) {
            $res['PoolOutUsed'] = $this->poolOutUsed;
        }
        if (null !== $this->poolUsed) {
            $res['PoolUsed'] = $this->poolUsed;
        }
        if (null !== $this->smsUsed) {
            $res['SmsUsed'] = $this->smsUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardActiveNum'])) {
            $model->cardActiveNum = $map['CardActiveNum'];
        }
        if (isset($map['CardTotalNum'])) {
            $model->cardTotalNum = $map['CardTotalNum'];
        }
        if (isset($map['CredentialInstanceId'])) {
            $model->credentialInstanceId = $map['CredentialInstanceId'];
        }
        if (isset($map['CredentialNO'])) {
            $model->credentialNO = $map['CredentialNO'];
        }
        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }
        if (isset($map['EffectiveAvailableFlow'])) {
            $model->effectiveAvailableFlow = $map['EffectiveAvailableFlow'];
        }
        if (isset($map['EffectiveTotalFlow'])) {
            $model->effectiveTotalFlow = $map['EffectiveTotalFlow'];
        }
        if (isset($map['MonthExceedFee'])) {
            $model->monthExceedFee = $map['MonthExceedFee'];
        }
        if (isset($map['MonthFeatureFee'])) {
            $model->monthFeatureFee = $map['MonthFeatureFee'];
        }
        if (isset($map['MonthUsedAmount'])) {
            $model->monthUsedAmount = $map['MonthUsedAmount'];
        }
        if (isset($map['PoolAvaiable'])) {
            $model->poolAvaiable = $map['PoolAvaiable'];
        }
        if (isset($map['PoolGrandTotal'])) {
            $model->poolGrandTotal = $map['PoolGrandTotal'];
        }
        if (isset($map['PoolGrandTotalUsed'])) {
            $model->poolGrandTotalUsed = $map['PoolGrandTotalUsed'];
        }
        if (isset($map['PoolOutUsed'])) {
            $model->poolOutUsed = $map['PoolOutUsed'];
        }
        if (isset($map['PoolUsed'])) {
            $model->poolUsed = $map['PoolUsed'];
        }
        if (isset($map['SmsUsed'])) {
            $model->smsUsed = $map['SmsUsed'];
        }

        return $model;
    }
}
