<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\FindUserlistToAuthLoginWithPhoneNumberResponseBody\result;

use AlibabaCloud\Dara\Model;

class userListToAuthLogin extends Model
{
    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $encryptedUserIdentifier;

    /**
     * @var string
     */
    public $findingType;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'avatar' => 'Avatar',
        'encryptedUserIdentifier' => 'EncryptedUserIdentifier',
        'findingType' => 'FindingType',
        'nickname' => 'Nickname',
        'userType' => 'UserType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }

        if (null !== $this->encryptedUserIdentifier) {
            $res['EncryptedUserIdentifier'] = $this->encryptedUserIdentifier;
        }

        if (null !== $this->findingType) {
            $res['FindingType'] = $this->findingType;
        }

        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }

        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }

        if (isset($map['EncryptedUserIdentifier'])) {
            $model->encryptedUserIdentifier = $map['EncryptedUserIdentifier'];
        }

        if (isset($map['FindingType'])) {
            $model->findingType = $map['FindingType'];
        }

        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
