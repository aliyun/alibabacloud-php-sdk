<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class CreateSecretRequest extends Model
{
    /**
     * @var string
     */
    public $DKMSInstanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableAutomaticRotation;

    /**
     * @var string
     */
    public $encryptionKeyId;

    /**
     * @var mixed[]
     */
    public $extendedConfig;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $rotationInterval;

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
    public $secretName;

    /**
     * @var string
     */
    public $secretType;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'DKMSInstanceId' => 'DKMSInstanceId',
        'description' => 'Description',
        'enableAutomaticRotation' => 'EnableAutomaticRotation',
        'encryptionKeyId' => 'EncryptionKeyId',
        'extendedConfig' => 'ExtendedConfig',
        'policy' => 'Policy',
        'rotationInterval' => 'RotationInterval',
        'secretData' => 'SecretData',
        'secretDataType' => 'SecretDataType',
        'secretName' => 'SecretName',
        'secretType' => 'SecretType',
        'tags' => 'Tags',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        if (\is_array($this->extendedConfig)) {
            Model::validateArray($this->extendedConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DKMSInstanceId) {
            $res['DKMSInstanceId'] = $this->DKMSInstanceId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableAutomaticRotation) {
            $res['EnableAutomaticRotation'] = $this->enableAutomaticRotation;
        }

        if (null !== $this->encryptionKeyId) {
            $res['EncryptionKeyId'] = $this->encryptionKeyId;
        }

        if (null !== $this->extendedConfig) {
            if (\is_array($this->extendedConfig)) {
                $res['ExtendedConfig'] = [];
                foreach ($this->extendedConfig as $key1 => $value1) {
                    $res['ExtendedConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }

        if (null !== $this->secretData) {
            $res['SecretData'] = $this->secretData;
        }

        if (null !== $this->secretDataType) {
            $res['SecretDataType'] = $this->secretDataType;
        }

        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        if (null !== $this->secretType) {
            $res['SecretType'] = $this->secretType;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['DKMSInstanceId'])) {
            $model->DKMSInstanceId = $map['DKMSInstanceId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableAutomaticRotation'])) {
            $model->enableAutomaticRotation = $map['EnableAutomaticRotation'];
        }

        if (isset($map['EncryptionKeyId'])) {
            $model->encryptionKeyId = $map['EncryptionKeyId'];
        }

        if (isset($map['ExtendedConfig'])) {
            if (!empty($map['ExtendedConfig'])) {
                $model->extendedConfig = [];
                foreach ($map['ExtendedConfig'] as $key1 => $value1) {
                    $model->extendedConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }

        if (isset($map['SecretData'])) {
            $model->secretData = $map['SecretData'];
        }

        if (isset($map['SecretDataType'])) {
            $model->secretDataType = $map['SecretDataType'];
        }

        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        if (isset($map['SecretType'])) {
            $model->secretType = $map['SecretType'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
