<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpnGatewayAttributeRequest extends Model
{
    /**
     * @description Specifies whether to automatically advertise BGP routes to the virtual private cloud (VPC). Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $autoPropagate;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example 123e4567-e89b-12d3-a456-4266****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The new description of the VPN gateway.
     *
     * The description must be 1 to 100 characters in length and cannot start with `http://` or `https://`.
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The new name of the VPN gateway.
     *
     * The name must be 2 to 100 characters in length and cannot start with `http://` or `https://`. It must start with a letter and can contain letters, digits, underscores (_), hyphens (-), and periods (.). Other characters are not supported.
     * @example myvpn
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
     * @description The ID of the region where the VPN gateway is created. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-shanghai
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
     * @description The ID of the VPN gateway.
     *
     * This parameter is required.
     * @example vpn-bp1q8bgx4xnkm2ogj****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'autoPropagate'        => 'AutoPropagate',
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'vpnGatewayId'         => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPropagate) {
            $res['AutoPropagate'] = $this->autoPropagate;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpnGatewayAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPropagate'])) {
            $model->autoPropagate = $map['AutoPropagate'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
