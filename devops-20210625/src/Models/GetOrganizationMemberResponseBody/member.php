<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetOrganizationMemberResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetOrganizationMemberResponseBody\member\identities;
use AlibabaCloud\Tea\Model;

class member extends Model
{
    /**
     * @description 阿里云用户PK
     *
     * @var string
     */
    public $accountId;

    /**
     * @description 生日
     *
     * @var int
     */
    public $birthday;

    /**
     * @description 部门名称列表
     *
     * @var string[]
     */
    public $deptLists;

    /**
     * @description 邮箱
     *
     * @var string
     */
    public $email;

    /**
     * @description 入职时间
     *
     * @var int
     */
    public $hiredDate;

    /**
     * @description 第三方信息
     *
     * @var identities
     */
    public $identities;

    /**
     * @description 加入云效企业时间
     *
     * @var int
     */
    public $joinTime;

    /**
     * @description 最近一次访问时间
     *
     * @var int
     */
    public $lastVisitTime;

    /**
     * @description 手机号
     *
     * @var string
     */
    public $mobile;

    /**
     * @description 企业成员名
     *
     * @var string
     */
    public $organizationMemberName;

    /**
     * @description 企业角色Id
     *
     * @var string
     */
    public $organizationRoleId;

    /**
     * @description 企业角色名字
     *
     * @var string
     */
    public $organizationRoleName;

    /**
     * @description 用户状态
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accountId'              => 'accountId',
        'birthday'               => 'birthday',
        'deptLists'              => 'deptLists',
        'email'                  => 'email',
        'hiredDate'              => 'hiredDate',
        'identities'             => 'identities',
        'joinTime'               => 'joinTime',
        'lastVisitTime'          => 'lastVisitTime',
        'mobile'                 => 'mobile',
        'organizationMemberName' => 'organizationMemberName',
        'organizationRoleId'     => 'organizationRoleId',
        'organizationRoleName'   => 'organizationRoleName',
        'state'                  => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }
        if (null !== $this->deptLists) {
            $res['deptLists'] = $this->deptLists;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->hiredDate) {
            $res['hiredDate'] = $this->hiredDate;
        }
        if (null !== $this->identities) {
            $res['identities'] = null !== $this->identities ? $this->identities->toMap() : null;
        }
        if (null !== $this->joinTime) {
            $res['joinTime'] = $this->joinTime;
        }
        if (null !== $this->lastVisitTime) {
            $res['lastVisitTime'] = $this->lastVisitTime;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->organizationMemberName) {
            $res['organizationMemberName'] = $this->organizationMemberName;
        }
        if (null !== $this->organizationRoleId) {
            $res['organizationRoleId'] = $this->organizationRoleId;
        }
        if (null !== $this->organizationRoleName) {
            $res['organizationRoleName'] = $this->organizationRoleName;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return member
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }
        if (isset($map['deptLists'])) {
            if (!empty($map['deptLists'])) {
                $model->deptLists = $map['deptLists'];
            }
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['hiredDate'])) {
            $model->hiredDate = $map['hiredDate'];
        }
        if (isset($map['identities'])) {
            $model->identities = identities::fromMap($map['identities']);
        }
        if (isset($map['joinTime'])) {
            $model->joinTime = $map['joinTime'];
        }
        if (isset($map['lastVisitTime'])) {
            $model->lastVisitTime = $map['lastVisitTime'];
        }
        if (isset($map['mobile'])) {
            $model->mobile = $map['mobile'];
        }
        if (isset($map['organizationMemberName'])) {
            $model->organizationMemberName = $map['organizationMemberName'];
        }
        if (isset($map['organizationRoleId'])) {
            $model->organizationRoleId = $map['organizationRoleId'];
        }
        if (isset($map['organizationRoleName'])) {
            $model->organizationRoleName = $map['organizationRoleName'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
