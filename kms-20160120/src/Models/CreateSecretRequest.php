<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateSecretRequest extends Model
{
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
     * @example mydbinfo
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable automatic rotation. Valid values:
     *
     *   true: specifies to enable automatic rotation.
     *   false: specifies to disable automatic rotation. This is the default value.
     *
     * >  This parameter is valid if you set the SecretType parameter to Rds, RAMCredentials, or ECS.
     * @example true
     *
     * @var bool
     */
    public $enableAutomaticRotation;

    /**
     * @description The ID of the CMK that is used to encrypt the secret value.
     *
     * >  The CMK must be a symmetric CMK.
     * @example 00aa68af-2c02-4f68-95fe-3435d330****
     *
     * @var string
     */
    public $encryptionKeyId;

    /**
     * @description The extended configuration of the secret. This parameter specifies the properties of the secret of the specific type. The description can be up to 1,024 characters in length.
     *
     *   If you set the SecretType parameter to Generic, you do not need to configure this parameter.
     *
     *   If you set the SecretType parameter to Rds, configure the following fields for the ExtendedConfig parameter:
     *
     *   SecretSubType: required. The subtype of the secret. Valid values:
     *
     *   SingleUser: Secrets Manager manages the ApsaraDB RDS secret in single-account mode. When the secret is rotated, the password of the specified account is reset to a new random password.
     *   DoubleUsers: Secrets Manager manages the ApsaraDB RDS secret in dual-account mode. One account is referenced by the ACSCurrent version, and the other account is referenced by the ACSPrevious version. When the secret is rotated, the password of the account referenced by the ACSPrevious version is reset to a new random password. Then, Secrets Manager switches the referenced accounts between the ACSCurrent and ACSPrevious versions.
     *
     *   DBInstanceId: required. The ApsaraDB RDS instance to which the ApsaraDB RDS account belongs.
     *
     *   CustomData: optional. The custom data. The value is a collection of key-value pairs in the JSON format. Up to 10 key-value pairs can be specified. Separate multiple key-value pairs with commas (,). Example: `{"Key1": "v1", "fds":"fdsf"}`. The default value is a pair of empty braces (`{}`).
     *
     *   If you set the SecretType parameter to RAMCredentials, configure the following fields for the ExtendedConfig parameter:
     *
     *   SecretSubType: required. The subtype of the secret. Set the value to RamUserAccessKey.
     *   UserName: required. The name of the RAM user.
     *   CustomData: optional. The custom data. The value is a collection of key-value pairs in the JSON format. Up to 10 key-value pairs can be specified. Separate multiple key-value pairs with commas (,). The default value is a pair of empty braces (`{}`).
     *
     *   If you set the SecretType parameter to ECS, configure the following fields for the ExtendedConfig parameter:
     *
     *   SecretSubType: required. The subtype of the secret. Valid values:
     *
     *   Password: the password that is used to log on to the ECS instance.
     *   SSHKey: the SSH public key and private key that are used to log on to the ECS instance.
     *
     *   RegionId: required. The ID of the region in which the ECS instance resides.
     *
     *   InstanceId: required. The ID of the ECS instance.
     *
     *   CustomData: optional. The custom data. The value is a collection of key-value pairs in the JSON format. Up to 10 key-value pairs can be specified. Separate multiple key-value pairs with commas (,). The default value is a pair of empty braces (`{}`).
     *
     * >  This parameter is required if you set the SecretType parameter to Rds, RAMCredentials, or ECS.
     * @example {"SecretSubType":"SingleUser", "DBInstanceId":"rm-bp1b3dd3a506e****" ,"CustomData":{}}
     *
     * @var mixed[]
     */
    public $extendedConfig;

    /**
     * @description The interval for automatic rotation. Valid values: 6 hours to 8,760 hours (365 days).
     *
     * >  This parameter is required if you set the EnableAutomaticRotation parameter to true. This parameter is ignored if you set the EnableAutomaticRotation parameter to false or if the EnableAutomaticRotation parameter is not configured.
     * @example 30d
     *
     * @var string
     */
    public $rotationInterval;

    /**
     * @description The value of the secret that you want to create. Secrets Manager encrypts the secret value and stores the encrypted value in the initial version.
     *
     *   If you set the SecretType parameter to Generic that indicates a generic secret, you can customize the secret value.
     *
     *   If you set the SecretType parameter to Rds that indicates a managed ApsaraDB RDS secret, the secret value must be in the format of `{"Accounts":[{"AccountName":"","AccountPassword":""}]}`. In the preceding format, `AccountName` indicates the username of the account that is used to connect to your ApsaraDB RDS instance, and `AccountPassword` specifies the password of the account.
     *
     *   If you set the SecretType parameter to RAMCredentials that indicates a managed RAM secret, the secret value must be in the format of `{"AccessKeys":[{"AccessKeyId":"","AccessKeySecret":"",}]}`. In the preceding format, `AccessKeyId` indicates the AccessKey ID of the RAM user and `AccessKeySecret` specifies the AccessKey secret of the RAM user. You must specify all the AccessKey pairs of the RAM user.
     *
     *   If you set the SecretType parameter to ECS that indicates a managed ECS secret, the secret value must be in one of the following formats:
     *
     *   `{"UserName":"","Password": ""}`: In the format, `UserName` specifies the username that is used to log on to the ECS instance, and `Password` specifies the password that is used to log on to the ECS instance.
     *   `{"UserName":"","PublicKey": "", "PrivateKey": ""}`: In the format, `PublicKey` indicates the SSH public key that is used to log on to the ECS instance, and `PrivateKey` specifies the SSH private key that is used to log on to the ECS instance.
     *
     * @example {"user":"root","passwd":"****"}
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
     * >  If you set the SecretType parameter to Rds, RAMCredentials, or ECS, the SecretDataType parameter must be set to text.
     * @example text
     *
     * @var string
     */
    public $secretDataType;

    /**
     * @description The name of the secret.
     *
     * The value must be 1 to 64 characters in length and can contain letters, digits, underscores (\_), forward slashes (/), plus signs (+), equal signs (=), periods (.), hyphens (-), and at signs (@). The following list describes the name requirements for different types of secrets:
     *
     *   If the SecretType parameter is set to Generic or Rds, the name cannot start with `acs/`.
     *   If the SecretType parameter is set to RAMCredentials, set the SecretName parameter to `$Auto`. In this case, KMS automatically generates a secret name that starts with `acs/ram/user/`. The name includes the display name of RAM user.
     *   If the SecretType parameter is set to ECS, the name must start with `acs/ecs/`.
     *
     * @example mydbconninfo
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The type of the secret. Valid values:
     *
     *   Generic: specifies a generic secret.
     *   Rds: specifies a managed ApsaraDB RDS secret.
     *   RAMCredentials: specifies a managed RAM secret.
     *   ECS: specifies a managed ECS secret.
     *
     * @example Rds
     *
     * @var string
     */
    public $secretType;

    /**
     * @description The tags of the secret.
     *
     * @example [{\"TagKey\":\"key1\",\"TagValue\":\"val1\"},{\"TagKey\":\"key2\",\"TagValue\":\"val2\"}]
     *
     * @var string
     */
    public $tags;

    /**
     * @description The initial version number. Version numbers are unique in each secret.
     *
     * @example v1
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'DKMSInstanceId'          => 'DKMSInstanceId',
        'description'             => 'Description',
        'enableAutomaticRotation' => 'EnableAutomaticRotation',
        'encryptionKeyId'         => 'EncryptionKeyId',
        'extendedConfig'          => 'ExtendedConfig',
        'rotationInterval'        => 'RotationInterval',
        'secretData'              => 'SecretData',
        'secretDataType'          => 'SecretDataType',
        'secretName'              => 'SecretName',
        'secretType'              => 'SecretType',
        'tags'                    => 'Tags',
        'versionId'               => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ExtendedConfig'] = $this->extendedConfig;
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

    /**
     * @param array $map
     *
     * @return CreateSecretRequest
     */
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
            $model->extendedConfig = $map['ExtendedConfig'];
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
