<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetCreditLabelActionRequest extends Model
{
    /**
     * @example SET
     *
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $clearCycle;

    /**
     * @example 1000
     *
     * @var string
     */
    public $creditAmount;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currencyCode;

    /**
     * @var string
     */
    public $dailyCycle;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $isNeedAddSettleLabel;

    /**
     * @var string
     */
    public $isNeedAdjustCreditAccount;

    /**
     * @var string
     */
    public $isNeedSaveNotifyRule;

    /**
     * @var string
     */
    public $isNeedSetCreditAmount;

    /**
     * @var bool
     */
    public $needNotice;

    /**
     * @var bool
     */
    public $newCreateMode;

    /**
     * @example 78394
     *
     * @var string
     */
    public $operator;

    /**
     * @example F5B803CF-94D8-43AF-ADB3-D819AAD30E27
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $siteCode;

    /**
     * @example dellidc
     *
     * @var string
     */
    public $source;

    /**
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
