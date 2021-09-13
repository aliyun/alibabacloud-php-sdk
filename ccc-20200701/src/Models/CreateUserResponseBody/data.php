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
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $workMode;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'displayName' => 'DisplayName',
        'extension'   => 'Extension',
        'email'       => 'Email',
        'loginName'   => 'LoginName',
        'workMode'    => 'WorkMode',
        'mobile'      => 'Mobile',
        'userId'      => 'UserId',
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
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
