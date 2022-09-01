<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\FindUserlistToAuthLoginWithPhoneNumberResponseBody\result;

use AlibabaCloud\Tea\Model;

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
        'avatar'                  => 'Avatar',
        'encryptedUserIdentifier' => 'EncryptedUserIdentifier',
        'findingType'             => 'FindingType',
        'nickname'                => 'Nickname',
        'userType'                => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return userListToAuthLogin
     */
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
