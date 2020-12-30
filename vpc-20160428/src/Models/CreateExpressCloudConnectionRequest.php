<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateExpressCloudConnectionRequest extends Model
{
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
    public $regionId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $peerCity;

    /**
     * @var string
     */
    public $peerLocation;

    /**
     * @var string
     */
    public $idcSP;

    /**
     * @var string
     */
    public $portType;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $contactTel;

    /**
     * @var string
     */
    public $contactMail;

    /**
     * @var string
     */
    public $IDCardNo;

    /**
     * @var string
     */
    public $redundantEccId;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'name'                 => 'Name',
        'description'          => 'Description',
        'peerCity'             => 'PeerCity',
        'peerLocation'         => 'PeerLocation',
        'idcSP'                => 'IdcSP',
        'portType'             => 'PortType',
        'bandwidth'            => 'Bandwidth',
        'contactTel'           => 'ContactTel',
        'contactMail'          => 'ContactMail',
        'IDCardNo'             => 'IDCardNo',
        'redundantEccId'       => 'RedundantEccId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->peerCity) {
            $res['PeerCity'] = $this->peerCity;
        }
        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
        }
        if (null !== $this->idcSP) {
            $res['IdcSP'] = $this->idcSP;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->contactTel) {
            $res['ContactTel'] = $this->contactTel;
        }
        if (null !== $this->contactMail) {
            $res['ContactMail'] = $this->contactMail;
        }
        if (null !== $this->IDCardNo) {
            $res['IDCardNo'] = $this->IDCardNo;
        }
        if (null !== $this->redundantEccId) {
            $res['RedundantEccId'] = $this->redundantEccId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PeerCity'])) {
            $model->peerCity = $map['PeerCity'];
        }
        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
        }
        if (isset($map['IdcSP'])) {
            $model->idcSP = $map['IdcSP'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ContactTel'])) {
            $model->contactTel = $map['ContactTel'];
        }
        if (isset($map['ContactMail'])) {
            $model->contactMail = $map['ContactMail'];
        }
        if (isset($map['IDCardNo'])) {
            $model->IDCardNo = $map['IDCardNo'];
        }
        if (isset($map['RedundantEccId'])) {
            $model->redundantEccId = $map['RedundantEccId'];
        }

        return $model;
    }
}
