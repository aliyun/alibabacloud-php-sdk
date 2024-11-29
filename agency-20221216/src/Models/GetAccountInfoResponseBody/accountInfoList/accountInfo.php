<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetAccountInfoResponseBody\accountInfoList;

use AlibabaCloud\Tea\Model;

class accountInfo extends Model
{
    /**
     * @description The name of Sub Account.
     * - T2 Reseller: Name of Partner
     * @example XXX Technology LTD.
     *
     * @var string
     */
    public $accountNickname;

    /**
     * @description Alibaba Cloud Login name of Distribution Customer.
     *
     * @example 1234@qq.com
     *
     * @var string
     */
    public $aliyunId;

    /**
     * @description The time that Distribution Customer successfully associated with Distributor.
     *
     * @example 2021-01-01
     *
     * @var string
     */
    public $associationSuccessTime;

    /**
     * @description Account CID of Distribution Customer.
     *
     * @example 61479572
     *
     * @var int
     */
    public $cid;

    /**
     * @description Type of customer\\"s account, 0 Individual, 1 Enterprise
     *
     * @example 1
     *
     * @var int
     */
    public $customerAccountType;

    /**
     * @description Customer\\"s Sales Manager
     *
     * @example Tommy
     *
     * @var string
     */
    public $customerBd;

    /**
     * @description Whether the customer has completed Enterprise Real-name Authentication, 0 No, 1 Yes
     *
     * @example 1
     *
     * @var int
     */
    public $customerEnterpriseCertified;

    /**
     * @description When Shutdown Policy is delayStop, this number refer to Shutdown-delay Credit (overdraft limit).
     *
     * @example 600
     *
     * @var string
     */
    public $delayAmount;

    /**
     * @description There are a value for Shutdown Policy Management towards Sub Account.
     * - 3 noStop, customer\\"s instance status is rely on manual control instead of auto setting.
     * @example immediatelyStop
     *
     * @var string
     */
    public $delayStatus;

    /**
     * @description The E-mail of Distribution Customer.
     *
     * @example 1234@qq.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The contact number of Distribution Customer.
     *
     * @example 13641588680
     *
     * @var string
     */
    public $mobile;

    /**
     * @description Purchase Control, Value Range:
     * - Normal (Purchase is allowed)
     * @example Normal
     *
     * @var string
     */
    public $newBuyStatus;

    /**
     * @description The Country Code where the customer\\"s account is registered.
     *
     * @example CN
     *
     * @var string
     */
    public $registerCountryCode;

    /**
     * @description Description of Distribution Customer.
     *
     * @example Sub Account
     *
     * @var string
     */
    public $remark;

    /**
     * @description Account Type:
     * - 6 T2 Agency+Reseller Partner
     * @example 1
     *
     * @var int
     */
    public $subAccountType;

    /**
     * @description Account UID of Distribution Customer.
     *
     * @example 1415740779475837
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'accountNickname'             => 'AccountNickname',
        'aliyunId'                    => 'AliyunId',
        'associationSuccessTime'      => 'AssociationSuccessTime',
        'cid'                         => 'Cid',
        'customerAccountType'         => 'CustomerAccountType',
        'customerBd'                  => 'CustomerBd',
        'customerEnterpriseCertified' => 'CustomerEnterpriseCertified',
        'delayAmount'                 => 'DelayAmount',
        'delayStatus'                 => 'DelayStatus',
        'email'                       => 'Email',
        'mobile'                      => 'Mobile',
        'newBuyStatus'                => 'NewBuyStatus',
        'registerCountryCode'         => 'RegisterCountryCode',
        'remark'                      => 'Remark',
        'subAccountType'              => 'SubAccountType',
        'uid'                         => 'Uid',
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

    /**
     * @param array $map
     *
     * @return accountInfo
     */
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
