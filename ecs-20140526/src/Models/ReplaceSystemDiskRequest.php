<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReplaceSystemDiskRequest\arn;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReplaceSystemDiskRequest\systemDisk;

class ReplaceSystemDiskRequest extends Model
{
    /**
     * @var systemDisk
     */
    public $systemDisk;
    /**
     * @var string
     */
    public $architecture;
    /**
     * @var arn[]
     */
    public $arn;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $diskId;
    /**
     * @var string
     */
    public $encryptAlgorithm;
    /**
     * @var bool
     */
    public $encrypted;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $KMSKeyId;
    /**
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
     * @var string
     */
    public $password;
    /**
     * @var bool
     */
    public $passwordInherit;
    /**
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
     * @var string
     */
    public $securityEnhancementStrategy;
    /**
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
        if (null !== $this->systemDisk) {
            $this->systemDisk->validate();
        }
        if (\is_array($this->arn)) {
            Model::validateArray($this->arn);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toArray($noStream) : $this->systemDisk;
        }

        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->arn) {
            if (\is_array($this->arn)) {
                $res['Arn'] = [];
                $n1         = 0;
                foreach ($this->arn as $item1) {
                    $res['Arn'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1         = 0;
                foreach ($map['Arn'] as $item1) {
                    $model->arn[$n1++] = arn::fromMap($item1);
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
