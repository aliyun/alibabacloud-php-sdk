<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListOpenSourceAccountsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $aliyunUserId;

    /**
     * @var string
     */
    public $CInstanceId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $extraJson;

    /**
     * @var string
     */
    public $hashingAlgorithm;

    /**
     * @var string
     */
    public $limits;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $passwordHash;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var bool
     */
    public $weakPassword;
    protected $_name = [
        'aliyunUserId' => 'AliyunUserId',
        'CInstanceId' => 'CInstanceId',
        'createTime' => 'CreateTime',
        'extraJson' => 'ExtraJson',
        'hashingAlgorithm' => 'HashingAlgorithm',
        'limits' => 'Limits',
        'name' => 'Name',
        'passwordHash' => 'PasswordHash',
        'tags' => 'Tags',
        'weakPassword' => 'WeakPassword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUserId) {
            $res['AliyunUserId'] = $this->aliyunUserId;
        }

        if (null !== $this->CInstanceId) {
            $res['CInstanceId'] = $this->CInstanceId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->extraJson) {
            $res['ExtraJson'] = $this->extraJson;
        }

        if (null !== $this->hashingAlgorithm) {
            $res['HashingAlgorithm'] = $this->hashingAlgorithm;
        }

        if (null !== $this->limits) {
            $res['Limits'] = $this->limits;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->passwordHash) {
            $res['PasswordHash'] = $this->passwordHash;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->weakPassword) {
            $res['WeakPassword'] = $this->weakPassword;
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
        if (isset($map['AliyunUserId'])) {
            $model->aliyunUserId = $map['AliyunUserId'];
        }

        if (isset($map['CInstanceId'])) {
            $model->CInstanceId = $map['CInstanceId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExtraJson'])) {
            $model->extraJson = $map['ExtraJson'];
        }

        if (isset($map['HashingAlgorithm'])) {
            $model->hashingAlgorithm = $map['HashingAlgorithm'];
        }

        if (isset($map['Limits'])) {
            $model->limits = $map['Limits'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PasswordHash'])) {
            $model->passwordHash = $map['PasswordHash'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['WeakPassword'])) {
            $model->weakPassword = $map['WeakPassword'];
        }

        return $model;
    }
}
