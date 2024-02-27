<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountRequest;

use AlibabaCloud\Tea\Model;

class accountInfoList extends Model
{
    /**
     * @description The name of Sub Account:</br>
     * 2. Use the official name of Partner, if Sub Account is a T2 reseller.</br>
     * @example XXX Technology LTD.
     *
     * @var string
     */
    public $accountNickname;

    /**
     * @description The total budget Credit of Sub Account that distributed by Partner.
     *
     * @example 100
     *
     * @var string
     */
    public $creditLine;

    /**
     * @description Customer ID, Returning ID from CreateCustomer API.
     *
     * @example 1234567
     *
     * @var string
     */
    public $customerId;

    /**
     * @description The email address of End User,  which will receive the invitation email.
     *
     * @example 12345@163.com
     *
     * @var string
     */
    public $emailAddress;

    /**
     * @description Initial Order Status</br>
     * 2. normal：Normal--After End User finished registration and authorization, they can issue Cloud Resource order immediately.</br>
     * @example ban
     *
     * @var string
     */
    public $newBuyStatus;

    /**
     * @description Description of Sub Account.
     *
     * @example The invitation to develop XX as a Sub Account
     *
     * @var string
     */
    public $remark;

    /**
     * @description The type of Sub Account</br>
     *
     * 5 Reseller\"s T2 Partner</br>
     * @example 1
     *
     * @var string
     */
    public $subAccountType;

    /**
     * @description Partner\"s Shutdown Policy Management for Sub Account.</br>
     * 3: immediatelyStop. Once valid quota of Sub Account falls below 0 and be identified as defaulting account, it will trigger the instance shutdown immediately.</br>
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
