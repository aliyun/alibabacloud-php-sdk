<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsResponseBody\virtualPhysicalConnections\tags;
use AlibabaCloud\Tea\Model;

class virtualPhysicalConnections extends Model
{
    /**
     * @description The ID of the access point that is associated with the Express Connect circuit.
     *
     * @example ap-cn-hangzhou-finance-yh-E
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description The geographical location of the access device.
     *
     * @var string
     */
    public $adLocation;

    /**
     * @description The Alibaba Cloud account ID of the hosted connection owner.
     *
     * @example 253460731706911258
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description The bandwidth of the Express Connect circuit. Unit: Mbit/s.
     *
     * @example 50
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The status of the Express Connect circuit. Valid values:
     *
     *   **Normal**
     *   **FinancialLocked**
     *   **SecurityLocked**
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The billing method of the Express Connect circuit.
     *
     * If **Prepaid** is returned, it indicates that the Express Connect circuit is billed on a subscription basis.
     * @example Prepaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The circuit code of the Express Connect circuit. The circuit code is provided by the connectivity provider.
     *
     * @example longtel001
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @description The time when the Express Connect circuit was created.
     *
     * @example 2021-06-08T12:20:55
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the Express Connect circuit.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the Express Connect circuit is enabled.
     *
     * @example 2021-10-08T10:44Z
     *
     * @var string
     */
    public $enabledTime;

    /**
     * @description The expiration date of the hosted connection.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     * @example 2021-11-08T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The estimated maximum bandwidth of the shared Express Connect circuit. The estimated bandwidth takes effect after you complete the payment.
     *
     **M** indicates Mbit/s and **G** indicates Gbit/s.
     *
     * @example 50M
     *
     * @var string
     */
    public $expectSpec;

    /**
     * @description The connectivity provider of the Express Connect circuit. Valid values:
     *
     *   **CT**: China Telecom.
     *   **CU**: China Unicom.
     *   **CM**: China Mobile.
     *   **CO**: other connectivity providers in the Chinese mainland.
     *   **Equinix**: Equinix.
     *   **Other**: other connectivity providers outside the Chinese mainland.
     *
     * @example CU
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @description The status of the letter of authorization (LOA). Valid values:
     *
     *   **Applying**
     *   **Accept**
     *   **Available**
     *   **Rejected**
     *   **Completing**
     *   **Complete**
     *   **Deleted**
     *
     * @example Available
     *
     * @var string
     */
    public $loaStatus;

    /**
     * @description The name of the Express Connect circuit.
     *
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @description The payer for the shared Express Connect circuit. Valid values:
     *
     *   **PayByPhysicalConnectionOwner**: the owner of the shared Express Connect circuit
     *   **PayByVirtualPhysicalConnectionOwner**: the owner of the hosted connection
     *
     * @example PayByPhysicalConnectionOwner
     *
     * @var string
     */
    public $orderMode;

    /**
     * @description The ID of the Alibaba Cloud account to which the Express Connect circuit belongs.
     *
     * @example 283117732402483989
     *
     * @var string
     */
    public $parentPhysicalConnectionAliUid;

    /**
     * @description The ID of the Express Connect circuit.
     *
     * @example pc-bp1ciz7ekd2grn1as****
     *
     * @var string
     */
    public $parentPhysicalConnectionId;

    /**
     * @description The geographical location of the data center.
     *
     * @var string
     */
    public $peerLocation;

    /**
     * @description The ID of the hosted connection.
     *
     * @example pc-bp1mrgfbtmc9brre7****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description The ID of the port on the access device.
     *
     * @example 80
     *
     * @var string
     */
    public $portNumber;

    /**
     * @description The port type. Valid values:
     *
     *   **100Base-T**: 100 Mbit/s copper Ethernet port
     *   **1000Base-T**: 1,000 Mbit/s copper Ethernet port
     *   **1000Base-LX**: 1,000 Mbit/s single-mode optical port (10 km)
     *   **10GBase-T**: 10,000 Mbit/s copper Ethernet port
     *   **10GBase-LR**: 10,000 Mbit/s single-mode optical port (10 km)
     *   **40GBase-LR**: 40,000 Mbit/s single-mode optical port
     *   **100GBase-LR**: 100,000 Mbit/s single-mode optical port
     *
     * @example 10GBase-LR
     *
     * @var string
     */
    public $portType;

    /**
     * @description The type of the Express Connect circuit. Valid values:
     *
     *   **VirtualPhysicalConnection**: shared Express Connect circuit
     *   **PhysicalConnection**: dedicated Express Connect circuit
     *
     * @example VirtualPhysicalConnection
     *
     * @var string
     */
    public $productType;

    /**
     * @description The ID of the redundant Express Connect circuit.
     *
     * @example pc-119mfjzm****
     *
     * @var string
     */
    public $redundantPhysicalConnectionId;

    /**
     * @description The ID of the resource group to which the hosted connection belongs.
     *
     * @example rg-acfm3wmsyuimpma
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The bandwidth value of the hosted connection.
     *
     **M** indicates Mbit/s and **G** indicates Gbit/s.
     *
     * @example 50M
     *
     * @var string
     */
    public $spec;

