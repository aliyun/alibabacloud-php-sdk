<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet;

use AlibabaCloud\Tea\Model;

class physicalConnectionType extends Model
{
    /**
     * @example ap-cn-hangzhou-finance-yh-E
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @example VPC
     *
     * @var string
     */
    public $accessPointType;

    /**
     * @var string
     */
    public $adLocation;

    /**
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @example Prepaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example longtel001
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @example 2021-08-24T07:30:58Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @example 2021-08-24T07:33:18Z
     *
     * @var string
     */
    public $enabledTime;

    /**
     * @example 2022-04-24T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 50M
     *
     * @var string
     */
    public $expectSpec;

    /**
     * @example false
     *
     * @var string
     */
    public $hasReservationData;

    /**
     * @example CT
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @example Available
     *
     * @var string
     */
    public $loaStatus;

    /**
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @example PayByPhysicalConnectionOwner
     *
     * @var string
     */
    public $orderMode;

    /**
     * @example 283117732402483989
     *
     * @var int
     */
    public $parentPhysicalConnectionAliUid;

    /**
     * @example pc-bp1ciz7ekd2grn1as****
     *
     * @var string
     */
    public $parentPhysicalConnectionId;

    /**
     * @var string
     */
    public $peerLocation;

    /**
     * @example pc-bp1ciz7ekd2grn1as****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @example 1/1/1
     *
     * @var string
     */
    public $portNumber;

    /**
     * @example 10GBase-LR
     *
     * @var string
     */
    public $portType;

    /**
     * @example PhysicalConnection
     *
     * @var string
     */
    public $productType;

    /**
     * @example pc-119mfjzm****
     *
     * @var string
     */
    public $redundantPhysicalConnectionId;

    /**
     * @example 2022-02-25T11:01:04Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @example PayByBandwidth
     *
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @example RENEW
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 10G
     *
     * @var string
     */
    public $spec;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @example 0
     *
     * @var int
     */
    public $virtualPhysicalConnectionCount;

    /**
     * @example 10
     *
     * @var string
     */
    public $vlanId;

    /**
     * @example Confirmed
     *
     * @var string
     */
    public $vpconnStatus;
    protected $_name = [
        'accessPointId'                  => 'AccessPointId',
        'accessPointType'                => 'AccessPointType',
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
        'redundantPhysicalConnectionId'  => 'RedundantPhysicalConnectionId',
        'reservationActiveTime'          => 'ReservationActiveTime',
        'reservationInternetChargeType'  => 'ReservationInternetChargeType',
        'reservationOrderType'           => 'ReservationOrderType',
        'resourceGroupId'                => 'ResourceGroupId',
        'spec'                           => 'Spec',
        'status'                         => 'Status',
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
