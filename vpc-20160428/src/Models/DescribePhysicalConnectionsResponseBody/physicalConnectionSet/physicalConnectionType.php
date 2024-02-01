<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet\physicalConnectionType\tags;
use AlibabaCloud\Tea\Model;

class physicalConnectionType extends Model
{
    /**
     * @description The ID of the access point.
     *
     * @example ap-cn-hangzhou-finance-yh-E
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description The type of the access point.
     *
     * @example VPC
     *
     * @var string
     */
    public $accessPointType;

    /**
     * @description The information about the data center and rack.
     *
     * @example 浙江省杭州市XX区XX镇XX路10号, XX机房, ET135ET135-XX-2包间, JXX机柜,  position30
     *
     * @var string
     */
    public $adDetailLocation;

    /**
     * @description The location of the access point.
     *
     * @example Number 10, XX Road, XX Town, XX District, Hangzhou City, Zhejiang Province.
     *
     * @var string
     */
    public $adLocation;

    /**
     * @description The maximum bandwidth of the Express Connect circuit.
     *
     * Unit: Gbit/s.
     * @example 10
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
     * @example 2021-08-24T07:30:58Z
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
     * @example 2021-08-24T07:33:18Z
     *
     * @var string
     */
    public $enabledTime;

    /**
     * @description The time when the Express Connect circuit expires.
     *
     * @example 2022-04-24T16:00:00Z
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
     * @description Indicates whether the data about pending orders is returned. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var string
     */
    public $hasReservationData;

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
     * @example CT
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
     *   **PayByPhysicalConnectionOwner**: The partner pays for the shared Express Connect circuit.
     *   **PayByVirtualPhysicalConnectionOwner**: The tenant pays for the shared Express Connect circuit.
     *
     * @example PayByPhysicalConnectionOwner
     *
     * @var string
     */
    public $orderMode;

    /**
     * @description The ID of the Alibaba Cloud account to which the shared Express Connect circuit belongs.
     *
     * @example 283117732402483989
     *
     * @var int
     */
    public $parentPhysicalConnectionAliUid;

    /**
     * @description The ID of the Express Connect circuit that is used to create the hosted connection.
     *
     * @example pc-bp1ciz7ekd2grn1as****
     *
     * @var string
     */
    public $parentPhysicalConnectionId;

    /**
     * @description The geographical location of the data center.
     *
     * @example XX Number, XX Road, XX Town, XX District, Hangzhou City, Zhejiang Province.
     *
     * @var string
     */
    public $peerLocation;

    /**
     * @description The ID of the Express Connect circuit.
     *
     * @example pc-bp1ciz7ekd2grn1as****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description The ID of the port on the access device.
     *
     * @example 1/1/1
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
     * >  To create ports of 40GBase-LR and 100GBase-LR, you must first contact your account manager.
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
     * @example PhysicalConnection
     *
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $qosId;

    /**
     * @description The ID of the redundant Express Connect circuit.
     *
     * @example pc-119mfjzm****
     *
     * @var string
     */
    public $redundantPhysicalConnectionId;

    /**
     * @description The time when the pending order takes effect.
     *
     * @example 2022-02-25T11:01:04Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @description The billing method of the pending order.
     *
     * If **PayByBandwidth** is returned, it indicates that the Express Connect circuit is billed on a pay-by-bandwidth basis.
     * @example PayByBandwidth
     *
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @description The type of the pending order.
     *
     * If the value is set to **RENEW**, it indicates that the order is placed for service renewal.
     * @example RENEW
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @description The ID of the resource group to which the ACL belongs.
     *
     * @example rg-acfmwu3k52prgdi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The specification of the Express Connect circuit.
     *
     * Unit: **G** (Gbit/s).
     * @example 10G
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
     *   **Terminating**: The Express Connect circuit is being disabled.
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
     * @var tags
     */
    public $tags;

    /**
     * @description The type of resource to which the Express Connect circuit is connected. Only **VPC** may be returned.
     *
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @description The number of hosted connections that are established over the Express Connect circuit.
     *
     * @example 0
     *
     * @var int
     */
    public $virtualPhysicalConnectionCount;

