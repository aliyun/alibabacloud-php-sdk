<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

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
    public $newUserName;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'newComments'    => 'NewComments',
        'newDisplayName' => 'NewDisplayName',
        'newEmail'       => 'NewEmail',
        'newMobilePhone' => 'NewMobilePhone',
        'newUserName'    => 'NewUserName',
        'userName'       => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->newUserName) {
            $res['NewUserName'] = $this->newUserName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['NewUserName'])) {
            $model->newUserName = $map['NewUserName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
