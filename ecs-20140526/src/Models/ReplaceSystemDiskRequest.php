<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ReplaceSystemDiskRequest\arn;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReplaceSystemDiskRequest\systemDisk;
use AlibabaCloud\Tea\Model;

class ReplaceSystemDiskRequest extends Model
{
    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description The operating system architecture. Valid values:
     *
     *   i386
     *   x86\_64
     *
     * @example i386
     *
     * @var string
     */
    public $architecture;

    /**
     * @description This parameter is unavailable.
     *
     * @var arn[]
     */
    public $arn;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests. The **ClientToken** value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the disk to be used to replace the operating system.
     *
     * > This feature is in invitational preview. To use this feature, [submit a ticket](https://selfservice.console.aliyun.com/ticket/createIndex).
     * @example d-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description > This parameter is unavailable.
     *
     * @example hide
     *
     * @var string
     */
    public $encryptAlgorithm;

    /**
     * @description Specifies whether to encrypt the disk. Valid values:
     *
     *   true: encrypts the disk.
     *   false: does not encrypt the disk.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The ID of the image to be used to replace the system disk.
     *
     * If the `DiskId` parameter is not specified, this parameter is required.
     * @example m-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the Key Management Service (KMS) key to use for the system disk.
     *
     * @example e522b26d-abf6-4e0d-b5da-04b7******3c
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The name of the key pair.
     *
     * > This parameter is applicable only to Linux instances. You can bind an SSH key pair to the instance as a logon credential. After the key pair is bound, the username and password logon method is disabled for the instance.
     * @example testKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to reset the password for the instance. The password must be 8 to 30 characters in length and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. Special characters include:
     *
     * ( ) ` ~ ! @ # $ % ^ & * - _ + = | { } [ ] : ; \" < > , . ? /
     *
     * > If the `Password` parameter is specified, we recommend that you send requests over HTTPS to prevent password leaks.
     * @example EcsV587!
     *
     * @var string
     */
    public $password;

    /**
     * @description Specifies whether to use the preset password of the image.
     *
     * > If the PasswordInherit parameter is specified, you must leave the Password parameter empty. Before you use this parameter, make sure that a password is preset for the image.
     * @example false
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @description The operating system distribution. Valid values:
     *
     *   CentOS
     *   Ubuntu
     *
     * @example CentOS
     *
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to use Security Center Basic after the system disk is replaced. Valid values:
     *
     *   Active: uses Security Center Basic after the system disk is replaced. This value is applicable only to public images.
     *   Deactive: does not use Security Center Basic after the system disk is replaced. This value is applicable to all images.
     *
     * Default value: Deactive.
     * @example Active
     *
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @description Specifies whether to use the system configurations for virtual machines provided by Alibaba Cloud (Windows: NTP and KMS. Linux: NTP and YUM).
     *
     * > This parameter takes effect only when you attach a system disk whose device name is /dev/xvda.
     * @example true
     *
     * @var bool
     */
    public $useAdditionalService;
    protected $_name = [
        'systemDisk'                  => 'SystemDisk',
        'architecture'                => 'Architecture',
        'arn'                         => 'Arn',
        'clientToken'                 => 'ClientToken',
        'diskId'                      => 'DiskId',
        'encryptAlgorithm'            => 'EncryptAlgorithm',
        'encrypted'                   => 'Encrypted',
        'imageId'                     => 'ImageId',
        'instanceId'                  => 'InstanceId',
        'KMSKeyId'                    => 'KMSKeyId',
        'keyPairName'                 => 'KeyPairName',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'password'                    => 'Password',
        'passwordInherit'             => 'PasswordInherit',
        'platform'                    => 'Platform',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'useAdditionalService'        => 'UseAdditionalService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->arn) {
            $res['Arn'] = [];
            if (null !== $this->arn && \is_array($this->arn)) {
                $n = 0;
                foreach ($this->arn as $item) {
                    $res['Arn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->encryptAlgorithm) {
            $res['EncryptAlgorithm'] = $this->encryptAlgorithm;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }
        if (null !== $this->useAdditionalService) {
            $res['UseAdditionalService'] = $this->useAdditionalService;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceSystemDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['Arn'])) {
            if (!empty($map['Arn'])) {
                $model->arn = [];
                $n          = 0;
                foreach ($map['Arn'] as $item) {
                    $model->arn[$n++] = null !== $item ? arn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['EncryptAlgorithm'])) {
            $model->encryptAlgorithm = $map['EncryptAlgorithm'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }
        if (isset($map['UseAdditionalService'])) {
            $model->useAdditionalService = $map['UseAdditionalService'];
        }

        return $model;
    }
}
