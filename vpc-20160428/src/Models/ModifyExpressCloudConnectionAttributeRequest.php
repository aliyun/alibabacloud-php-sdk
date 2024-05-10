<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyExpressCloudConnectionAttributeRequest extends Model
{
    /**
     * @description The BGP autonomous system number (ASN) to be configured for the Smart Access Gateway (SAG) device.
     *
     * @example sag-ejfge***
     *
     * @var string
     */
    public $bgpAs;

    /**
     * @description The peer IP address when the SAG device is connected to the cloud.
     *
     * @example 172.16.\*\*.**
     *
     * @var string
     */
    public $ceIp;

    /**
     * @description Descriptions of ECC.
     *
     * @example ECC
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the ECC instance.
     *
     * This parameter is required.
     * @example ecc-bp1t9osmuln*******
     *
     * @var string
     */
    public $eccId;

    /**
     * @description The name of the ECC instance.
     *
     * @example doctest
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The on-premises IP address when the SAG device is connected to the cloud.
     *
     * @example 10.10.\*\*.**
     *
     * @var string
     */
    public $peIp;

    /**
     * @description The region ID of the ECC instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'bgpAs'                => 'BgpAs',
        'ceIp'                 => 'CeIp',
        'description'          => 'Description',
        'eccId'                => 'EccId',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'peIp'                 => 'PeIp',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpAs) {
            $res['BgpAs'] = $this->bgpAs;
        }
        if (null !== $this->ceIp) {
            $res['CeIp'] = $this->ceIp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->peIp) {
            $res['PeIp'] = $this->peIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyExpressCloudConnectionAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpAs'])) {
            $model->bgpAs = $map['BgpAs'];
        }
        if (isset($map['CeIp'])) {
            $model->ceIp = $map['CeIp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PeIp'])) {
            $model->peIp = $map['PeIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
