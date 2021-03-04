<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\GetSecretValueResponseBody\versionStages;
use AlibabaCloud\Tea\Model;

class GetSecretValueResponseBody extends Model
{
    /**
     * @var string
     */
    public $versionId;

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
    public $secretDataType;

    /**
     * @var versionStages
     */
    public $versionStages;

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
    public $extendedConfig;

    /**
     * @var string
     */
    public $secretData;
    protected $_name = [
        'versionId'         => 'VersionId',
        'rotationInterval'  => 'RotationInterval',
        'lastRotationDate'  => 'LastRotationDate',
        'requestId'         => 'RequestId',
        'secretType'        => 'SecretType',
        'createTime'        => 'CreateTime',
        'secretDataType'    => 'SecretDataType',
        'versionStages'     => 'VersionStages',
        'automaticRotation' => 'AutomaticRotation',
        'secretName'        => 'SecretName',
        'nextRotationDate'  => 'NextRotationDate',
        'extendedConfig'    => 'ExtendedConfig',
        'secretData'        => 'SecretData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (null !== $this->secretDataType) {
            $res['SecretDataType'] = $this->secretDataType;
        }
        if (null !== $this->versionStages) {
            $res['VersionStages'] = null !== $this->versionStages ? $this->versionStages->toMap() : null;
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
        if (null !== $this->extendedConfig) {
            $res['ExtendedConfig'] = $this->extendedConfig;
        }
        if (null !== $this->secretData) {
            $res['SecretData'] = $this->secretData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecretValueResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
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
        if (isset($map['SecretDataType'])) {
            $model->secretDataType = $map['SecretDataType'];
        }
        if (isset($map['VersionStages'])) {
            $model->versionStages = versionStages::fromMap($map['VersionStages']);
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
        if (isset($map['ExtendedConfig'])) {
            $model->extendedConfig = $map['ExtendedConfig'];
        }
        if (isset($map['SecretData'])) {
            $model->secretData = $map['SecretData'];
        }

        return $model;
    }
}
