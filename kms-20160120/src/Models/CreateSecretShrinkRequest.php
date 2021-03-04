<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateSecretShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $encryptionKeyId;

    /**
     * @var string
     */
    public $secretData;

    /**
     * @var string
     */
    public $secretDataType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $secretType;

    /**
     * @var string
     */
    public $extendedConfigShrink;

    /**
     * @var bool
     */
    public $enableAutomaticRotation;

    /**
     * @var string
     */
    public $rotationInterval;
    protected $_name = [
        'secretName'              => 'SecretName',
        'versionId'               => 'VersionId',
        'encryptionKeyId'         => 'EncryptionKeyId',
        'secretData'              => 'SecretData',
        'secretDataType'          => 'SecretDataType',
        'description'             => 'Description',
        'tags'                    => 'Tags',
        'secretType'              => 'SecretType',
        'extendedConfigShrink'    => 'ExtendedConfig',
        'enableAutomaticRotation' => 'EnableAutomaticRotation',
        'rotationInterval'        => 'RotationInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->encryptionKeyId) {
            $res['EncryptionKeyId'] = $this->encryptionKeyId;
        }
        if (null !== $this->secretData) {
            $res['SecretData'] = $this->secretData;
        }
        if (null !== $this->secretDataType) {
            $res['SecretDataType'] = $this->secretDataType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->secretType) {
            $res['SecretType'] = $this->secretType;
        }
        if (null !== $this->extendedConfigShrink) {
            $res['ExtendedConfig'] = $this->extendedConfigShrink;
        }
        if (null !== $this->enableAutomaticRotation) {
            $res['EnableAutomaticRotation'] = $this->enableAutomaticRotation;
        }
        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSecretShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['EncryptionKeyId'])) {
            $model->encryptionKeyId = $map['EncryptionKeyId'];
        }
        if (isset($map['SecretData'])) {
            $model->secretData = $map['SecretData'];
        }
        if (isset($map['SecretDataType'])) {
            $model->secretDataType = $map['SecretDataType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['SecretType'])) {
            $model->secretType = $map['SecretType'];
        }
        if (isset($map['ExtendedConfig'])) {
            $model->extendedConfigShrink = $map['ExtendedConfig'];
        }
        if (isset($map['EnableAutomaticRotation'])) {
            $model->enableAutomaticRotation = $map['EnableAutomaticRotation'];
        }
        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }

        return $model;
    }
}
