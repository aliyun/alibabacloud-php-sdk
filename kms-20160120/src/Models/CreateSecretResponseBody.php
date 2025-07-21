<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateSecretResponseBody extends Model
{
    /**
     * @example acs:kms:cn-hangzhou:154035569884****:secret/mydbconninfo
     *
     * @var string
     */
    public $arn;

    /**
     * @description The type of the secret. Valid values:
     *
     *   Generic: indicates a generic secret.
     *   Rds: indicates a managed ApsaraDB RDS secret.
     *   RAMCredentials: indicates a managed RAM secret.
     *   ECS: indicates a managed ECS secret.
     *
     * @example Enabled
     *
     * @var string
     */
    public $automaticRotation;

    /**
     * @example kst-bjj62d8f5e0sgtx8h****
     *
     * @var string
     */
    public $DKMSInstanceId;

    /**
     * @example {\\"SecretSubType\\":\\"SingleUser\\", \\"DBInstanceId\\":\\"rm-uf667446pc955****\\",  \\"CustomData\\":{} }
     *
     * @var string
     */
    public $extendedConfig;

    /**
     * @description The extended configuration of the secret.
     *
     * >  This parameter is returned if you set the SecretType parameter to Rds, RAMCredentials, or ECS.
     *
     * @example 2022-07-06T18:22:03Z
     *
     * @var string
     */
    public $nextRotationDate;

    /**
     * @description The time when the next rotation will be performed.
     *
     * >  This parameter is returned if automatic rotation is enabled.
     *
     * @example 3bf02f7a-015b-4f93-be0f-cc043fda2dd3
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 604800s
     *
     * @var string
     */
    public $rotationInterval;

    /**
     * @description The interval for automatic rotation.
     *
     * The value is in the `integer[unit]` format. The value of the `unit` field is fixed as s. For example, if the value is 604800s, automatic rotation is performed at a 7-day interval.
     *
     * >  This parameter is returned if automatic rotation is enabled.
     *
     * @example mydbconninfo
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The ID of the dedicated KMS instance.
     *
     * @example Rds
     *
     * @var string
     */
    public $secretType;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the secret.
     *
     * @example v1
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateSecretResponseBody
     */
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
