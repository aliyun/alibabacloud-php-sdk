<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class SetTLSCipherPolicyAttributeRequest extends Model
{
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
    public $regionId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $TLSCipherPolicyId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $TLSVersions;

    /**
     * @var string[]
     */
    public $ciphers;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'ownerAccount'         => 'OwnerAccount',
        'accessKeyId'          => 'access_key_id',
        'TLSCipherPolicyId'    => 'TLSCipherPolicyId',
        'name'                 => 'Name',
        'TLSVersions'          => 'TLSVersions',
        'ciphers'              => 'Ciphers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->accessKeyId) {
            $res['access_key_id'] = $this->accessKeyId;
        }
        if (null !== $this->TLSCipherPolicyId) {
            $res['TLSCipherPolicyId'] = $this->TLSCipherPolicyId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->TLSVersions) {
            $res['TLSVersions'] = $this->TLSVersions;
        }
        if (null !== $this->ciphers) {
            $res['Ciphers'] = $this->ciphers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetTLSCipherPolicyAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['access_key_id'])) {
            $model->accessKeyId = $map['access_key_id'];
        }
        if (isset($map['TLSCipherPolicyId'])) {
            $model->TLSCipherPolicyId = $map['TLSCipherPolicyId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TLSVersions'])) {
            if (!empty($map['TLSVersions'])) {
                $model->TLSVersions = $map['TLSVersions'];
            }
        }
        if (isset($map['Ciphers'])) {
            if (!empty($map['Ciphers'])) {
                $model->ciphers = $map['Ciphers'];
            }
        }

        return $model;
    }
}
