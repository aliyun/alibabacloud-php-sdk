<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snsuapi\V20180709\Models;

use AlibabaCloud\Tea\Model;

class MobileStartSpeedUpRequest extends Model
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
    public $token;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string
     */
    public $publicPort;

    /**
     * @var string
     */
    public $destinationIpAddress;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'token'                => 'Token',
        'duration'             => 'Duration',
        'ip'                   => 'Ip',
        'publicIp'             => 'PublicIp',
        'publicPort'           => 'PublicPort',
        'destinationIpAddress' => 'DestinationIpAddress',
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
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->publicPort) {
            $res['PublicPort'] = $this->publicPort;
        }
        if (null !== $this->destinationIpAddress) {
            $res['DestinationIpAddress'] = $this->destinationIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MobileStartSpeedUpRequest
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['PublicPort'])) {
            $model->publicPort = $map['PublicPort'];
        }
        if (isset($map['DestinationIpAddress'])) {
            $model->destinationIpAddress = $map['DestinationIpAddress'];
        }

        return $model;
    }
}
