<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $newUserPrincipalName;

    /**
     * @var string
     */
    public $newDisplayName;

    /**
     * @var string
     */
    public $newMobilePhone;

    /**
     * @var string
     */
    public $newEmail;

    /**
     * @var string
     */
    public $newComments;

    /**
     * @var string
     */
    public $akProxySuffix;
    protected $_name = [
        'userPrincipalName'    => 'UserPrincipalName',
        'userId'               => 'UserId',
        'newUserPrincipalName' => 'NewUserPrincipalName',
        'newDisplayName'       => 'NewDisplayName',
        'newMobilePhone'       => 'NewMobilePhone',
        'newEmail'             => 'NewEmail',
        'newComments'          => 'NewComments',
        'akProxySuffix'        => 'AkProxySuffix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->newUserPrincipalName) {
            $res['NewUserPrincipalName'] = $this->newUserPrincipalName;
        }
        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }
        if (null !== $this->newMobilePhone) {
            $res['NewMobilePhone'] = $this->newMobilePhone;
        }
        if (null !== $this->newEmail) {
            $res['NewEmail'] = $this->newEmail;
        }
        if (null !== $this->newComments) {
            $res['NewComments'] = $this->newComments;
        }
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['NewUserPrincipalName'])) {
            $model->newUserPrincipalName = $map['NewUserPrincipalName'];
        }
        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }
        if (isset($map['NewMobilePhone'])) {
            $model->newMobilePhone = $map['NewMobilePhone'];
        }
        if (isset($map['NewEmail'])) {
            $model->newEmail = $map['NewEmail'];
        }
        if (isset($map['NewComments'])) {
            $model->newComments = $map['NewComments'];
        }
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }

        return $model;
    }
}
