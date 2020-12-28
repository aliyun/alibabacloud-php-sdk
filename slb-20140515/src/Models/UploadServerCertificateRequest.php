<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class UploadServerCertificateRequest extends Model
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
    public $aliCloudCertificateId;

    /**
     * @var string
     */
    public $aliCloudCertificateName;

    /**
     * @var string
     */
    public $aliCloudCertificateRegionId;

    /**
     * @var string
     */
    public $serverCertificate;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $serverCertificateName;

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
    public $tags;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $standardType;
    protected $_name = [
        'ownerId'                     => 'OwnerId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'regionId'                    => 'RegionId',
        'aliCloudCertificateId'       => 'AliCloudCertificateId',
        'aliCloudCertificateName'     => 'AliCloudCertificateName',
        'aliCloudCertificateRegionId' => 'AliCloudCertificateRegionId',
        'serverCertificate'           => 'ServerCertificate',
        'privateKey'                  => 'PrivateKey',
        'serverCertificateName'       => 'ServerCertificateName',
        'ownerAccount'                => 'OwnerAccount',
        'accessKeyId'                 => 'access_key_id',
        'tags'                        => 'Tags',
        'resourceGroupId'             => 'ResourceGroupId',
        'standardType'                => 'StandardType',
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
        if (null !== $this->aliCloudCertificateId) {
            $res['AliCloudCertificateId'] = $this->aliCloudCertificateId;
        }
        if (null !== $this->aliCloudCertificateName) {
            $res['AliCloudCertificateName'] = $this->aliCloudCertificateName;
        }
        if (null !== $this->aliCloudCertificateRegionId) {
            $res['AliCloudCertificateRegionId'] = $this->aliCloudCertificateRegionId;
        }
        if (null !== $this->serverCertificate) {
            $res['ServerCertificate'] = $this->serverCertificate;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->serverCertificateName) {
            $res['ServerCertificateName'] = $this->serverCertificateName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->accessKeyId) {
            $res['access_key_id'] = $this->accessKeyId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
     * @return UploadServerCertificateRequest
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
        if (isset($map['AliCloudCertificateId'])) {
            $model->aliCloudCertificateId = $map['AliCloudCertificateId'];
        }
        if (isset($map['AliCloudCertificateName'])) {
            $model->aliCloudCertificateName = $map['AliCloudCertificateName'];
        }
        if (isset($map['AliCloudCertificateRegionId'])) {
            $model->aliCloudCertificateRegionId = $map['AliCloudCertificateRegionId'];
        }
        if (isset($map['ServerCertificate'])) {
            $model->serverCertificate = $map['ServerCertificate'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['ServerCertificateName'])) {
            $model->serverCertificateName = $map['ServerCertificateName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['access_key_id'])) {
            $model->accessKeyId = $map['access_key_id'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
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
