<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ModifySettleAccountRequest extends Model
{
    /**
     * @example bank
     *
     * @var string
     */
    public $accountChannel;

    /**
     * @example 1766******9951934
     *
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @example 123******000
     *
     * @var string
     */
    public $accountNo;

    /**
     * @example transferIn
     *
     * @var string
     */
    public $accountPayType;

    /**
     * @example company
     *
     * @var string
     */
    public $accountType;

    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example HK
     *
     * @var string
     */
    public $countryOrAreaCode;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @example 202112******31746-1202
     *
     * @var string
     */
    public $idempotentId;
    protected $_name = [
        'accountChannel'    => 'AccountChannel',
        'accountId'         => 'AccountId',
        'accountName'       => 'AccountName',
        'accountNo'         => 'AccountNo',
        'accountPayType'    => 'AccountPayType',
        'accountType'       => 'AccountType',
        'bizId'             => 'BizId',
        'countryOrAreaCode' => 'CountryOrAreaCode',
        'currency'          => 'Currency',
        'extInfo'           => 'ExtInfo',
        'idempotentId'      => 'IdempotentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountChannel) {
            $res['AccountChannel'] = $this->accountChannel;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }
        if (null !== $this->accountPayType) {
            $res['AccountPayType'] = $this->accountPayType;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->countryOrAreaCode) {
            $res['CountryOrAreaCode'] = $this->countryOrAreaCode;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->idempotentId) {
            $res['IdempotentId'] = $this->idempotentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySettleAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountChannel'])) {
            $model->accountChannel = $map['AccountChannel'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }
        if (isset($map['AccountPayType'])) {
            $model->accountPayType = $map['AccountPayType'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CountryOrAreaCode'])) {
            $model->countryOrAreaCode = $map['CountryOrAreaCode'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['IdempotentId'])) {
            $model->idempotentId = $map['IdempotentId'];
        }

        return $model;
    }
}
