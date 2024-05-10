<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyNatGatewaySpecRequest extends Model
{
    /**
     * @description Specifies whether to automatically complete the payment.
     *
     *   **true**: enables automatic payment. Payments are automatically completed.
     *   **false** (default): disables automatic payment. If you select this option, you must go to the Order Center to complete the payment after an order is generated.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters.
     * @example 123e4567-e89b-12d3-a456-426655****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the Internet NAT gateway that you want to upgrade.
     *
     * This parameter is required.
     * @example ngw-bp1uewa15k4iy5770****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the Internet NAT gateway is deployed.
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

    /**
     * @description The size of the Internet NAT gateway. Valid values:
     *
     *   **Small**: small
     *   **Middle**: medium
     *   **Large**: large
     *
     * This parameter is required.
     * @example Middle
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'clientToken'          => 'ClientToken',
        'natGatewayId'         => 'NatGatewayId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'spec'                 => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNatGatewaySpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
