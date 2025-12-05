<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class CreateSecretResponseBody extends Model
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
    public $DKMSInstanceId;

    /**
     * @var string
     */
    public $extendedConfig;

    /**
     * @var string
     */
    public $nextRotationDate;

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
     * @var string
     */
    public $versionId;
    protected $_name = [
        'arn' => 'Arn',
        'automaticRotation' => 'AutomaticRotation',
        'DKMSInstanceId' => 'DKMSInstanceId',
        'extendedConfig' => 'ExtendedConfig',
        'nextRotationDate' => 'NextRotationDate',
        'requestId' => 'RequestId',
        'rotationInterval' => 'RotationInterval',
        'secretName' => 'SecretName',
        'secretType' => 'SecretType',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
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

        if (null !== $this->DKMSInstanceId) {
            $res['DKMSInstanceId'] = $this->DKMSInstanceId;
        }

        if (null !== $this->extendedConfig) {
            $res['ExtendedConfig'] = $this->extendedConfig;
        }

        if (null !== $this->nextRotationDate) {
            $res['NextRotationDate'] = $this->nextRotationDate;
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['AutomaticRotation'])) {
            $model->automaticRotation = $map['AutomaticRotation'];
        }

        if (isset($map['DKMSInstanceId'])) {
            $model->DKMSInstanceId = $map['DKMSInstanceId'];
        }

        if (isset($map['ExtendedConfig'])) {
            $model->extendedConfig = $map['ExtendedConfig'];
        }

        if (isset($map['NextRotationDate'])) {
            $model->nextRotationDate = $map['NextRotationDate'];
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

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
