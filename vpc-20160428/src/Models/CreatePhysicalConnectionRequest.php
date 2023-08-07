<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionRequest\tag;
use AlibabaCloud\Tea\Model;

class CreatePhysicalConnectionRequest extends Model
{
    /**
     * @description The access point ID of the Express Connect circuit.
     *
     * @example ap-cn-beijing-ft-A
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description The circuit code of the Express Connect circuit. The circuit code is provided by the connectivity provider.
     *
     * @example longtel001
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must ensure that the value is unique among all requests. The client token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, the system uses **RequestId** as **ClientToken**. **RequestId** might be different for each API request.
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the Express Connect circuit.
     *
     * The description must be 2 to 256 characters in length. The description must start with a letter but cannot start with `http://` or `https://`.
     * @example description
     *
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
     *   **Other**: other connectivity providers outside the Chinese mainland
     *
     * @example CT
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @description The name of the Express Connect circuit.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter but cannot start with `http://` or `https://`.
     * @example test
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
     * @description The geographical location of the data center.
     *
     * @var string
     */
    public $peerLocation;

    /**
     * @description The port type of the Express Connect circuit. Valid values:
     *
     *   **100Base-T**: 100 Mbit/s copper Ethernet port
     *   **1000Base-T**: 1,000 Mbit/s copper Ethernet port
     *   **1000Base-LX**: 1,000 Mbit/s single-mode optical port (10 km)
     *   **10GBase-T**: 10,000 Mbit/s copper Ethernet port
     *   **10GBase-LR**: 10,000 Mbit/s single-mode optical port (10 kilometers)
     *   **40GBase-LR**: 40,000 Mbit/s single-mode optical port
     *   **100GBase-LR**: 100,000 Mbit/s single-mode optical port
     *
     * >  If you want to use the 40GBase-LR or 100GBase-LR port for an Express Connect circuit, you must first contact your account manager to obtain information about resource supplies.
     * @example 1000Base-T
     *
     * @var string
     */
    public $portType;

    /**
     * @description The ID of the redundant Express Connect circuit. The redundant Express Connect circuit must be in the **Allocated**, **Confirmed**, or **Enabled** state.
     *
     * @example pc-119mfjzm****
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
     * @description The ID of the resource group to which the Express Connect circuit belongs.
     *
     * @example rg-acfmoiyermp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description The type of the Express Connect circuit. Default value: **VPC**.
     *
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @description The maximum bandwidth of the hosted connection. Unit: Mbit/s.
     *
     * Valid values: **50**, **100**, **200**, **300**, **400**, **500**, **1000**, **2000**, **4000**, **5000**, **8000**, and **10000**.
     * @example 50
     *
     * @var int
     */
    public $bandwidth;
    protected $_name = [
        'accessPointId'                 => 'AccessPointId',
        'circuitCode'                   => 'CircuitCode',
        'clientToken'                   => 'ClientToken',
        'description'                   => 'Description',
        'lineOperator'                  => 'LineOperator',
        'name'                          => 'Name',
        'ownerAccount'                  => 'OwnerAccount',
        'ownerId'                       => 'OwnerId',
        'peerLocation'                  => 'PeerLocation',
        'portType'                      => 'PortType',
        'redundantPhysicalConnectionId' => 'RedundantPhysicalConnectionId',
        'regionId'                      => 'RegionId',
        'resourceGroupId'               => 'ResourceGroupId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'tag'                           => 'Tag',
        'type'                          => 'Type',
        'bandwidth'                     => 'bandwidth',
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
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->redundantPhysicalConnectionId) {
            $res['RedundantPhysicalConnectionId'] = $this->redundantPhysicalConnectionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->bandwidth) {
            $res['bandwidth'] = $this->bandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePhysicalConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
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
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['RedundantPhysicalConnectionId'])) {
            $model->redundantPhysicalConnectionId = $map['RedundantPhysicalConnectionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['bandwidth'])) {
            $model->bandwidth = $map['bandwidth'];
        }

        return $model;
    }
}
