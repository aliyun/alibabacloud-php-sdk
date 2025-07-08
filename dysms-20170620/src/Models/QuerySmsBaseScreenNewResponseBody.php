<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class QuerySmsBaseScreenNewResponseBody extends Model
{
    /**
     * @var string
     */
    public $accountBalance;

    /**
     * @var string
     */
    public $cardAbilityMark;

    /**
     * @var string
     */
    public $cardCustomerMark;

    /**
     * @var string
     */
    public $certifyType;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $childAccountAuth;

    /**
     * @var string
     */
    public $creditValue;

    /**
     * @var string
     */
    public $currentLocale;

    /**
     * @var int
     */
    public $custFrom;

    /**
     * @var string
     */
    public $custName;

    /**
     * @var string
     */
    public $dataAbilityMark;

    /**
     * @var int
     */
    public $dayuMigrateStatus;

    /**
     * @var string
     */
    public $invoiceBalance;

    /**
     * @var string
     */
    public $ipSmsAbilityMark;

    /**
     * @var bool
     */
    public $isAccountMerged;

    /**
     * @var bool
     */
    public $isAliInnerUser;

    /**
     * @var bool
     */
    public $isChineseUser;

    /**
     * @var bool
     */
    public $isDayuCustomer;

    /**
     * @var bool
     */
    public $isDayuTopCust;

    /**
     * @var bool
     */
    public $isMnsForceMigratingCustomer;

    /**
     * @var bool
     */
    public $isMnsMigratingCustomer;

    /**
     * @var bool
     */
    public $isNeedAuth;

    /**
     * @var bool
     */
    public $isOldFisCust;

    /**
     * @var bool
     */
    public $isOldSms;

    /**
     * @var bool
     */
    public $isOpened;

    /**
     * @var bool
     */
    public $isRemainMnsPackage;

    /**
     * @var bool
     */
    public $isSendSmsToGlobeUser;

    /**
     * @var bool
     */
    public $isShortUrlNormalUse;

    /**
     * @var bool
     */
    public $isShortUrlOpened;

    /**
     * @var bool
     */
    public $isSilentCust;

    /**
     * @var int
     */
    public $osStatus;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $shortUrlServeTag;

    /**
     * @var bool
     */
    public $smsMarketingAssistantTag;

    /**
     * @var string
     */
    public $textAbilityMark;

    /**
     * @var int
     */
    public $voucherNum;
    protected $_name = [
        'accountBalance' => 'AccountBalance',
        'cardAbilityMark' => 'CardAbilityMark',
        'cardCustomerMark' => 'CardCustomerMark',
        'certifyType' => 'CertifyType',
        'channelType' => 'ChannelType',
        'childAccountAuth' => 'ChildAccountAuth',
        'creditValue' => 'CreditValue',
        'currentLocale' => 'CurrentLocale',
        'custFrom' => 'CustFrom',
        'custName' => 'CustName',
        'dataAbilityMark' => 'DataAbilityMark',
        'dayuMigrateStatus' => 'DayuMigrateStatus',
        'invoiceBalance' => 'InvoiceBalance',
        'ipSmsAbilityMark' => 'IpSmsAbilityMark',
        'isAccountMerged' => 'IsAccountMerged',
        'isAliInnerUser' => 'IsAliInnerUser',
        'isChineseUser' => 'IsChineseUser',
        'isDayuCustomer' => 'IsDayuCustomer',
        'isDayuTopCust' => 'IsDayuTopCust',
        'isMnsForceMigratingCustomer' => 'IsMnsForceMigratingCustomer',
        'isMnsMigratingCustomer' => 'IsMnsMigratingCustomer',
        'isNeedAuth' => 'IsNeedAuth',
        'isOldFisCust' => 'IsOldFisCust',
        'isOldSms' => 'IsOldSms',
        'isOpened' => 'IsOpened',
        'isRemainMnsPackage' => 'IsRemainMnsPackage',
        'isSendSmsToGlobeUser' => 'IsSendSmsToGlobeUser',
        'isShortUrlNormalUse' => 'IsShortUrlNormalUse',
        'isShortUrlOpened' => 'IsShortUrlOpened',
        'isSilentCust' => 'IsSilentCust',
        'osStatus' => 'OsStatus',
        'prodCode' => 'ProdCode',
        'requestId' => 'RequestId',
        'shortUrlServeTag' => 'ShortUrlServeTag',
        'smsMarketingAssistantTag' => 'SmsMarketingAssistantTag',
        'textAbilityMark' => 'TextAbilityMark',
        'voucherNum' => 'VoucherNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountBalance) {
            $res['AccountBalance'] = $this->accountBalance;
        }

        if (null !== $this->cardAbilityMark) {
            $res['CardAbilityMark'] = $this->cardAbilityMark;
        }

        if (null !== $this->cardCustomerMark) {
            $res['CardCustomerMark'] = $this->cardCustomerMark;
        }

        if (null !== $this->certifyType) {
            $res['CertifyType'] = $this->certifyType;
        }

        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->childAccountAuth) {
            $res['ChildAccountAuth'] = $this->childAccountAuth;
        }

        if (null !== $this->creditValue) {
            $res['CreditValue'] = $this->creditValue;
        }

        if (null !== $this->currentLocale) {
            $res['CurrentLocale'] = $this->currentLocale;
        }

        if (null !== $this->custFrom) {
            $res['CustFrom'] = $this->custFrom;
        }

        if (null !== $this->custName) {
            $res['CustName'] = $this->custName;
        }

        if (null !== $this->dataAbilityMark) {
            $res['DataAbilityMark'] = $this->dataAbilityMark;
        }

        if (null !== $this->dayuMigrateStatus) {
            $res['DayuMigrateStatus'] = $this->dayuMigrateStatus;
        }

        if (null !== $this->invoiceBalance) {
            $res['InvoiceBalance'] = $this->invoiceBalance;
        }

        if (null !== $this->ipSmsAbilityMark) {
            $res['IpSmsAbilityMark'] = $this->ipSmsAbilityMark;
        }

        if (null !== $this->isAccountMerged) {
            $res['IsAccountMerged'] = $this->isAccountMerged;
        }

        if (null !== $this->isAliInnerUser) {
            $res['IsAliInnerUser'] = $this->isAliInnerUser;
        }

        if (null !== $this->isChineseUser) {
            $res['IsChineseUser'] = $this->isChineseUser;
        }

        if (null !== $this->isDayuCustomer) {
            $res['IsDayuCustomer'] = $this->isDayuCustomer;
        }

        if (null !== $this->isDayuTopCust) {
            $res['IsDayuTopCust'] = $this->isDayuTopCust;
        }

        if (null !== $this->isMnsForceMigratingCustomer) {
            $res['IsMnsForceMigratingCustomer'] = $this->isMnsForceMigratingCustomer;
        }

        if (null !== $this->isMnsMigratingCustomer) {
            $res['IsMnsMigratingCustomer'] = $this->isMnsMigratingCustomer;
        }

        if (null !== $this->isNeedAuth) {
            $res['IsNeedAuth'] = $this->isNeedAuth;
        }

        if (null !== $this->isOldFisCust) {
            $res['IsOldFisCust'] = $this->isOldFisCust;
        }

        if (null !== $this->isOldSms) {
            $res['IsOldSms'] = $this->isOldSms;
        }

        if (null !== $this->isOpened) {
            $res['IsOpened'] = $this->isOpened;
        }

        if (null !== $this->isRemainMnsPackage) {
            $res['IsRemainMnsPackage'] = $this->isRemainMnsPackage;
        }

        if (null !== $this->isSendSmsToGlobeUser) {
            $res['IsSendSmsToGlobeUser'] = $this->isSendSmsToGlobeUser;
        }

        if (null !== $this->isShortUrlNormalUse) {
            $res['IsShortUrlNormalUse'] = $this->isShortUrlNormalUse;
        }

        if (null !== $this->isShortUrlOpened) {
            $res['IsShortUrlOpened'] = $this->isShortUrlOpened;
        }

        if (null !== $this->isSilentCust) {
            $res['IsSilentCust'] = $this->isSilentCust;
        }

        if (null !== $this->osStatus) {
            $res['OsStatus'] = $this->osStatus;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->shortUrlServeTag) {
            $res['ShortUrlServeTag'] = $this->shortUrlServeTag;
        }

        if (null !== $this->smsMarketingAssistantTag) {
            $res['SmsMarketingAssistantTag'] = $this->smsMarketingAssistantTag;
        }

        if (null !== $this->textAbilityMark) {
            $res['TextAbilityMark'] = $this->textAbilityMark;
        }

        if (null !== $this->voucherNum) {
            $res['VoucherNum'] = $this->voucherNum;
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
        if (isset($map['AccountBalance'])) {
            $model->accountBalance = $map['AccountBalance'];
        }

        if (isset($map['CardAbilityMark'])) {
            $model->cardAbilityMark = $map['CardAbilityMark'];
        }

        if (isset($map['CardCustomerMark'])) {
            $model->cardCustomerMark = $map['CardCustomerMark'];
        }

        if (isset($map['CertifyType'])) {
            $model->certifyType = $map['CertifyType'];
        }

        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['ChildAccountAuth'])) {
            $model->childAccountAuth = $map['ChildAccountAuth'];
        }

        if (isset($map['CreditValue'])) {
            $model->creditValue = $map['CreditValue'];
        }

        if (isset($map['CurrentLocale'])) {
            $model->currentLocale = $map['CurrentLocale'];
        }

        if (isset($map['CustFrom'])) {
            $model->custFrom = $map['CustFrom'];
        }

        if (isset($map['CustName'])) {
            $model->custName = $map['CustName'];
        }

        if (isset($map['DataAbilityMark'])) {
            $model->dataAbilityMark = $map['DataAbilityMark'];
        }

        if (isset($map['DayuMigrateStatus'])) {
            $model->dayuMigrateStatus = $map['DayuMigrateStatus'];
        }

        if (isset($map['InvoiceBalance'])) {
            $model->invoiceBalance = $map['InvoiceBalance'];
        }

        if (isset($map['IpSmsAbilityMark'])) {
            $model->ipSmsAbilityMark = $map['IpSmsAbilityMark'];
        }

        if (isset($map['IsAccountMerged'])) {
            $model->isAccountMerged = $map['IsAccountMerged'];
        }

        if (isset($map['IsAliInnerUser'])) {
            $model->isAliInnerUser = $map['IsAliInnerUser'];
        }

        if (isset($map['IsChineseUser'])) {
            $model->isChineseUser = $map['IsChineseUser'];
        }

        if (isset($map['IsDayuCustomer'])) {
            $model->isDayuCustomer = $map['IsDayuCustomer'];
        }

        if (isset($map['IsDayuTopCust'])) {
            $model->isDayuTopCust = $map['IsDayuTopCust'];
        }

        if (isset($map['IsMnsForceMigratingCustomer'])) {
            $model->isMnsForceMigratingCustomer = $map['IsMnsForceMigratingCustomer'];
        }

        if (isset($map['IsMnsMigratingCustomer'])) {
            $model->isMnsMigratingCustomer = $map['IsMnsMigratingCustomer'];
        }

        if (isset($map['IsNeedAuth'])) {
            $model->isNeedAuth = $map['IsNeedAuth'];
        }

        if (isset($map['IsOldFisCust'])) {
            $model->isOldFisCust = $map['IsOldFisCust'];
        }

        if (isset($map['IsOldSms'])) {
            $model->isOldSms = $map['IsOldSms'];
        }

        if (isset($map['IsOpened'])) {
            $model->isOpened = $map['IsOpened'];
        }

        if (isset($map['IsRemainMnsPackage'])) {
            $model->isRemainMnsPackage = $map['IsRemainMnsPackage'];
        }

        if (isset($map['IsSendSmsToGlobeUser'])) {
            $model->isSendSmsToGlobeUser = $map['IsSendSmsToGlobeUser'];
        }

        if (isset($map['IsShortUrlNormalUse'])) {
            $model->isShortUrlNormalUse = $map['IsShortUrlNormalUse'];
        }

        if (isset($map['IsShortUrlOpened'])) {
            $model->isShortUrlOpened = $map['IsShortUrlOpened'];
        }

        if (isset($map['IsSilentCust'])) {
            $model->isSilentCust = $map['IsSilentCust'];
        }

        if (isset($map['OsStatus'])) {
            $model->osStatus = $map['OsStatus'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ShortUrlServeTag'])) {
            $model->shortUrlServeTag = $map['ShortUrlServeTag'];
        }

        if (isset($map['SmsMarketingAssistantTag'])) {
            $model->smsMarketingAssistantTag = $map['SmsMarketingAssistantTag'];
        }

        if (isset($map['TextAbilityMark'])) {
            $model->textAbilityMark = $map['TextAbilityMark'];
        }

        if (isset($map['VoucherNum'])) {
            $model->voucherNum = $map['VoucherNum'];
        }

        return $model;
    }
}
