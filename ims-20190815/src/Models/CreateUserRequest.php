<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @var string
     */
    public $comments;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $mobilePhone;

    /**
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'comments'          => 'Comments',
        'displayName'       => 'DisplayName',
        'email'             => 'Email',
        'mobilePhone'       => 'MobilePhone',
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
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
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
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
