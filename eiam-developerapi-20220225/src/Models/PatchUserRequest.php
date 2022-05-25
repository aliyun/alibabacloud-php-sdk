<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class PatchUserRequest extends Model
{
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
     * @description 账户名
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'displayName'         => 'displayName',
        'email'               => 'email',
        'emailVerified'       => 'emailVerified',
        'phoneNumber'         => 'phoneNumber',
        'phoneNumberVerified' => 'phoneNumberVerified',
        'phoneRegion'         => 'phoneRegion',
        'username'            => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->emailVerified) {
            $res['emailVerified'] = $this->emailVerified;
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
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PatchUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['emailVerified'])) {
            $model->emailVerified = $map['emailVerified'];
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
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
