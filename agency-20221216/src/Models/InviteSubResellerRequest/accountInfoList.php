<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubResellerRequest;

use AlibabaCloud\Dara\Model;

class accountInfoList extends Model
{
    /**
     * @var string
     */
    public $accountNickname;

    /**
     * @var string
     */
    public $creditLine;

    /**
     * @var string
     */
    public $crossScopeRemark;

    /**
     * @var string
     */
    public $customerBd;

    /**
     * @var string
     */
    public $emailAddress;

    /**
     * @var string
     */
    public $newBuyStatus;

    /**
     * @var string
     */
    public $registerNation;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $subAccountType;

    /**
     * @var string
     */
    public $zeroCreditShutdownPolicy;
    protected $_name = [
        'accountNickname' => 'AccountNickname',
        'creditLine' => 'CreditLine',
        'crossScopeRemark' => 'CrossScopeRemark',
        'customerBd' => 'CustomerBd',
        'emailAddress' => 'EmailAddress',
        'newBuyStatus' => 'NewBuyStatus',
        'registerNation' => 'RegisterNation',
        'remark' => 'Remark',
        'subAccountType' => 'SubAccountType',
        'zeroCreditShutdownPolicy' => 'ZeroCreditShutdownPolicy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNickname) {
            $res['AccountNickname'] = $this->accountNickname;
        }

        if (null !== $this->creditLine) {
            $res['CreditLine'] = $this->creditLine;
        }

        if (null !== $this->crossScopeRemark) {
            $res['CrossScopeRemark'] = $this->crossScopeRemark;
        }

        if (null !== $this->customerBd) {
            $res['CustomerBd'] = $this->customerBd;
        }

        if (null !== $this->emailAddress) {
            $res['EmailAddress'] = $this->emailAddress;
        }

        if (null !== $this->newBuyStatus) {
            $res['NewBuyStatus'] = $this->newBuyStatus;
        }

        if (null !== $this->registerNation) {
            $res['RegisterNation'] = $this->registerNation;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNickname'])) {
            $model->accountNickname = $map['AccountNickname'];
        }

        if (isset($map['CreditLine'])) {
            $model->creditLine = $map['CreditLine'];
        }

        if (isset($map['CrossScopeRemark'])) {
            $model->crossScopeRemark = $map['CrossScopeRemark'];
        }

        if (isset($map['CustomerBd'])) {
            $model->customerBd = $map['CustomerBd'];
        }

        if (isset($map['EmailAddress'])) {
            $model->emailAddress = $map['EmailAddress'];
        }

        if (isset($map['NewBuyStatus'])) {
            $model->newBuyStatus = $map['NewBuyStatus'];
        }

        if (isset($map['RegisterNation'])) {
            $model->registerNation = $map['RegisterNation'];
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
