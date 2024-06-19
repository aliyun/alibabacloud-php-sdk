<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceAttributeRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The new name of the instance. The name must be 2 to 80 characters in length. The name must start with a letter and cannot contain spaces and the following special characters: `@ / : = " < > { [ ] }`
     *
     * @example newinstancename
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description [The release protection state of the instance.](https://help.aliyun.com/document_detail/165005.html) Valid values:
     *
     *   **true**: enabled
     *   **false**: disabled
     *
     * > This parameter is available only for pay-as-you-go instances.
     * @example true
     *
     * @var bool
     */
    public $instanceReleaseProtection;

    /**
     * @description The new password for the default account. The default account is named after the instance ID. Example: r-bp10noxlhcoim2\\*\\*\\*\\*.
     *
     * > The password must be 8 to 32 characters in length and contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. These special characters include `! @ # $ % ^ & * ( ) _ + - =`
     * @example uW8+nsrp
     *
     * @var string
     */
    public $newPassword;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'instanceId'                => 'InstanceId',
        'instanceName'              => 'InstanceName',
        'instanceReleaseProtection' => 'InstanceReleaseProtection',
        'newPassword'               => 'NewPassword',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'securityToken'             => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceReleaseProtection) {
            $res['InstanceReleaseProtection'] = $this->instanceReleaseProtection;
        }
        if (null !== $this->newPassword) {
            $res['NewPassword'] = $this->newPassword;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceReleaseProtection'])) {
            $model->instanceReleaseProtection = $map['InstanceReleaseProtection'];
        }
        if (isset($map['NewPassword'])) {
            $model->newPassword = $map['NewPassword'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
