<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetAccountInfoResponseBody\accountInfoList;

use AlibabaCloud\Tea\Model;

class accountInfo extends Model
{
    /**
     * @description The name of Sub Account:
     * 2.	Use the official name of Partner, if Sub Account is a T2 reseller.
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
     * @description The E-mail of Distribution Customer.
     *
     * @example 1234@qq.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Valid mobile number of Distribution Customer.
     *
     * @example 13641588680
     *
     * @var string
     */
    public $mobile;

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
        'accountNickname'        => 'AccountNickname',
        'aliyunId'               => 'AliyunId',
        'associationSuccessTime' => 'AssociationSuccessTime',
        'cid'                    => 'Cid',
        'email'                  => 'Email',
        'mobile'                 => 'Mobile',
        'remark'                 => 'Remark',
        'subAccountType'         => 'SubAccountType',
        'uid'                    => 'Uid',
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
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
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
