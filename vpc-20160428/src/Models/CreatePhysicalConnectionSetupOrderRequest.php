<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreatePhysicalConnectionSetupOrderRequest extends Model
{
    /**
     * @description The ID of the access point.
     *
     * @example ap-cn-beijing-ft-A
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   **false** (default): disables automatic payment.
     *   **true**: enables automatic payment.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not set this parameter, the system automatically uses **RequestId** as **ClientToken**. **RequestId** of each API request may be different.
     * @example 318BB676-0A2B-43A0-9AD8-F1D34E93750F
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The connectivity provider of the Express Connect circuit. Valid values:
     *
     *   **CT**: China Telecom
     *   **CU**: China Unicom
     *   **CM**: China Mobile
     *   **CO**: other connectivity providers in the Chinese mainland
     *   **Equinix**: Equinix
     *   **Other**: other connectivity providers outside the Chinese mainland
     *
     * @example CT
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The port type. Valid values:
     *
     *   **100Base-T**: 100 Mbit/s copper Ethernet port
     *   **1000Base-T** (default): 1,000 Mbit/s copper Ethernet port
     *   **1000Base-LX**: 1,000 Mbit/s single-mode optical port (10 km)
     *   **10GBase-T**: 10,000 Mbit/s copper Ethernet port
     *   **10GBase-LR**: 10,000 Mbit/s single-mode optical port (10 km)
     *   **40GBase-LR**: 40,000 Mbit/s single-mode optical port
     *   **100GBase-LR**: 100,000 Mbit/s single-mode optical port
     *
     * >  Whether 40GBase-LR and 100GBase-LR ports can be created is based on resource supplies. For more information, contact your business manager.
     * @example 100Base-T
     *
     * @var string
     */
    public $portType;

    /**
     * @description The ID of the redundant Express Connect circuit. The redundant Express Connect circuit must be in the **Allocated**, **Confirmed**, or **Enabled** state.
     *
     * @example pc-bp10zsv5ntp****
     *
     * @var string
     */
    public $redundantPhysicalConnectionId;

    /**
     * @description The region ID of the Express Connect circuit.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-beijing
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
        'accessPointId'                 => 'AccessPointId',
        'autoPay'                       => 'AutoPay',
        'clientToken'                   => 'ClientToken',
        'lineOperator'                  => 'LineOperator',
        'ownerAccount'                  => 'OwnerAccount',
        'ownerId'                       => 'OwnerId',
        'portType'                      => 'PortType',
        'redundantPhysicalConnectionId' => 'RedundantPhysicalConnectionId',
        'regionId'                      => 'RegionId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->redundantPhysicalConnectionId) {
            $res['RedundantPhysicalConnectionId'] = $this->redundantPhysicalConnectionId;
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
     * @return CreatePhysicalConnectionSetupOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['RedundantPhysicalConnectionId'])) {
            $model->redundantPhysicalConnectionId = $map['RedundantPhysicalConnectionId'];
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