    /**
     * @description The VLAN ID of the shared Express Connect circuit.
     *
     * @example 10
     *
     * @var string
     */
    public $vlanId;

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
    public $vpconnStatus;
    protected $_name = [
        'accessPointId'                  => 'AccessPointId',
        'accessPointType'                => 'AccessPointType',
        'adDetailLocation'               => 'AdDetailLocation',
        'adLocation'                     => 'AdLocation',
        'bandwidth'                      => 'Bandwidth',
        'businessStatus'                 => 'BusinessStatus',
        'chargeType'                     => 'ChargeType',
        'circuitCode'                    => 'CircuitCode',
        'creationTime'                   => 'CreationTime',
        'description'                    => 'Description',
        'enabledTime'                    => 'EnabledTime',
        'endTime'                        => 'EndTime',
        'expectSpec'                     => 'ExpectSpec',
        'hasReservationData'             => 'HasReservationData',
        'lineOperator'                   => 'LineOperator',
        'loaStatus'                      => 'LoaStatus',
        'name'                           => 'Name',
        'orderMode'                      => 'OrderMode',
        'parentPhysicalConnectionAliUid' => 'ParentPhysicalConnectionAliUid',
        'parentPhysicalConnectionId'     => 'ParentPhysicalConnectionId',
        'peerLocation'                   => 'PeerLocation',
        'physicalConnectionId'           => 'PhysicalConnectionId',
        'portNumber'                     => 'PortNumber',
        'portType'                       => 'PortType',
        'productType'                    => 'ProductType',
        'qosId'                          => 'QosId',
        'redundantPhysicalConnectionId'  => 'RedundantPhysicalConnectionId',
        'reservationActiveTime'          => 'ReservationActiveTime',
        'reservationInternetChargeType'  => 'ReservationInternetChargeType',
        'reservationOrderType'           => 'ReservationOrderType',
        'resourceGroupId'                => 'ResourceGroupId',
        'spec'                           => 'Spec',
        'status'                         => 'Status',
        'tags'                           => 'Tags',
        'type'                           => 'Type',
        'virtualPhysicalConnectionCount' => 'VirtualPhysicalConnectionCount',
        'vlanId'                         => 'VlanId',
        'vpconnStatus'                   => 'VpconnStatus',
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
        if (null !== $this->accessPointType) {
            $res['AccessPointType'] = $this->accessPointType;
        }
        if (null !== $this->adDetailLocation) {
            $res['AdDetailLocation'] = $this->adDetailLocation;
        }
        if (null !== $this->adLocation) {
            $res['AdLocation'] = $this->adLocation;
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
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
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
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->redundantPhysicalConnectionId) {
            $res['RedundantPhysicalConnectionId'] = $this->redundantPhysicalConnectionId;
        }
        if (null !== $this->reservationActiveTime) {
            $res['ReservationActiveTime'] = $this->reservationActiveTime;
        }
        if (null !== $this->reservationInternetChargeType) {
            $res['ReservationInternetChargeType'] = $this->reservationInternetChargeType;
        }
        if (null !== $this->reservationOrderType) {
            $res['ReservationOrderType'] = $this->reservationOrderType;
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->virtualPhysicalConnectionCount) {
            $res['VirtualPhysicalConnectionCount'] = $this->virtualPhysicalConnectionCount;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->vpconnStatus) {
            $res['VpconnStatus'] = $this->vpconnStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return physicalConnectionType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['AccessPointType'])) {
            $model->accessPointType = $map['AccessPointType'];
        }
        if (isset($map['AdDetailLocation'])) {
            $model->adDetailLocation = $map['AdDetailLocation'];
        }
        if (isset($map['AdLocation'])) {
            $model->adLocation = $map['AdLocation'];
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
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
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
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['RedundantPhysicalConnectionId'])) {
            $model->redundantPhysicalConnectionId = $map['RedundantPhysicalConnectionId'];
        }
        if (isset($map['ReservationActiveTime'])) {
            $model->reservationActiveTime = $map['ReservationActiveTime'];
        }
        if (isset($map['ReservationInternetChargeType'])) {
            $model->reservationInternetChargeType = $map['ReservationInternetChargeType'];
        }
        if (isset($map['ReservationOrderType'])) {
            $model->reservationOrderType = $map['ReservationOrderType'];
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
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VirtualPhysicalConnectionCount'])) {
            $model->virtualPhysicalConnectionCount = $map['VirtualPhysicalConnectionCount'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['VpconnStatus'])) {
            $model->vpconnStatus = $map['VpconnStatus'];
        }

        return $model;
    }
}
