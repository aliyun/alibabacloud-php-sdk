<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetAccountInfoResponseBody\accountInfoList;

use AlibabaCloud\Tea\Model;

class accountInfo extends Model
{
    /**
     * @var string
     */
    public $accountNickname;

    /**
     * @example 1234@qq.com
     *
     * @var string
     */
    public $aliyunId;

    /**
     * @example 2021-01-01
     *
     * @var string
     */
    public $associationSuccessTime;

    /**
     * @example 61479572
     *
     * @var int
     */
    public $cid;

    /**
     * @example 1234@qq.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 13641588680
     *
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example 1
     *
     * @var int
     */
    public $subAccountType;

    /**
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
