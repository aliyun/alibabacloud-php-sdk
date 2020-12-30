<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snsuapi\V20180709\Models;

use AlibabaCloud\Tea\Model;

class BandStartSpeedUpRequest extends Model
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
    public $ipAddress;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $bandId;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var int
     */
    public $targetBandwidth;

    /**
     * @var string
     */
    public $bandScene;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ipAddress'            => 'IpAddress',
        'port'                 => 'Port',
        'bandId'               => 'BandId',
        'direction'            => 'Direction',
        'targetBandwidth'      => 'TargetBandwidth',
        'bandScene'            => 'BandScene',
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
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->bandId) {
            $res['BandId'] = $this->bandId;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->targetBandwidth) {
            $res['TargetBandwidth'] = $this->targetBandwidth;
        }
        if (null !== $this->bandScene) {
            $res['BandScene'] = $this->bandScene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BandStartSpeedUpRequest
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
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['BandId'])) {
            $model->bandId = $map['BandId'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['TargetBandwidth'])) {
            $model->targetBandwidth = $map['TargetBandwidth'];
        }
        if (isset($map['BandScene'])) {
            $model->bandScene = $map['BandScene'];
        }

        return $model;
    }
}
