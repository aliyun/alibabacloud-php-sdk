<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\GetSecretValueResponseBody\versionStages;
use AlibabaCloud\Tea\Model;

class GetSecretValueResponseBody extends Model
{
    /**
     * @description Indicates whether automatic rotation is enabled. Valid values:
     *
     *   Enabled: indicates that automatic rotation is enabled.
     *   Disabled: indicates that automatic rotation is disabled.
     *   Invalid: indicates that the status of automatic rotation is abnormal. In this case, Secrets Manager cannot automatically rotate the secret.
     *
     * >  This parameter is returned only for a managed ApsaraDB RDS secret, a managed RAM secret, or a managed ECS secret.
     * @example Enabled
     *
     * @var string
     */
    public $automaticRotation;

    /**
     * @description The time when the secret was created.
     *
     * @example 2020-02-21T15:39:26Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The extended configuration of the secret.
     *
     * >  This parameter is returned if you set the FetchExtendedConfig parameter to true. This parameter is returned only for a managed ApsaraDB RDS secret, a managed RAM secret, or a managed ECS secret.
     * @example {\\"SecretSubType\\":\\"SingleUser\\", \\"DBInstanceId\\":\\"rm-uf667446pc955****\\",  \\"CustomData\\":{} }
     *
     * @var string
     */
    public $extendedConfig;

    /**
     * @description The time when the last rotation was performed.
     *
     * >  This parameter is returned if the secret was rotated.
     * @example 2020-07-05T08:22:03Z
     *
     * @var string
     */
    public $lastRotationDate;

    /**
     * @description The time when the next rotation will be performed.
     *
     * >  This parameter is returned if automatic rotation is enabled.
     * @example 2020-07-06T18:22:03Z
     *
     * @var string
     */
    public $nextRotationDate;

    /**
     * @description The ID of the request.
     *
     * @example 6a3e9c36-1150-4881-84d3-eb8672fcafad
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The interval for automatic rotation.
     *
     * >  This parameter is returned if automatic rotation is enabled.
     * @example 604800s
     *
     * @var string
     */
    public $rotationInterval;

    /**
     * @description The secret value. Secrets Manager decrypts the ciphertext of the secret value and returns the plaintext of the secret value in this parameter.
     *
     *   For a generic secret, the secret value of the specified version is returned.
     *
     *   For a managed ApsaraDB RDS secret, the value is returned in the following format:`{"AccountName":"","AccountPassword":""}` .
     *
     *   For a managed RAM secret, the secret value is returned in the following format: `{"AccessKeyId":"Adfdsfd","AccessKeySecret":"fdsfdsf","GenerateTimestamp": "2016-03-25T10:42:40Z"}`.
     *
     *   For a managed ECS secret, the secret value is returned in one of the following formats:
     *
     *   `{"UserName":"root","Password":"H5asdasdsads****"}`: The secret value is returned in this format if the ECS secret is a password.
     *   `{"UserName":"root","PublicKey":"ssh-rsa ****mKwnVix9YTFY9Rs= imported-openssh-key","PrivateKey": "d6bee1cb-2e14-4277-ba6b-73786b21****"}`: The secret value is returned in this format is the ECS secret is a pair of SSH keys. The private key is in the Privacy Enhanced Mail (PEM) format.
     *
     * @example testdata1
     *
     * @var string
     */
    public $secretData;

    /**
     * @description The type of the secret value. Valid values:
     *
     *   text
     *   binary
     *
     * @example binary
     *
     * @var string
     */
    public $secretDataType;

    /**
     * @description The name of the secret.
     *
     * @example secret001
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The type of the secret. Valid values:
     *
     *   Generic: indicates a generic secret.
     *   Rds: indicates a managed ApsaraDB RDS secret.
     *   RAMCredentials: indicates a managed RAM secret.
     *   ECS: indicates a managed ECS secret.
     *
     * @example Generic
     *
     * @var string
     */
    public $secretType;

    /**
     * @description The version number of the secret value.
     *
     * @example 00000000000000000000000000000001
     *
     * @var string
     */
    public $versionId;

    /**
     * @description The stage labels that mark the secret versions.
     *
     * @var versionStages
     */
    public $versionStages;
    protected $_name = [
        'automaticRotation' => 'AutomaticRotation',
        'createTime'        => 'CreateTime',
        'extendedConfig'    => 'ExtendedConfig',
        'lastRotationDate'  => 'LastRotationDate',
        'nextRotationDate'  => 'NextRotationDate',
        'requestId'         => 'RequestId',
        'rotationInterval'  => 'RotationInterval',
        'secretData'        => 'SecretData',
        'secretDataType'    => 'SecretDataType',
        'secretName'        => 'SecretName',
        'secretType'        => 'SecretType',
        'versionId'         => 'VersionId',
        'versionStages'     => 'VersionStages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->automaticRotation) {
            $res['AutomaticRotation'] = $this->automaticRotation;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->versionStages) {
            $res['VersionStages'] = null !== $this->versionStages ? $this->versionStages->toMap() : null;
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
        if (isset($map['AutomaticRotation'])) {
            $model->automaticRotation = $map['AutomaticRotation'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['VersionStages'])) {
            $model->versionStages = versionStages::fromMap($map['VersionStages']);
        }

        return $model;
    }
}
