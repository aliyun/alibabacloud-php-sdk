<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryAccountsInfoResponseBody;

use AlibabaCloud\Dara\Model;

class accountInfoDtoList extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var bool
     */
    public $belongToMasterAccount;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $enterpriseEcId;

    /**
     * @var string
     */
    public $enterpriseEntityId;

    /**
     * @var string
     */
    public $enterpriseLicenseNo;

    /**
     * @var string
     */
    public $enterpriseName;

    /**
     * @var string
     */
    public $enterpriseNbId;

    /**
     * @var bool
     */
    public $freezeLogin;

    /**
     * @var string
     */
    public $loginId;

    /**
     * @var string
     */
    public $manageInviteTimeStamp;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $securityMobile;
    protected $_name = [
        'alias' => 'Alias',
        'belongToMasterAccount' => 'BelongToMasterAccount',
        'email' => 'Email',
        'enterpriseEcId' => 'EnterpriseEcId',
        'enterpriseEntityId' => 'EnterpriseEntityId',
        'enterpriseLicenseNo' => 'EnterpriseLicenseNo',
        'enterpriseName' => 'EnterpriseName',
        'enterpriseNbId' => 'EnterpriseNbId',
        'freezeLogin' => 'FreezeLogin',
        'loginId' => 'LoginId',
        'manageInviteTimeStamp' => 'ManageInviteTimeStamp',
        'pk' => 'Pk',
        'securityMobile' => 'SecurityMobile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->belongToMasterAccount) {
            $res['BelongToMasterAccount'] = $this->belongToMasterAccount;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->enterpriseEcId) {
            $res['EnterpriseEcId'] = $this->enterpriseEcId;
        }

        if (null !== $this->enterpriseEntityId) {
            $res['EnterpriseEntityId'] = $this->enterpriseEntityId;
        }

        if (null !== $this->enterpriseLicenseNo) {
            $res['EnterpriseLicenseNo'] = $this->enterpriseLicenseNo;
        }

        if (null !== $this->enterpriseName) {
            $res['EnterpriseName'] = $this->enterpriseName;
        }

        if (null !== $this->enterpriseNbId) {
            $res['EnterpriseNbId'] = $this->enterpriseNbId;
        }

        if (null !== $this->freezeLogin) {
            $res['FreezeLogin'] = $this->freezeLogin;
        }

        if (null !== $this->loginId) {
            $res['LoginId'] = $this->loginId;
        }

        if (null !== $this->manageInviteTimeStamp) {
            $res['ManageInviteTimeStamp'] = $this->manageInviteTimeStamp;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->securityMobile) {
            $res['SecurityMobile'] = $this->securityMobile;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['BelongToMasterAccount'])) {
            $model->belongToMasterAccount = $map['BelongToMasterAccount'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EnterpriseEcId'])) {
            $model->enterpriseEcId = $map['EnterpriseEcId'];
        }

        if (isset($map['EnterpriseEntityId'])) {
            $model->enterpriseEntityId = $map['EnterpriseEntityId'];
        }

        if (isset($map['EnterpriseLicenseNo'])) {
            $model->enterpriseLicenseNo = $map['EnterpriseLicenseNo'];
        }

        if (isset($map['EnterpriseName'])) {
            $model->enterpriseName = $map['EnterpriseName'];
        }

        if (isset($map['EnterpriseNbId'])) {
            $model->enterpriseNbId = $map['EnterpriseNbId'];
        }

        if (isset($map['FreezeLogin'])) {
            $model->freezeLogin = $map['FreezeLogin'];
        }

        if (isset($map['LoginId'])) {
            $model->loginId = $map['LoginId'];
        }

        if (isset($map['ManageInviteTimeStamp'])) {
            $model->manageInviteTimeStamp = $map['ManageInviteTimeStamp'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['SecurityMobile'])) {
            $model->securityMobile = $map['SecurityMobile'];
        }

        return $model;
    }
}
