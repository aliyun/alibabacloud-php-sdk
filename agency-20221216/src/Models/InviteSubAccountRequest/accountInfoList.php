<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountRequest;

use AlibabaCloud\Tea\Model;

class accountInfoList extends Model
{
    /**
     * @var string
     */
    public $accountNickname;

    /**
     * @example 100
     *
     * @var string
     */
    public $creditLine;

    /**
     * @var string
     */
    public $customerId;

    /**
     * @example 12345@163.com
     *
     * @var string
     */
    public $emailAddress;

    /**
     * @example ban
     *
     * @var string
     */
    public $newBuyStatus;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example 1
     *
     * @var string
     */
    public $subAccountType;

    /**
     * @example 1
     *
     * @var string
     */
    public $zeroCreditShutdownPolicy;
    protected $_name = [
        'accountNickname'          => 'AccountNickname',
        'creditLine'               => 'CreditLine',
        'customerId'               => 'CustomerId',
        'emailAddress'             => 'EmailAddress',
        'newBuyStatus'             => 'NewBuyStatus',
        'remark'                   => 'Remark',
        'subAccountType'           => 'SubAccountType',
        'zeroCreditShutdownPolicy' => 'ZeroCreditShutdownPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNickname) {
            $res['AccountNickname'] = $this->accountNickname;
        }
        if (null !== $this->creditLine) {
            $res['CreditLine'] = $this->creditLine;
        }
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }
        if (null !== $this->emailAddress) {
            $res['EmailAddress'] = $this->emailAddress;
        }
        if (null !== $this->newBuyStatus) {
            $res['NewBuyStatus'] = $this->newBuyStatus;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->subAccountType) {
            $res['SubAccountType'] = $this->subAccountType;
        }
        if (null !== $this->zeroCreditShutdownPolicy) {
            $res['ZeroCreditShutdownPolicy'] = $this->zeroCreditShutdownPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNickname'])) {
            $model->accountNickname = $map['AccountNickname'];
        }
        if (isset($map['CreditLine'])) {
            $model->creditLine = $map['CreditLine'];
        }
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['EmailAddress'])) {
            $model->emailAddress = $map['EmailAddress'];
        }
        if (isset($map['NewBuyStatus'])) {
            $model->newBuyStatus = $map['NewBuyStatus'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SubAccountType'])) {
            $model->subAccountType = $map['SubAccountType'];
        }
        if (isset($map['ZeroCreditShutdownPolicy'])) {
            $model->zeroCreditShutdownPolicy = $map['ZeroCreditShutdownPolicy'];
        }

        return $model;
    }
}
