<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetAccountInfoResponseBody\accountInfoList;

use AlibabaCloud\Dara\Model;

class accountInfo extends Model
{
    /**
     * @var string
     */
    public $accountNickname;

    /**
     * @var string
     */
    public $aliyunId;

    /**
     * @var string
     */
    public $associationSuccessTime;

    /**
     * @var int
     */
    public $cid;

    /**
     * @var int
     */
    public $customerAccountType;

    /**
     * @var string
     */
    public $customerBd;

    /**
     * @var int
     */
    public $customerEnterpriseCertified;

    /**
     * @var string
     */
    public $delayAmount;

    /**
     * @var string
     */
    public $delayStatus;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $newBuyStatus;

    /**
     * @var string
     */
    public $registerCountryCode;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $subAccountType;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'accountNickname' => 'AccountNickname',
        'aliyunId' => 'AliyunId',
        'associationSuccessTime' => 'AssociationSuccessTime',
        'cid' => 'Cid',
        'customerAccountType' => 'CustomerAccountType',
        'customerBd' => 'CustomerBd',
        'customerEnterpriseCertified' => 'CustomerEnterpriseCertified',
        'delayAmount' => 'DelayAmount',
        'delayStatus' => 'DelayStatus',
        'email' => 'Email',
        'mobile' => 'Mobile',
        'newBuyStatus' => 'NewBuyStatus',
        'registerCountryCode' => 'RegisterCountryCode',
        'remark' => 'Remark',
        'subAccountType' => 'SubAccountType',
        'uid' => 'Uid',
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

        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }

        if (null !== $this->associationSuccessTime) {
            $res['AssociationSuccessTime'] = $this->associationSuccessTime;
        }

        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }

        if (null !== $this->customerAccountType) {
            $res['CustomerAccountType'] = $this->customerAccountType;
        }

        if (null !== $this->customerBd) {
            $res['CustomerBd'] = $this->customerBd;
        }

        if (null !== $this->customerEnterpriseCertified) {
            $res['CustomerEnterpriseCertified'] = $this->customerEnterpriseCertified;
        }

        if (null !== $this->delayAmount) {
            $res['DelayAmount'] = $this->delayAmount;
        }

        if (null !== $this->delayStatus) {
            $res['DelayStatus'] = $this->delayStatus;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->newBuyStatus) {
            $res['NewBuyStatus'] = $this->newBuyStatus;
        }

        if (null !== $this->registerCountryCode) {
            $res['RegisterCountryCode'] = $this->registerCountryCode;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->subAccountType) {
            $res['SubAccountType'] = $this->subAccountType;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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

        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }

        if (isset($map['AssociationSuccessTime'])) {
            $model->associationSuccessTime = $map['AssociationSuccessTime'];
        }

        if (isset($map['Cid'])) {
            $model->cid = $map['Cid'];
        }

        if (isset($map['CustomerAccountType'])) {
            $model->customerAccountType = $map['CustomerAccountType'];
        }

        if (isset($map['CustomerBd'])) {
            $model->customerBd = $map['CustomerBd'];
        }

        if (isset($map['CustomerEnterpriseCertified'])) {
            $model->customerEnterpriseCertified = $map['CustomerEnterpriseCertified'];
        }

        if (isset($map['DelayAmount'])) {
            $model->delayAmount = $map['DelayAmount'];
        }

        if (isset($map['DelayStatus'])) {
            $model->delayStatus = $map['DelayStatus'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['NewBuyStatus'])) {
            $model->newBuyStatus = $map['NewBuyStatus'];
        }

        if (isset($map['RegisterCountryCode'])) {
            $model->registerCountryCode = $map['RegisterCountryCode'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SubAccountType'])) {
            $model->subAccountType = $map['SubAccountType'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
