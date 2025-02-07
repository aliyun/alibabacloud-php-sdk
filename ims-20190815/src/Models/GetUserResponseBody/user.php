<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserResponseBody\user\tags;

class user extends Model
{
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
    public $displayName;
    /**
     * @var string
     */
    public $email;
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
    public $provisionType;
    /**
     * @var tags
     */
    public $tags;
    /**
     * @var string
     */
    public $updateDate;
    /**
     * @var string
     */
    public $userId;
    /**
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
        'tags'              => 'Tags',
        'updateDate'        => 'UpdateDate',
        'userId'            => 'UserId',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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
