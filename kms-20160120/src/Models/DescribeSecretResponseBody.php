<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeSecretResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeSecretResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $rotationInterval;

    /**
     * @var string
     */
    public $lastRotationDate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $secretType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $automaticRotation;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $nextRotationDate;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $extendedConfig;

    /**
     * @var string
     */
    public $plannedDeleteTime;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $encryptionKeyId;
    protected $_name = [
        'description'       => 'Description',
        'rotationInterval'  => 'RotationInterval',
        'lastRotationDate'  => 'LastRotationDate',
        'requestId'         => 'RequestId',
        'secretType'        => 'SecretType',
        'createTime'        => 'CreateTime',
        'automaticRotation' => 'AutomaticRotation',
        'secretName'        => 'SecretName',
        'nextRotationDate'  => 'NextRotationDate',
        'updateTime'        => 'UpdateTime',
        'extendedConfig'    => 'ExtendedConfig',
        'plannedDeleteTime' => 'PlannedDeleteTime',
        'arn'               => 'Arn',
        'tags'              => 'Tags',
        'encryptionKeyId'   => 'EncryptionKeyId',
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
        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }
        if (null !== $this->lastRotationDate) {
            $res['LastRotationDate'] = $this->lastRotationDate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secretType) {
            $res['SecretType'] = $this->secretType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->automaticRotation) {
            $res['AutomaticRotation'] = $this->automaticRotation;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->nextRotationDate) {
            $res['NextRotationDate'] = $this->nextRotationDate;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->extendedConfig) {
            $res['ExtendedConfig'] = $this->extendedConfig;
        }
        if (null !== $this->plannedDeleteTime) {
            $res['PlannedDeleteTime'] = $this->plannedDeleteTime;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->encryptionKeyId) {
            $res['EncryptionKeyId'] = $this->encryptionKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecretResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }
        if (isset($map['LastRotationDate'])) {
            $model->lastRotationDate = $map['LastRotationDate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretType'])) {
            $model->secretType = $map['SecretType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AutomaticRotation'])) {
            $model->automaticRotation = $map['AutomaticRotation'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['NextRotationDate'])) {
            $model->nextRotationDate = $map['NextRotationDate'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ExtendedConfig'])) {
            $model->extendedConfig = $map['ExtendedConfig'];
        }
        if (isset($map['PlannedDeleteTime'])) {
            $model->plannedDeleteTime = $map['PlannedDeleteTime'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['EncryptionKeyId'])) {
            $model->encryptionKeyId = $map['EncryptionKeyId'];
        }

        return $model;
    }
}
