<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetUserResponse;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var string
     */
    public $lastLoginDate;

    /**
     * @var string
     */
    public $mobilePhone;

    /**
     * @var string
     */
    public $email;
    protected $_name = [
        'userId'            => 'UserId',
        'userPrincipalName' => 'UserPrincipalName',
        'displayName'       => 'DisplayName',
        'comments'          => 'Comments',
        'createDate'        => 'CreateDate',
        'updateDate'        => 'UpdateDate',
        'lastLoginDate'     => 'LastLoginDate',
        'mobilePhone'       => 'MobilePhone',
        'email'             => 'Email',
    ];

    public function validate()
    {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('userPrincipalName', $this->userPrincipalName, true);
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('comments', $this->comments, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('lastLoginDate', $this->lastLoginDate, true);
        Model::validateRequired('mobilePhone', $this->mobilePhone, true);
        Model::validateRequired('email', $this->email, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->lastLoginDate) {
            $res['LastLoginDate'] = $this->lastLoginDate;
        }
        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['LastLoginDate'])) {
            $model->lastLoginDate = $map['LastLoginDate'];
        }
        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        return $model;
    }
}
