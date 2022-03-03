<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCredentialPoolStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $cardActiveNum;

    /**
     * @var int
     */
    public $cardTotalNum;

    /**
     * @var string
     */
    public $credentialInstanceId;

    /**
     * @var string
     */
    public $credentialNO;

    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string
     */
    public $effectiveAvailableFlow;

    /**
     * @var string
     */
    public $effectiveTotalFlow;

    /**
     * @var int
     */
    public $monthFeatureFee;

    /**
     * @var string
     */
    public $poolAvaiable;

    /**
     * @var string
     */
    public $poolGrandTotal;

    /**
     * @var string
     */
    public $poolGrandTotalUsed;

    /**
     * @var string
     */
    public $poolOutUsed;

    /**
     * @var string
     */
    public $poolUsed;

    /**
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
        'monthFeatureFee'        => 'MonthFeatureFee',
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
        if (null !== $this->monthFeatureFee) {
            $res['MonthFeatureFee'] = $this->monthFeatureFee;
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
        if (isset($map['MonthFeatureFee'])) {
            $model->monthFeatureFee = $map['MonthFeatureFee'];
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
