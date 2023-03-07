<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetCreditLabelActionRequest extends Model
{
    /**
     * @description The type of the action. Valid values: SET: adds the pay-as-you-go tag. CANCEL: removes the pay-as-you-go tag.
     *
     * @example SET
     *
     * @var string
     */
    public $actionType;

    /**
     * @description The cycle in which the account is notified of payment. **You do not need to specify this parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $clearCycle;

    /**
     * @description The credit line of the account.
     *
     * @example 1000
     *
     * @var string
     */
    public $creditAmount;

    /**
     * @description The code of currency that is used. Valid values: USD and CNY.
     *
     * @example CNY
     *
     * @var string
     */
    public $currencyCode;

    /**
     * @description The cycle in which payment can be deferred. **You do not need to specify this parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $dailyCycle;

    /**
     * @description The description of the action.
     *
     * @example Cancel the credit authorization
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to add the post-settlement tag. **You do not need to specify this parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $isNeedAddSettleLabel;

    /**
     * @description Specifies whether to synchronize the monthly settlement tag. **You do not need to specify this parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $isNeedAdjustCreditAccount;

    /**
     * @description Specifies whether to save the notification rule. **You do not need to specify this parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $isNeedSaveNotifyRule;

    /**
     * @description Specifies whether to set a credit line. **You do not need to specify this parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $isNeedSetCreditAmount;

    /**
     * @description Specifies whether to notify the account of an identity change. **You do not need to specify this parameter.
     *
     * @example N/A
     *
     * @var bool
     */
    public $needNotice;

    /**
     * @description Specifies whether to call another operation to create a credit ledger. **You do not need to specify this parameter.
     *
     * @example N/A
     *
     * @var bool
     */
    public $newCreateMode;

    /**
     * @description The operator who performs the action.
     *
     * @example 78394
     *
     * @var string
     */
    public $operator;

    /**
     * @description The ID of the request.
     *
     * @example F5B803CF-94D8-43AF-ADB3-D819AAD30E27
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The code of the site. **You do not need to specify this parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $siteCode;

    /**
     * @description The source of the action.
     *
     * @example dellidc
     *
     * @var string
     */
    public $source;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 1911503093565030
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'actionType'                => 'ActionType',
        'clearCycle'                => 'ClearCycle',
        'creditAmount'              => 'CreditAmount',
        'currencyCode'              => 'CurrencyCode',
        'dailyCycle'                => 'DailyCycle',
        'description'               => 'Description',
        'isNeedAddSettleLabel'      => 'IsNeedAddSettleLabel',
        'isNeedAdjustCreditAccount' => 'IsNeedAdjustCreditAccount',
        'isNeedSaveNotifyRule'      => 'IsNeedSaveNotifyRule',
        'isNeedSetCreditAmount'     => 'IsNeedSetCreditAmount',
        'needNotice'                => 'NeedNotice',
        'newCreateMode'             => 'NewCreateMode',
        'operator'                  => 'Operator',
        'requestId'                 => 'RequestId',
        'siteCode'                  => 'SiteCode',
        'source'                    => 'Source',
        'uid'                       => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->clearCycle) {
            $res['ClearCycle'] = $this->clearCycle;
        }
        if (null !== $this->creditAmount) {
            $res['CreditAmount'] = $this->creditAmount;
        }
        if (null !== $this->currencyCode) {
            $res['CurrencyCode'] = $this->currencyCode;
        }
        if (null !== $this->dailyCycle) {
            $res['DailyCycle'] = $this->dailyCycle;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isNeedAddSettleLabel) {
            $res['IsNeedAddSettleLabel'] = $this->isNeedAddSettleLabel;
        }
        if (null !== $this->isNeedAdjustCreditAccount) {
            $res['IsNeedAdjustCreditAccount'] = $this->isNeedAdjustCreditAccount;
        }
        if (null !== $this->isNeedSaveNotifyRule) {
            $res['IsNeedSaveNotifyRule'] = $this->isNeedSaveNotifyRule;
        }
        if (null !== $this->isNeedSetCreditAmount) {
            $res['IsNeedSetCreditAmount'] = $this->isNeedSetCreditAmount;
        }
        if (null !== $this->needNotice) {
            $res['NeedNotice'] = $this->needNotice;
        }
        if (null !== $this->newCreateMode) {
            $res['NewCreateMode'] = $this->newCreateMode;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteCode) {
            $res['SiteCode'] = $this->siteCode;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetCreditLabelActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['ClearCycle'])) {
            $model->clearCycle = $map['ClearCycle'];
        }
        if (isset($map['CreditAmount'])) {
            $model->creditAmount = $map['CreditAmount'];
        }
        if (isset($map['CurrencyCode'])) {
            $model->currencyCode = $map['CurrencyCode'];
        }
        if (isset($map['DailyCycle'])) {
            $model->dailyCycle = $map['DailyCycle'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsNeedAddSettleLabel'])) {
            $model->isNeedAddSettleLabel = $map['IsNeedAddSettleLabel'];
        }
        if (isset($map['IsNeedAdjustCreditAccount'])) {
            $model->isNeedAdjustCreditAccount = $map['IsNeedAdjustCreditAccount'];
        }
        if (isset($map['IsNeedSaveNotifyRule'])) {
            $model->isNeedSaveNotifyRule = $map['IsNeedSaveNotifyRule'];
        }
        if (isset($map['IsNeedSetCreditAmount'])) {
            $model->isNeedSetCreditAmount = $map['IsNeedSetCreditAmount'];
        }
        if (isset($map['NeedNotice'])) {
            $model->needNotice = $map['NeedNotice'];
        }
        if (isset($map['NewCreateMode'])) {
            $model->newCreateMode = $map['NewCreateMode'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteCode'])) {
            $model->siteCode = $map['SiteCode'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
