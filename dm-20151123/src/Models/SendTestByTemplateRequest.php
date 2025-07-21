<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class SendTestByTemplateRequest extends Model
{
    /**
     * @description Sender address, with a maximum length of 60 characters
     *
     * This parameter is required.
     *
     * @example test@example.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @description Birthday, with a maximum length of 30 characters
     *
     * @example 2000/01/01
     *
     * @var string
     */
    public $birthday;

    /**
     * @description Recipient address, with a maximum length of 60 characters
     *
     * This parameter is required.
     *
     * @example test1@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Gender, with a maximum length of 30 characters
     *
     * @example doctor
     *
     * @var string
     */
    public $gender;

    /**
     * @description Mobile, with a maximum length of 30 characters
     *
     * @example 1380000****
     *
     * @var string
     */
    public $mobile;

    /**
     * @description NickName, with a maximum length of 30 characters
     *
     * @example LC
     *
     * @var string
     */
    public $nickName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Template ID
     *
     * This parameter is required.
     *
     * @example 123
     *
     * @var int
     */
    public $templateId;

    /**
     * @description UserName, with a maximum length of 30 characters
     *
     * @example Lucy
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'accountName' => 'AccountName',
        'birthday' => 'Birthday',
        'email' => 'Email',
        'gender' => 'Gender',
        'mobile' => 'Mobile',
        'nickName' => 'NickName',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'templateId' => 'TemplateId',
        'userName' => 'UserName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->birthday) {
            $res['Birthday'] = $this->birthday;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendTestByTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Birthday'])) {
            $model->birthday = $map['Birthday'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
