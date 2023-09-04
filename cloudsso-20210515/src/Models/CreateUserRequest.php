<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @description The description of the user.
     *
     * The description can be up to 1,024 characters in length.
     * @example This is a user.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The display name of the user.
     *
     * The name can be up to 256 characters in length.
     * @example Alice
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The email address of the user. The email address must be unique within the directory.
     *
     * The email address can be up to 128 characters in length.
     * @example Alice@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The first name of the user.
     *
     * The name can be up to 64 characters in length.
     * @example Alice
     *
     * @var string
     */
    public $firstName;

    /**
     * @description The last name of the user.
     *
     * The name can be up to 64 characters in length.
     * @example Lee
     *
     * @var string
     */
    public $lastName;

    /**
     * @description The status of the user. Valid values:
     *
     *   Enabled: The logon of the user is enabled. This is the default value.
     *   Disabled: The logon of the user is disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the user. The name must be unique within the directory. The name cannot be changed.
     *
     * The name can be up to 64 characters in length.
     * @example Alice
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'description' => 'Description',
        'directoryId' => 'DirectoryId',
        'displayName' => 'DisplayName',
        'email'       => 'Email',
        'firstName'   => 'FirstName',
        'lastName'    => 'LastName',
        'status'      => 'Status',
        'userName'    => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
