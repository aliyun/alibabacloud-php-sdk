<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\CreateUserRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @description The description.
     *
     * The description must be 1 to 128 characters in length.
     * @example This is a cloud computing engineer.
     *
     * @var string
     */
    public $comments;

    /**
     * @description The display name of the RAM user.
     *
     * The name must be 1 to 24 characters in length.
     * @example test
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The email address of the RAM user.
     *
     * >  This parameter is valid only on the China site (aliyun.com).
     * @example alice@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The mobile phone number of the RAM user.
     *
     * >  This parameter is valid only on the China site (aliyun.com).
     * @example 86-1868888****
     *
     * @var string
     */
    public $mobilePhone;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description The logon name of the RAM user.
     *
     * The value of `UserPrincipalName` must be 1 to 128 characters in length and can contain letters, digits, periods (.), hyphens (-), and underscores (\_). The value of `<AccountAlias>.onaliyun.com` must be 1 to 64 characters in length.
     * @example test@example.onaliyun.com
     *
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'comments'          => 'Comments',
        'displayName'       => 'DisplayName',
        'email'             => 'Email',
        'mobilePhone'       => 'MobilePhone',
        'tag'               => 'Tag',
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
