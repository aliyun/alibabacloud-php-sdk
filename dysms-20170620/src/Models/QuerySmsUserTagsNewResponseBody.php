<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class QuerySmsUserTagsNewResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isAnyParamTemplateUser;

    /**
     * @var bool
     */
    public $isBatchCreateSmsSign;

    /**
     * @var bool
     */
    public $isInnerUser;

    /**
     * @var bool
     */
    public $isNewUser;

    /**
     * @var bool
     */
    public $isNoneStatusNoChargeCust;

    /**
     * @var bool
     */
    public $isOpenTemplateRule;

    /**
     * @var bool
     */
    public $isOpenedCard;

    /**
     * @var bool
     */
    public $isOpenedDigit;

    /**
     * @var bool
     */
    public $isOpenedInternationalSms;

    /**
     * @var bool
     */
    public $isOpenedMarket;

    /**
     * @var bool
     */
    public $isOpenedSaas;

    /**
     * @var bool
     */
    public $isOpenedSmppStandardProtocol;

    /**
     * @var bool
     */
    public $isOpenedStandardProtocol;

    /**
     * @var bool
     */
    public $isVirtualCust;

    /**
     * @var bool
     */
    public $requestId;

    /**
     * @var bool
     */
    public $signCheckCommon;

    /**
     * @var bool
     */
    public $signCheckVerification;

    /**
     * @var bool
     */
    public $smsInformationSupervision;
    protected $_name = [
        'isAnyParamTemplateUser' => 'IsAnyParamTemplateUser',
        'isBatchCreateSmsSign' => 'IsBatchCreateSmsSign',
        'isInnerUser' => 'IsInnerUser',
        'isNewUser' => 'IsNewUser',
        'isNoneStatusNoChargeCust' => 'IsNoneStatusNoChargeCust',
        'isOpenTemplateRule' => 'IsOpenTemplateRule',
        'isOpenedCard' => 'IsOpenedCard',
        'isOpenedDigit' => 'IsOpenedDigit',
        'isOpenedInternationalSms' => 'IsOpenedInternationalSms',
        'isOpenedMarket' => 'IsOpenedMarket',
        'isOpenedSaas' => 'IsOpenedSaas',
        'isOpenedSmppStandardProtocol' => 'IsOpenedSmppStandardProtocol',
        'isOpenedStandardProtocol' => 'IsOpenedStandardProtocol',
        'isVirtualCust' => 'IsVirtualCust',
        'requestId' => 'RequestId',
        'signCheckCommon' => 'SignCheckCommon',
        'signCheckVerification' => 'SignCheckVerification',
        'smsInformationSupervision' => 'SmsInformationSupervision',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isAnyParamTemplateUser) {
            $res['IsAnyParamTemplateUser'] = $this->isAnyParamTemplateUser;
        }

        if (null !== $this->isBatchCreateSmsSign) {
            $res['IsBatchCreateSmsSign'] = $this->isBatchCreateSmsSign;
        }

        if (null !== $this->isInnerUser) {
            $res['IsInnerUser'] = $this->isInnerUser;
        }

        if (null !== $this->isNewUser) {
            $res['IsNewUser'] = $this->isNewUser;
        }

        if (null !== $this->isNoneStatusNoChargeCust) {
            $res['IsNoneStatusNoChargeCust'] = $this->isNoneStatusNoChargeCust;
        }

        if (null !== $this->isOpenTemplateRule) {
            $res['IsOpenTemplateRule'] = $this->isOpenTemplateRule;
        }

        if (null !== $this->isOpenedCard) {
            $res['IsOpenedCard'] = $this->isOpenedCard;
        }

        if (null !== $this->isOpenedDigit) {
            $res['IsOpenedDigit'] = $this->isOpenedDigit;
        }

        if (null !== $this->isOpenedInternationalSms) {
            $res['IsOpenedInternationalSms'] = $this->isOpenedInternationalSms;
        }

        if (null !== $this->isOpenedMarket) {
            $res['IsOpenedMarket'] = $this->isOpenedMarket;
        }

        if (null !== $this->isOpenedSaas) {
            $res['IsOpenedSaas'] = $this->isOpenedSaas;
        }

        if (null !== $this->isOpenedSmppStandardProtocol) {
            $res['IsOpenedSmppStandardProtocol'] = $this->isOpenedSmppStandardProtocol;
        }

        if (null !== $this->isOpenedStandardProtocol) {
            $res['IsOpenedStandardProtocol'] = $this->isOpenedStandardProtocol;
        }

        if (null !== $this->isVirtualCust) {
            $res['IsVirtualCust'] = $this->isVirtualCust;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->signCheckCommon) {
            $res['SignCheckCommon'] = $this->signCheckCommon;
        }

        if (null !== $this->signCheckVerification) {
            $res['SignCheckVerification'] = $this->signCheckVerification;
        }

        if (null !== $this->smsInformationSupervision) {
            $res['SmsInformationSupervision'] = $this->smsInformationSupervision;
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
        if (isset($map['IsAnyParamTemplateUser'])) {
            $model->isAnyParamTemplateUser = $map['IsAnyParamTemplateUser'];
        }

        if (isset($map['IsBatchCreateSmsSign'])) {
            $model->isBatchCreateSmsSign = $map['IsBatchCreateSmsSign'];
        }

        if (isset($map['IsInnerUser'])) {
            $model->isInnerUser = $map['IsInnerUser'];
        }

        if (isset($map['IsNewUser'])) {
            $model->isNewUser = $map['IsNewUser'];
        }

        if (isset($map['IsNoneStatusNoChargeCust'])) {
            $model->isNoneStatusNoChargeCust = $map['IsNoneStatusNoChargeCust'];
        }

        if (isset($map['IsOpenTemplateRule'])) {
            $model->isOpenTemplateRule = $map['IsOpenTemplateRule'];
        }

        if (isset($map['IsOpenedCard'])) {
            $model->isOpenedCard = $map['IsOpenedCard'];
        }

        if (isset($map['IsOpenedDigit'])) {
            $model->isOpenedDigit = $map['IsOpenedDigit'];
        }

        if (isset($map['IsOpenedInternationalSms'])) {
            $model->isOpenedInternationalSms = $map['IsOpenedInternationalSms'];
        }

        if (isset($map['IsOpenedMarket'])) {
            $model->isOpenedMarket = $map['IsOpenedMarket'];
        }

        if (isset($map['IsOpenedSaas'])) {
            $model->isOpenedSaas = $map['IsOpenedSaas'];
        }

        if (isset($map['IsOpenedSmppStandardProtocol'])) {
            $model->isOpenedSmppStandardProtocol = $map['IsOpenedSmppStandardProtocol'];
        }

        if (isset($map['IsOpenedStandardProtocol'])) {
            $model->isOpenedStandardProtocol = $map['IsOpenedStandardProtocol'];
        }

        if (isset($map['IsVirtualCust'])) {
            $model->isVirtualCust = $map['IsVirtualCust'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SignCheckCommon'])) {
            $model->signCheckCommon = $map['SignCheckCommon'];
        }

        if (isset($map['SignCheckVerification'])) {
            $model->signCheckVerification = $map['SignCheckVerification'];
        }

        if (isset($map['SmsInformationSupervision'])) {
            $model->smsInformationSupervision = $map['SmsInformationSupervision'];
        }

        return $model;
    }
}
