<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ModifySmartAccessGatewayUpBandwidthRequest extends Model
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
    public $smartAGId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $upBandwidthWan;

    /**
     * @var int
     */
    public $upBandwidth4G;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'smartAGId'            => 'SmartAGId',
        'regionId'             => 'RegionId',
        'upBandwidthWan'       => 'UpBandwidthWan',
        'upBandwidth4G'        => 'UpBandwidth4G',
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
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->upBandwidthWan) {
            $res['UpBandwidthWan'] = $this->upBandwidthWan;
        }
        if (null !== $this->upBandwidth4G) {
            $res['UpBandwidth4G'] = $this->upBandwidth4G;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySmartAccessGatewayUpBandwidthRequest
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
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UpBandwidthWan'])) {
            $model->upBandwidthWan = $map['UpBandwidthWan'];
        }
        if (isset($map['UpBandwidth4G'])) {
            $model->upBandwidth4G = $map['UpBandwidth4G'];
        }

        return $model;
    }
}
