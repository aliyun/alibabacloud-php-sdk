<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ReInitDiskRequest extends Model
{
    /**
     * @description Specifies whether to automatically start the instance after the disk is re-initialized.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $autoStartInstance;

    /**
     * @description The ID of the disk.
     *
     * @example d-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The name of the key pair.
     *
     * > The parameter is applicable only to Linux instances. You can bind an SSH key pair to an instance as the logon credential when you re-initialize the system disk of the instance. After the SSH key pair is bound, the username and password-based logon method is disabled for the instance.
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
     * @description Specifies whether to reset the password of the instance when you re-initialize its system disk. The password must be 8 to 30 characters in length and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. Special characters include:
     *
     * ()`~!@#$%^&*-_+=|{}[]:;\"<>,.?/
     *
     * > If the `Password` parameter is specified, we recommend that you send requests over HTTPS to prevent password leaks.
     * @example EcsV587!
     *
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to use Security Center for free after the system disk is re-initialized. Valid values:
     *
     *   Active: uses Security Center for free after the system disk is re-initialized. This value is applicable only to public images.
     *   Deactive: does not use Security Center for free after the system disk is re-initialized. This value is applicable to all images.
     *
     * Default value: Deactive.
     * @example Active
     *
     * @var string
     */
    public $securityEnhancementStrategy;
    protected $_name = [
        'autoStartInstance'           => 'AutoStartInstance',
        'diskId'                      => 'DiskId',
        'keyPairName'                 => 'KeyPairName',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'password'                    => 'Password',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoStartInstance) {
            $res['AutoStartInstance'] = $this->autoStartInstance;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReInitDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoStartInstance'])) {
            $model->autoStartInstance = $map['AutoStartInstance'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }

        return $model;
    }
}
