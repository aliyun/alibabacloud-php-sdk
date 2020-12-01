<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
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
    public $mobilePhone;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $comments;
    protected $_name = [
        'userPrincipalName' => 'UserPrincipalName',
        'displayName'       => 'DisplayName',
        'mobilePhone'       => 'MobilePhone',
        'email'             => 'Email',
        'comments'          => 'Comments',
    ];

    public function validate()
    {
        Model::validateRequired('userPrincipalName', $this->userPrincipalName, true);
        Model::validateRequired('displayName', $this->displayName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
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
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }

        return $model;
    }
}
