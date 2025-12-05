<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeSecretResponseBody\tags;

class DescribeSecretResponseBody extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $automaticRotation;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $DKMSInstanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encryptionKeyId;

    /**
     * @var string
     */
    public $extendedConfig;

    /**
     * @var string
     */
    public $lastRotationDate;

    /**
     * @var string
     */
    public $nextRotationDate;

    /**
     * @var string
     */
    public $owingService;

    /**
     * @var string
     */
    public $plannedDeleteTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rotationInterval;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $secretType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'arn' => 'Arn',
        'automaticRotation' => 'AutomaticRotation',
        'createTime' => 'CreateTime',
        'DKMSInstanceId' => 'DKMSInstanceId',
        'description' => 'Description',
        'encryptionKeyId' => 'EncryptionKeyId',
        'extendedConfig' => 'ExtendedConfig',
        'lastRotationDate' => 'LastRotationDate',
        'nextRotationDate' => 'NextRotationDate',
        'owingService' => 'OwingService',
        'plannedDeleteTime' => 'PlannedDeleteTime',
        'requestId' => 'RequestId',
        'rotationInterval' => 'RotationInterval',
        'secretName' => 'SecretName',
        'secretType' => 'SecretType',
        'tags' => 'Tags',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->automaticRotation) {
            $res['AutomaticRotation'] = $this->automaticRotation;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DKMSInstanceId) {
            $res['DKMSInstanceId'] = $this->DKMSInstanceId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encryptionKeyId) {
            $res['EncryptionKeyId'] = $this->encryptionKeyId;
        }

        if (null !== $this->extendedConfig) {
            $res['ExtendedConfig'] = $this->extendedConfig;
        }

        if (null !== $this->lastRotationDate) {
            $res['LastRotationDate'] = $this->lastRotationDate;
        }

        if (null !== $this->nextRotationDate) {
            $res['NextRotationDate'] = $this->nextRotationDate;
        }

        if (null !== $this->owingService) {
            $res['OwingService'] = $this->owingService;
        }

        if (null !== $this->plannedDeleteTime) {
            $res['PlannedDeleteTime'] = $this->plannedDeleteTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }

        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        if (null !== $this->secretType) {
            $res['SecretType'] = $this->secretType;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['AutomaticRotation'])) {
            $model->automaticRotation = $map['AutomaticRotation'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DKMSInstanceId'])) {
            $model->DKMSInstanceId = $map['DKMSInstanceId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EncryptionKeyId'])) {
            $model->encryptionKeyId = $map['EncryptionKeyId'];
        }

        if (isset($map['ExtendedConfig'])) {
            $model->extendedConfig = $map['ExtendedConfig'];
        }

        if (isset($map['LastRotationDate'])) {
            $model->lastRotationDate = $map['LastRotationDate'];
        }

        if (isset($map['NextRotationDate'])) {
            $model->nextRotationDate = $map['NextRotationDate'];
        }

        if (isset($map['OwingService'])) {
            $model->owingService = $map['OwingService'];
        }

        if (isset($map['PlannedDeleteTime'])) {
            $model->plannedDeleteTime = $map['PlannedDeleteTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }

        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        if (isset($map['SecretType'])) {
            $model->secretType = $map['SecretType'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
