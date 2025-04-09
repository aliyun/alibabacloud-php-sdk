<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ListDirectoryUsersResponseBody;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var int
     */
    public $assignedDesktopNumber;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $displayNameNew;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $endUser;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'assignedDesktopNumber' => 'AssignedDesktopNumber',
        'displayName' => 'DisplayName',
        'displayNameNew' => 'DisplayNameNew',
        'email' => 'Email',
        'endUser' => 'EndUser',
        'phone' => 'Phone',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedDesktopNumber) {
            $res['AssignedDesktopNumber'] = $this->assignedDesktopNumber;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->displayNameNew) {
            $res['DisplayNameNew'] = $this->displayNameNew;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->endUser) {
            $res['EndUser'] = $this->endUser;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
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
        if (isset($map['AssignedDesktopNumber'])) {
            $model->assignedDesktopNumber = $map['AssignedDesktopNumber'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['DisplayNameNew'])) {
            $model->displayNameNew = $map['DisplayNameNew'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EndUser'])) {
            $model->endUser = $map['EndUser'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
