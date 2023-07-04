<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyPhysicalConnectionAttributeRequest extends Model
{
    /**
     * @description The circuit code of the Express Connect circuit. The circuit code is provided by the connectivity provider.
     *
     * @example longtel001
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate a token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example efefe566754h
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the Express Connect circuit.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     * @var string
     */
    public $description;

    /**
     * @description The connectivity provider of the Express Connect circuit. Valid values:
     *
     *   **CT**: China Telecom
     *   **CU**: China Unicom
     *   **CM**: China Mobile
     *   **CO**: other connectivity providers in the Chinese mainland
     *   **Equinix**: Equinix
     *   **Other**: other connectivity providers outside the Chinese Mainland
     *
     * @example CT
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @description The name of the Express Connect circuit.
     *
     * The name must be 2 to 128 characters in length and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter but cannot start with `http://` or `https://`.
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
     * @description The geographical location of the data center.
     *
     * @var string
     */
    public $peerLocation;

    /**
     * @description The ID of the Express Connect circuit.
     *
     * @example pc-119mfjzm******
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description The port type of the Express Connect circuit. Valid values:
     *
     *   **100Base-T**: 100 Mbit/s copper Ethernet port
     *   **1000Base-T** (default): 1,000 Mbit/s copper Ethernet port
     *   **1000Base-LX**: 1,000 Mbit/s single-mode optical port (10 kilometers)
     *   **10GBase-T**: 10,000 Mbit/s copper Ethernet port
     *   **10GBase-LR**: 10,000 Mbit/s single-mode optical port (10 kilometers)
     *   **40GBase-LR**: 40,000 Mbit/s single-mode optical port
     *   **100GBase-LR**: 100,000 Mbit/s single-mode optical port
     *
     * >  If you want to use the 40GBase-LR or 100GBase-LR port for an Express Connect circuit, you must first contact your account manager to obtain information about resource supplies.
     * @example 1000Base-LX
     *
     * @var string
     */
    public $portType;

    /**
     * @description The ID of the redundant Express Connect circuit. The redundant Express Connect circuit must be in the **Allocated**, **Confirmed**, or **Enabled** state.
     *
     * @example pc-119mfjzm7
     *
     * @var string
     */
    public $redundantPhysicalConnectionId;

    /**
     * @description The region ID of the Express Connect circuit.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
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
     * @description The bandwidth value for the connection over the Express Connect circuit. Unit: Mbit/s. Valid values: 2 to 10240.
     *
     * @example 5
     *
     * @var int
     */
    public $bandwidth;
    protected $_name = [
        'circuitCode'                   => 'CircuitCode',
        'clientToken'                   => 'ClientToken',
        'description'                   => 'Description',
        'lineOperator'                  => 'LineOperator',
        'name'                          => 'Name',
        'ownerAccount'                  => 'OwnerAccount',
        'ownerId'                       => 'OwnerId',
        'peerLocation'                  => 'PeerLocation',
        'physicalConnectionId'          => 'PhysicalConnectionId',
        'portType'                      => 'PortType',
        'redundantPhysicalConnectionId' => 'RedundantPhysicalConnectionId',
        'regionId'                      => 'RegionId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'bandwidth'                     => 'bandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
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
        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
        }
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
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
        if (null !== $this->bandwidth) {
            $res['bandwidth'] = $this->bandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPhysicalConnectionAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
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
        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
        }
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
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
        if (isset($map['bandwidth'])) {
            $model->bandwidth = $map['bandwidth'];
        }

        return $model;
    }
}
