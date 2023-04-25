<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\CreateUserResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 8032****
     *
     * @var string
     */
    public $extension;

    /**
     * @example agent
     *
     * @var string
     */
    public $loginName;

    /**
     * @example 1382114****
     *
     * @var string
     */
    public $mobile;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $userId;

    /**
     * @example ON_SITE
     *
     * @var string
     */
    public $workMode;
    protected $_name = [
        'displayName' => 'DisplayName',
        'email'       => 'Email',
        'extension'   => 'Extension',
        'loginName'   => 'LoginName',
        'mobile'      => 'Mobile',
        'userId'      => 'UserId',
        'workMode'    => 'WorkMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
