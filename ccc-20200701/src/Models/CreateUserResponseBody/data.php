<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\CreateUserResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workMode;
    protected $_name = [
        'avatarUrl' => 'AvatarUrl',
        'displayName' => 'DisplayName',
        'email' => 'Email',
        'extension' => 'Extension',
        'loginName' => 'LoginName',
        'mobile' => 'Mobile',
        'nickname' => 'Nickname',
        'userId' => 'UserId',
        'workMode' => 'WorkMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }

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

        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
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
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }

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

        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
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
