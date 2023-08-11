<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\UpdateUserResponseBody;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The description.
     *
     * @example This is a cloud computing engineer.
     *
     * @var string
     */
    public $comments;

    /**
     * @description The time when the RAM user was created.
     *
     * @example 2020-10-12T09:12:00Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The display name of the RAM user.
     *
     * @example new
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The email address of the RAM user.
     *
     * > This parameter is valid only on the China site (aliyun.com).
     * @example alice@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The last time when the RAM user logged on to the Alibaba Cloud Management Console.
     *
     * @example 2020-10-12T09:12:00Z
     *
     * @var string
     */
    public $lastLoginDate;

    /**
     * @description The mobile phone number of the RAM user.
     *
     * > This parameter is valid only on the China site (aliyun.com).
     * @example 86-1868888****
     *
     * @var string
     */
    public $mobilePhone;

    /**
     * @description The source of the RAM user. Valid values:
     *
     * - CloudSSO: The RAM user is mapped from a CloudSSO user.
     * @example Manual
     *
     * @var string
     */
    public $provisionType;

    /**
     * @description The time when the information about the RAM user was updated.
     *
     * @example 2020-10-13T09:19:49Z
     *
     * @var string
     */
    public $updateDate;

    /**
     * @description The ID of the RAM user.
     *
     * @example 20732900249392****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The logon name of the RAM user.
     *
     * @example new@example.onaliyun.com
     *
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'comments'          => 'Comments',
        'createDate'        => 'CreateDate',
        'displayName'       => 'DisplayName',
        'email'             => 'Email',
        'lastLoginDate'     => 'LastLoginDate',
        'mobilePhone'       => 'MobilePhone',
        'provisionType'     => 'ProvisionType',
        'updateDate'        => 'UpdateDate',
        'userId'            => 'UserId',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->lastLoginDate) {
            $res['LastLoginDate'] = $this->lastLoginDate;
        }
        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }
        if (null !== $this->provisionType) {
            $res['ProvisionType'] = $this->provisionType;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
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
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['LastLoginDate'])) {
            $model->lastLoginDate = $map['LastLoginDate'];
        }
        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }
        if (isset($map['ProvisionType'])) {
            $model->provisionType = $map['ProvisionType'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
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