    /**
     * @description The status of the Express Connect circuit. Valid values:
     *
     *   **Initial**: The application is under review.
     *   **Approved**: The application is approved.
     *   **Allocating**: The system is allocating resources.
     *   **Allocated**: The Express Connect circuit is under construction.
     *   **Confirmed**: The Express Connect circuit is pending for user confirmation.
     *   **Enabled**: The Express Connect circuit is enabled.
     *   **Rejected**: The application is rejected.
     *   **Canceled**: The application is canceled.
     *   **Allocation Failed**: The system failed to allocate resources.
     *   **Terminated**: The Express Connect circuit is disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag list.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The type of Express Connect circuit. Default value: **VPC**.
     *
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @description The status of the hosted connection. Valid values:
     *
     *   **Confirmed**
     *   **UnConfirmed**
     *   **Deleted**
     *
     * @example Confirmed
     *
     * @var string
     */
    public $virtualPhysicalConnectionStatus;

    /**
     * @description The VLAN ID of the hosted connection.
     *
     * @example 10
     *
     * @var string
     */
    public $vlanId;
    protected $_name = [
        'accessPointId'                   => 'AccessPointId',
        'adLocation'                      => 'AdLocation',
        'aliUid'                          => 'AliUid',
        'bandwidth'                       => 'Bandwidth',
        'businessStatus'                  => 'BusinessStatus',
        'chargeType'                      => 'ChargeType',
        'circuitCode'                     => 'CircuitCode',
        'creationTime'                    => 'CreationTime',
        'description'                     => 'Description',
        'enabledTime'                     => 'EnabledTime',
        'endTime'                         => 'EndTime',
        'expectSpec'                      => 'ExpectSpec',
        'lineOperator'                    => 'LineOperator',
        'loaStatus'                       => 'LoaStatus',
        'name'                            => 'Name',
        'orderMode'                       => 'OrderMode',
        'parentPhysicalConnectionAliUid'  => 'ParentPhysicalConnectionAliUid',
        'parentPhysicalConnectionId'      => 'ParentPhysicalConnectionId',
        'peerLocation'                    => 'PeerLocation',
        'physicalConnectionId'            => 'PhysicalConnectionId',
        'portNumber'                      => 'PortNumber',
        'portType'                        => 'PortType',
        'productType'                     => 'ProductType',
        'redundantPhysicalConnectionId'   => 'RedundantPhysicalConnectionId',
        'resourceGroupId'                 => 'ResourceGroupId',
        'spec'                            => 'Spec',
        'status'                          => 'Status',
        'tags'                            => 'Tags',
        'type'                            => 'Type',
        'virtualPhysicalConnectionStatus' => 'VirtualPhysicalConnectionStatus',
        'vlanId'                          => 'VlanId',
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
        if (null !== $this->adLocation) {
            $res['AdLocation'] = $this->adLocation;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enabledTime) {
            $res['EnabledTime'] = $this->enabledTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->expectSpec) {
            $res['ExpectSpec'] = $this->expectSpec;
        }
        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
        }
        if (null !== $this->loaStatus) {
            $res['LoaStatus'] = $this->loaStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderMode) {
            $res['OrderMode'] = $this->orderMode;
        }
        if (null !== $this->parentPhysicalConnectionAliUid) {
            $res['ParentPhysicalConnectionAliUid'] = $this->parentPhysicalConnectionAliUid;
        }
        if (null !== $this->parentPhysicalConnectionId) {
            $res['ParentPhysicalConnectionId'] = $this->parentPhysicalConnectionId;
        }
        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
        }
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }
        if (null !== $this->portNumber) {
            $res['PortNumber'] = $this->portNumber;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->redundantPhysicalConnectionId) {
            $res['RedundantPhysicalConnectionId'] = $this->redundantPhysicalConnectionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->virtualPhysicalConnectionStatus) {
            $res['VirtualPhysicalConnectionStatus'] = $this->virtualPhysicalConnectionStatus;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualPhysicalConnections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['AdLocation'])) {
            $model->adLocation = $map['AdLocation'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnabledTime'])) {
            $model->enabledTime = $map['EnabledTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExpectSpec'])) {
            $model->expectSpec = $map['ExpectSpec'];
        }
        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
        }
        if (isset($map['LoaStatus'])) {
            $model->loaStatus = $map['LoaStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderMode'])) {
            $model->orderMode = $map['OrderMode'];
        }
        if (isset($map['ParentPhysicalConnectionAliUid'])) {
            $model->parentPhysicalConnectionAliUid = $map['ParentPhysicalConnectionAliUid'];
        }
        if (isset($map['ParentPhysicalConnectionId'])) {
            $model->parentPhysicalConnectionId = $map['ParentPhysicalConnectionId'];
        }
        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
        }
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }
        if (isset($map['PortNumber'])) {
            $model->portNumber = $map['PortNumber'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RedundantPhysicalConnectionId'])) {
            $model->redundantPhysicalConnectionId = $map['RedundantPhysicalConnectionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VirtualPhysicalConnectionStatus'])) {
            $model->virtualPhysicalConnectionStatus = $map['VirtualPhysicalConnectionStatus'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        return $model;
    }
}
