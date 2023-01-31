<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateExpressCloudConnectionRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example XX@example.com
     *
     * @var string
     */
    public $contactMail;

    /**
     * @example 132*********
     *
     * @var string
     */
    public $contactTel;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 32*****************
     *
     * @var string
     */
    public $IDCardNo;

    /**
     * @example CU
     *
     * @var string
     */
    public $idcSP;

    /**
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
     * @var string
     */
    public $peerCity;

    /**
     * @var string
     */
    public $peerLocation;

    /**
     * @example 100Base-T
     *
     * @var string
     */
    public $portType;

    /**
     * @example ecc-d****
     *
     * @var string
     */
    public $redundantEccId;

    /**
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
        'bandwidth'            => 'Bandwidth',
        'contactMail'          => 'ContactMail',
        'contactTel'           => 'ContactTel',
        'description'          => 'Description',
        'IDCardNo'             => 'IDCardNo',
        'idcSP'                => 'IdcSP',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'peerCity'             => 'PeerCity',
        'peerLocation'         => 'PeerLocation',
        'portType'             => 'PortType',
        'redundantEccId'       => 'RedundantEccId',
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->contactMail) {
            $res['ContactMail'] = $this->contactMail;
        }
        if (null !== $this->contactTel) {
            $res['ContactTel'] = $this->contactTel;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->IDCardNo) {
            $res['IDCardNo'] = $this->IDCardNo;
        }
        if (null !== $this->idcSP) {
            $res['IdcSP'] = $this->idcSP;
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
        if (null !== $this->peerCity) {
            $res['PeerCity'] = $this->peerCity;
        }
        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->redundantEccId) {
            $res['RedundantEccId'] = $this->redundantEccId;
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
     * @return CreateExpressCloudConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ContactMail'])) {
            $model->contactMail = $map['ContactMail'];
        }
        if (isset($map['ContactTel'])) {
            $model->contactTel = $map['ContactTel'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IDCardNo'])) {
            $model->IDCardNo = $map['IDCardNo'];
        }
        if (isset($map['IdcSP'])) {
            $model->idcSP = $map['IdcSP'];
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
        if (isset($map['PeerCity'])) {
            $model->peerCity = $map['PeerCity'];
        }
        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['RedundantEccId'])) {
            $model->redundantEccId = $map['RedundantEccId'];
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
