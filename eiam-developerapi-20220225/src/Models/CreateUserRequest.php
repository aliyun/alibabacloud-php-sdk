<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 账户展示名
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
     * @description 邮箱是否验证，邮箱若设置此字段必须设置，无特殊业务可直接设置为true
     *
     * @var bool
     */
    public $emailVerified;

    /**
     * @description 密码, 参考密码策略
     *
     * @var string
     */
    public $password;

    /**
     * @description 手机号
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description 手机号是否验证，手机号若设置此字段必须设置，无特殊业务可直接设置为true
     *
     * @var bool
     */
    public $phoneNumberVerified;

    /**
     * @description 手机地区编号,示例：中国大陆手区号为86，不带 00 或 +, 手机号若设置，此参数必填
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
     * @description 账户外部ID
     *
     * @var string
     */
    public $userExternalId;

    /**
     * @description 账户名
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'description'                 => 'description',
        'displayName'                 => 'displayName',
        'email'                       => 'email',
        'emailVerified'               => 'emailVerified',
        'password'                    => 'password',
        'phoneNumber'                 => 'phoneNumber',
        'phoneNumberVerified'         => 'phoneNumberVerified',
        'phoneRegion'                 => 'phoneRegion',
        'primaryOrganizationalUnitId' => 'primaryOrganizationalUnitId',
        'userExternalId'              => 'userExternalId',
        'username'                    => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->password) {
            $res['password'] = $this->password;
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
        if (null !== $this->userExternalId) {
            $res['userExternalId'] = $this->userExternalId;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['password'])) {
            $model->password = $map['password'];
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
        if (isset($map['userExternalId'])) {
            $model->userExternalId = $map['userExternalId'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
