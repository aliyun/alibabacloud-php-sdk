<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeSecretResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeSecretResponseBody extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the secret.
     *
     * @example acs:kms:cn-hangzhou:154035569884****:secret/secret001
     *
     * @var string
     */
    public $arn;

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
     * @example 2022-02-21T15:39:26Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the dedicated KMS instance.
     *
     * @example kst-bjj62d8f5e0sgtx8h****
     *
     * @var string
     */
    public $DKMSInstanceId;

    /**
     * @description The description of the secret.
     *
     * @example userinfo
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the customer master key (CMK) that is used to encrypt the secret value.
     *
     * @example 00aa68af-2c02-4f68-95fe-3435d330****
     *
     * @var string
     */
    public $encryptionKeyId;

    /**
     * @description The extended configuration of the secret.
     *
     * >  This parameter is returned only for a managed ApsaraDB RDS secret, a managed Resource Access Management (RAM) secret, or a managed Elastic Compute Service (ECS) secret.
     * @example {\\"SecretSubType\\":\\"SingleUser\\", \\"DBInstanceId\\":\\"rm-uf667446pc955****\\",  \\"CustomData\\":{} }
     *
     * @var string
     */
    public $extendedConfig;

    /**
     * @description The time when the last rotation was performed.
     *
     * >  This parameter is returned if the secret was rotated.
     * @example 2022-07-05T08:22:03Z
     *
     * @var string
     */
    public $lastRotationDate;

    /**
     * @description The time when the next rotation will be performed.
     *
     * >  This parameter is returned when automatic rotation is enabled.
     * @example 2022-07-06T18:22:03Z
     *
     * @var string
     */
    public $nextRotationDate;

    /**
     * @description The time when the secret is scheduled to be deleted.
     *
     * @example 2022-03-21T15:45:12Z
     *
     * @var string
     */
    public $plannedDeleteTime;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 93348dfb-3627-4417-8d90-487a76a909c9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The interval for automatic rotation.
     *
     * >  This parameter is returned when automatic rotation is enabled.
     * @example 3153600s
     *
     * @var string
     */
    public $rotationInterval;

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
     * @example Rds
     *
     * @var string
     */
    public $secretType;

    /**
     * @description The resource tags of the secret.
     *
     * This parameter is not returned if you set the FetchTags parameter to false or you do not specify the FetchTags parameter.
     * @var tags
     */
    public $tags;

    /**
     * @description The time when the secret was updated.
     *
     * @example 2022-02-21T15:39:26Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'arn'               => 'Arn',
        'automaticRotation' => 'AutomaticRotation',
        'createTime'        => 'CreateTime',
        'DKMSInstanceId'    => 'DKMSInstanceId',
        'description'       => 'Description',
        'encryptionKeyId'   => 'EncryptionKeyId',
        'extendedConfig'    => 'ExtendedConfig',
        'lastRotationDate'  => 'LastRotationDate',
        'nextRotationDate'  => 'NextRotationDate',
        'plannedDeleteTime' => 'PlannedDeleteTime',
        'requestId'         => 'RequestId',
        'rotationInterval'  => 'RotationInterval',
        'secretName'        => 'SecretName',
        'secretType'        => 'SecretType',
        'tags'              => 'Tags',
        'updateTime'        => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
