<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateSecretResponseBody extends Model
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
    public $nextRotationDate;

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
    public $rotationInterval;

    /**
     * @var string
     */
    public $extendedConfig;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $automaticRotation;
    protected $_name = [
        'secretName'        => 'SecretName',
        'versionId'         => 'VersionId',
        'nextRotationDate'  => 'NextRotationDate',
        'requestId'         => 'RequestId',
        'secretType'        => 'SecretType',
        'rotationInterval'  => 'RotationInterval',
        'extendedConfig'    => 'ExtendedConfig',
        'arn'               => 'Arn',
        'automaticRotation' => 'AutomaticRotation',
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
        if (null !== $this->nextRotationDate) {
            $res['NextRotationDate'] = $this->nextRotationDate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secretType) {
            $res['SecretType'] = $this->secretType;
        }
        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }
        if (null !== $this->extendedConfig) {
            $res['ExtendedConfig'] = $this->extendedConfig;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->automaticRotation) {
            $res['AutomaticRotation'] = $this->automaticRotation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSecretResponseBody
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
        if (isset($map['NextRotationDate'])) {
            $model->nextRotationDate = $map['NextRotationDate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretType'])) {
            $model->secretType = $map['SecretType'];
        }
        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }
        if (isset($map['ExtendedConfig'])) {
            $model->extendedConfig = $map['ExtendedConfig'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['AutomaticRotation'])) {
            $model->automaticRotation = $map['AutomaticRotation'];
        }

        return $model;
    }
}
