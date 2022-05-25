<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserResponseBody\organizationalUnits;
use AlibabaCloud\Tea\Model;

class GetUserResponseBody extends Model
{
    /**
     * @description 账户过期时间, 毫秒时间
     *
     * @var int
     */
    public $accountExpireTime;

    /**
     * @description 创建时间, 毫秒时间
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 账号描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 显示名
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 邮箱
     *
     * @var string
     */
    public $email;

    /**
     * @description 邮箱是否验证
     *
     * @var bool
     */
    public $emailVerified;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 锁定过期时间, 毫秒时间
     *
     * @var int
     */
    public $lockExpireTime;

    /**
     * @description 账户所属组织列表
     *
     * @var organizationalUnits[]
     */
    public $organizationalUnits;

    /**
     * @description 密码是否已设置
     *
     * @var bool
     */
    public $passwordSet;

    /**
     * @description 手机号
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description 手机号是否验证
     *
     * @var bool
     */
    public $phoneNumberVerified;

    /**
     * @description 手机地区编号,示例：中国大陆手区号为86，不带 00 或 +
     *
     * @var string
     */
    public $phoneRegion;

    /**
     * @description 账户主机构ID
     *
     * @var string
     */
    public $primaryOrganizationalUnitId;

    /**
     * @var int
     */
    public $registerTime;

    /**
     * @description 账户状态, enabled:启用,disabled:禁用
     *
     * @var string
     */
    public $status;

    /**
     * @description 最近一次更新时间, 毫秒时间
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description 外部ID
     *
     * @var string
     */
    public $userExternalId;

    /**
     * @description 账户ID
     *
     * @var string
     */
    public $userId;

    /**
     * @description 来源ID
     *
     * @var string
     */
    public $userSourceId;

    /**
     * @description 来源类型，build_in[自建],ding_talk[钉钉导入],ad[AD导入],ldap[LDAP导入]
     *
     * @var string
     */
    public $userSourceType;

    /**
     * @description 账户名
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'accountExpireTime'           => 'accountExpireTime',
        'createTime'                  => 'createTime',
        'description'                 => 'description',
        'displayName'                 => 'displayName',
        'email'                       => 'email',
        'emailVerified'               => 'emailVerified',
        'instanceId'                  => 'instanceId',
        'lockExpireTime'              => 'lockExpireTime',
        'organizationalUnits'         => 'organizationalUnits',
        'passwordSet'                 => 'passwordSet',
        'phoneNumber'                 => 'phoneNumber',
        'phoneNumberVerified'         => 'phoneNumberVerified',
        'phoneRegion'                 => 'phoneRegion',
        'primaryOrganizationalUnitId' => 'primaryOrganizationalUnitId',
        'registerTime'                => 'registerTime',
        'status'                      => 'status',
        'updateTime'                  => 'updateTime',
        'userExternalId'              => 'userExternalId',
        'userId'                      => 'userId',
        'userSourceId'                => 'userSourceId',
        'userSourceType'              => 'userSourceType',
        'username'                    => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountExpireTime) {
            $res['accountExpireTime'] = $this->accountExpireTime;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->emailVerified) {
            $res['emailVerified'] = $this->emailVerified;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->lockExpireTime) {
            $res['lockExpireTime'] = $this->lockExpireTime;
        }
        if (null !== $this->organizationalUnits) {
            $res['organizationalUnits'] = [];
            if (null !== $this->organizationalUnits && \is_array($this->organizationalUnits)) {
                $n = 0;
                foreach ($this->organizationalUnits as $item) {
                    $res['organizationalUnits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->passwordSet) {
            $res['passwordSet'] = $this->passwordSet;
        }
        if (null !== $this->phoneNumber) {
            $res['phoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->phoneNumberVerified) {
            $res['phoneNumberVerified'] = $this->phoneNumberVerified;
        }
        if (null !== $this->phoneRegion) {
            $res['phoneRegion'] = $this->phoneRegion;
        }
        if (null !== $this->primaryOrganizationalUnitId) {
            $res['primaryOrganizationalUnitId'] = $this->primaryOrganizationalUnitId;
        }
        if (null !== $this->registerTime) {
            $res['registerTime'] = $this->registerTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->userExternalId) {
            $res['userExternalId'] = $this->userExternalId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->userSourceId) {
            $res['userSourceId'] = $this->userSourceId;
        }
        if (null !== $this->userSourceType) {
            $res['userSourceType'] = $this->userSourceType;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountExpireTime'])) {
            $model->accountExpireTime = $map['accountExpireTime'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['emailVerified'])) {
            $model->emailVerified = $map['emailVerified'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['lockExpireTime'])) {
            $model->lockExpireTime = $map['lockExpireTime'];
        }
        if (isset($map['organizationalUnits'])) {
            if (!empty($map['organizationalUnits'])) {
                $model->organizationalUnits = [];
                $n                          = 0;
                foreach ($map['organizationalUnits'] as $item) {
                    $model->organizationalUnits[$n++] = null !== $item ? organizationalUnits::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['passwordSet'])) {
            $model->passwordSet = $map['passwordSet'];
        }
        if (isset($map['phoneNumber'])) {
            $model->phoneNumber = $map['phoneNumber'];
        }
        if (isset($map['phoneNumberVerified'])) {
            $model->phoneNumberVerified = $map['phoneNumberVerified'];
        }
        if (isset($map['phoneRegion'])) {
            $model->phoneRegion = $map['phoneRegion'];
        }
        if (isset($map['primaryOrganizationalUnitId'])) {
            $model->primaryOrganizationalUnitId = $map['primaryOrganizationalUnitId'];
        }
        if (isset($map['registerTime'])) {
            $model->registerTime = $map['registerTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['userExternalId'])) {
            $model->userExternalId = $map['userExternalId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userSourceId'])) {
            $model->userSourceId = $map['userSourceId'];
        }
        if (isset($map['userSourceType'])) {
            $model->userSourceType = $map['userSourceType'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
