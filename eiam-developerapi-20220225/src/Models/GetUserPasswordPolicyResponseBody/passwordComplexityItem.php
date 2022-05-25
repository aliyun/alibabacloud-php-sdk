<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserPasswordPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class passwordComplexityItem extends Model
{
    /**
     * @description 是否包含小写字母
     *
     * @var bool
     */
    public $containLowerCase;

    /**
     * @description 是否包含数字
     *
     * @var bool
     */
    public $containNumber;

    /**
     * @description 是否包含特殊字符
     *
     * @var bool
     */
    public $containSpecialChar;

    /**
     * @description 是否包含大写字母
     *
     * @var bool
     */
    public $containUpperCase;

    /**
     * @description 是否进行包含显示名检测
     *
     * @var bool
     */
    public $displayNameCheck;

    /**
     * @description 是否进行email检测
     *
     * @var bool
     */
    public $emailCheck;

    /**
     * @description 是否进行包含手机号检测
     *
     * @var bool
     */
    public $phoneCheck;

    /**
     * @description 是否进行包含用户名检测
     *
     * @var bool
     */
    public $usernameCheck;
    protected $_name = [
        'containLowerCase'   => 'containLowerCase',
        'containNumber'      => 'containNumber',
        'containSpecialChar' => 'containSpecialChar',
        'containUpperCase'   => 'containUpperCase',
        'displayNameCheck'   => 'displayNameCheck',
        'emailCheck'         => 'emailCheck',
        'phoneCheck'         => 'phoneCheck',
        'usernameCheck'      => 'usernameCheck',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containLowerCase) {
            $res['containLowerCase'] = $this->containLowerCase;
        }
        if (null !== $this->containNumber) {
            $res['containNumber'] = $this->containNumber;
        }
        if (null !== $this->containSpecialChar) {
            $res['containSpecialChar'] = $this->containSpecialChar;
        }
        if (null !== $this->containUpperCase) {
            $res['containUpperCase'] = $this->containUpperCase;
        }
        if (null !== $this->displayNameCheck) {
            $res['displayNameCheck'] = $this->displayNameCheck;
        }
        if (null !== $this->emailCheck) {
            $res['emailCheck'] = $this->emailCheck;
        }
        if (null !== $this->phoneCheck) {
            $res['phoneCheck'] = $this->phoneCheck;
        }
        if (null !== $this->usernameCheck) {
            $res['usernameCheck'] = $this->usernameCheck;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passwordComplexityItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['containLowerCase'])) {
            $model->containLowerCase = $map['containLowerCase'];
        }
        if (isset($map['containNumber'])) {
            $model->containNumber = $map['containNumber'];
        }
        if (isset($map['containSpecialChar'])) {
            $model->containSpecialChar = $map['containSpecialChar'];
        }
        if (isset($map['containUpperCase'])) {
            $model->containUpperCase = $map['containUpperCase'];
        }
        if (isset($map['displayNameCheck'])) {
            $model->displayNameCheck = $map['displayNameCheck'];
        }
        if (isset($map['emailCheck'])) {
            $model->emailCheck = $map['emailCheck'];
        }
        if (isset($map['phoneCheck'])) {
            $model->phoneCheck = $map['phoneCheck'];
        }
        if (isset($map['usernameCheck'])) {
            $model->usernameCheck = $map['usernameCheck'];
        }

        return $model;
    }
}
