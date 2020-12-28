<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\SetDomainExtensionAttributeRequest\serverCertificate;
use AlibabaCloud\Tea\Model;

class SetDomainExtensionAttributeRequest extends Model
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
    public $tags;

    /**
     * @var string
     */
    public $domainExtensionId;

    /**
     * @var string
     */
    public $serverCertificateId;

    /**
     * @var string[]
     */
    public $certificateId;

    /**
     * @var serverCertificate[]
     */
    public $serverCertificate;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'ownerAccount'         => 'OwnerAccount',
        'accessKeyId'          => 'access_key_id',
        'tags'                 => 'Tags',
        'domainExtensionId'    => 'DomainExtensionId',
        'serverCertificateId'  => 'ServerCertificateId',
        'certificateId'        => 'CertificateId',
        'serverCertificate'    => 'ServerCertificate',
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->domainExtensionId) {
            $res['DomainExtensionId'] = $this->domainExtensionId;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->serverCertificate) {
            $res['ServerCertificate'] = [];
            if (null !== $this->serverCertificate && \is_array($this->serverCertificate)) {
                $n = 0;
                foreach ($this->serverCertificate as $item) {
                    $res['ServerCertificate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDomainExtensionAttributeRequest
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
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['DomainExtensionId'])) {
            $model->domainExtensionId = $map['DomainExtensionId'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['CertificateId'])) {
            if (!empty($map['CertificateId'])) {
                $model->certificateId = $map['CertificateId'];
            }
        }
        if (isset($map['ServerCertificate'])) {
            if (!empty($map['ServerCertificate'])) {
                $model->serverCertificate = [];
                $n                        = 0;
                foreach ($map['ServerCertificate'] as $item) {
                    $model->serverCertificate[$n++] = null !== $item ? serverCertificate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
