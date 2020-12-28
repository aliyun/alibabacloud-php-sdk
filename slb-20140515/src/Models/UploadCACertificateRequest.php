<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class UploadCACertificateRequest extends Model
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
    public $ownerAccount;

    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $CACertificate;

    /**
     * @var string
     */
    public $CACertificateName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $standardType;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'accessKeyId'          => 'access_key_id',
        'regionId'             => 'RegionId',
        'CACertificate'        => 'CACertificate',
        'CACertificateName'    => 'CACertificateName',
        'resourceGroupId'      => 'ResourceGroupId',
        'standardType'         => 'StandardType',
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->accessKeyId) {
            $res['access_key_id'] = $this->accessKeyId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->CACertificate) {
            $res['CACertificate'] = $this->CACertificate;
        }
        if (null !== $this->CACertificateName) {
            $res['CACertificateName'] = $this->CACertificateName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->standardType) {
            $res['StandardType'] = $this->standardType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadCACertificateRequest
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
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['access_key_id'])) {
            $model->accessKeyId = $map['access_key_id'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CACertificate'])) {
            $model->CACertificate = $map['CACertificate'];
        }
        if (isset($map['CACertificateName'])) {
            $model->CACertificateName = $map['CACertificateName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StandardType'])) {
            $model->standardType = $map['StandardType'];
        }

        return $model;
    }
}
