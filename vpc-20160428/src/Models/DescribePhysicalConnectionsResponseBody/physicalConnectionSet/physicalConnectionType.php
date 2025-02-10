<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet\physicalConnectionType\tags;

class physicalConnectionType extends Model
{
    /**
     * @var string
     */
    public $accessPointId;
    /**
     * @var string
     */
    public $accessPointType;
    /**
     * @var string
     */
    public $adDetailLocation;
    /**
     * @var string
     */
    public $adLocation;
    /**
     * @var int
     */
    public $bandwidth;
    /**
     * @var string
     */
    public $businessStatus;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var string
     */
    public $circuitCode;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $enabledTime;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $expectSpec;
    /**
     * @var string
     */
    public $hasReservationData;
    /**
     * @var string
     */
    public $lineOperator;
    /**
     * @var string
     */
    public $loaStatus;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $orderMode;
    /**
     * @var int
     */
    public $parentPhysicalConnectionAliUid;
    /**
     * @var string
     */
    public $parentPhysicalConnectionId;
    /**
     * @var string
     */
    public $peerLocation;
    /**
     * @var string
     */
    public $physicalConnectionId;
    /**
     * @var string
     */
    public $portNumber;
    /**
     * @var string
     */
    public $portType;
    /**
     * @var string
     */
    public $productType;
    /**
     * @var string
     */
    public $qosId;
    /**
     * @var string
     */
    public $redundantPhysicalConnectionId;
    /**
     * @var string
     */
    public $reservationActiveTime;
    /**
     * @var string
     */
    public $reservationInternetChargeType;
    /**
     * @var string
     */
    public $reservationOrderType;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $spec;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags
     */
    public $tags;
    /**
     * @var string
     */
    public $type;
    /**
     * @var int
     */
    public $virtualPhysicalConnectionCount;
    /**
     * @var string
     */
    public $vlanId;
    /**
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
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
