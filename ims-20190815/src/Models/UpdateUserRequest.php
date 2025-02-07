<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserRequest extends Model
{
    /**
     * @var string
     */
    public $newComments;
    /**
     * @var string
     */
    public $newDisplayName;
    /**
     * @var string
     */
    public $newEmail;
    /**
     * @var string
     */
    public $newMobilePhone;
    /**
     * @var string
     */
    public $newUserPrincipalName;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'newComments'          => 'NewComments',
        'newDisplayName'       => 'NewDisplayName',
        'newEmail'             => 'NewEmail',
        'newMobilePhone'       => 'NewMobilePhone',
        'newUserPrincipalName' => 'NewUserPrincipalName',
        'userId'               => 'UserId',
        'userPrincipalName'    => 'UserPrincipalName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newComments) {
            $res['NewComments'] = $this->newComments;
        }

        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }

        if (null !== $this->newEmail) {
            $res['NewEmail'] = $this->newEmail;
        }

        if (null !== $this->newMobilePhone) {
            $res['NewMobilePhone'] = $this->newMobilePhone;
        }

        if (null !== $this->newUserPrincipalName) {
            $res['NewUserPrincipalName'] = $this->newUserPrincipalName;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
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
        if (isset($map['NewComments'])) {
            $model->newComments = $map['NewComments'];
        }

        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }

        if (isset($map['NewEmail'])) {
            $model->newEmail = $map['NewEmail'];
        }

        if (isset($map['NewMobilePhone'])) {
            $model->newMobilePhone = $map['NewMobilePhone'];
        }

        if (isset($map['NewUserPrincipalName'])) {
            $model->newUserPrincipalName = $map['NewUserPrincipalName'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
