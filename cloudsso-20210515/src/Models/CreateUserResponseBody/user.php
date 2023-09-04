<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateUserResponseBody;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The time when the user was created.
     *
     * @example 2021-10-26T03:03:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the user.
     *
     * @example This is a user.
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the user.
     *
     * @example Alice
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The email address of the user.
     *
     * @example Alice@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The first name of the user.
     *
     * @example Alice
     *
     * @var string
     */
    public $firstName;

    /**
     * @description The last name of the user.
     *
     * @example Lee
     *
     * @var string
     */
    public $lastName;

    /**
     * @description The type of the user. Valid values:
     *
     *   Manual: The user is manually created.
     *   Synchronized: The user is synchronized from an external identity provider (IdP).
     *
     * @example Manual
     *
     * @var string
     */
    public $provisionType;

    /**
     * @description The status of the user. Valid values:
     *
     *   Enabled: The logon of the user is enabled.
     *   Disabled: The logon of the user is disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the user was modified.
     *
     * @example 2021-10-26T03:03:42Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The ID of the user.
     *
     * @example u-00q8wbq42wiltcrk****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The name of the user.
     *
     * @example Alice
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'displayName'   => 'DisplayName',
        'email'         => 'Email',
        'firstName'     => 'FirstName',
        'lastName'      => 'LastName',
        'provisionType' => 'ProvisionType',
        'status'        => 'Status',
        'updateTime'    => 'UpdateTime',
        'userId'        => 'UserId',
        'userName'      => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->firstName) {
            $res['FirstName'] = $this->firstName;
        }
        if (null !== $this->lastName) {
            $res['LastName'] = $this->lastName;
        }
        if (null !== $this->provisionType) {
            $res['ProvisionType'] = $this->provisionType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['FirstName'])) {
            $model->firstName = $map['FirstName'];
        }
        if (isset($map['LastName'])) {
            $model->lastName = $map['LastName'];
        }
        if (isset($map['ProvisionType'])) {
            $model->provisionType = $map['ProvisionType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
