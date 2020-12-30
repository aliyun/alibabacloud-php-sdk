<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesResponseBody\routerInterfaceSet;

use AlibabaCloud\Tea\Model;

class routerInterfaceType extends Model
{
    /**
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $reservationOrderType;

    /**
     * @var string
     */
    public $oppositeInterfaceId;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $routerInterfaceId;

    /**
     * @var int
     */
    public $hcThreshold;

    /**
     * @var string
     */
    public $oppositeRouterType;

    /**
     * @var string
     */
    public $oppositeInterfaceOwnerId;

    /**
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @var string
     */
    public $oppositeVpcInstanceId;

    /**
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @var bool
     */
    public $crossBorder;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @var int
     */
    public $hcRate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $oppositeRouterId;

    /**
     * @var string
     */
    public $oppositeInterfaceSpec;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $oppositeInterfaceBusinessStatus;

    /**
     * @var string
     */
    public $connectedTime;

    /**
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @var string
     */
    public $oppositeInterfaceStatus;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $oppositeRegionId;

    /**
     * @var string
     */
    public $oppositeAccessPointId;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var int
     */
    public $oppositeBandwidth;

    /**
     * @var string
     */
    public $routerType;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $hasReservationData;

    /**
     * @var string
     */
    public $accessPointId;
    protected $_name = [
        'reservationActiveTime'           => 'ReservationActiveTime',
        'healthCheckTargetIp'             => 'HealthCheckTargetIp',
        'status'                          => 'Status',
        'creationTime'                    => 'CreationTime',
        'reservationOrderType'            => 'ReservationOrderType',
        'oppositeInterfaceId'             => 'OppositeInterfaceId',
        'spec'                            => 'Spec',
        'chargeType'                      => 'ChargeType',
        'routerInterfaceId'               => 'RouterInterfaceId',
        'hcThreshold'                     => 'HcThreshold',
        'oppositeRouterType'              => 'OppositeRouterType',
        'oppositeInterfaceOwnerId'        => 'OppositeInterfaceOwnerId',
        'vpcInstanceId'                   => 'VpcInstanceId',
        'oppositeVpcInstanceId'           => 'OppositeVpcInstanceId',
        'reservationInternetChargeType'   => 'ReservationInternetChargeType',
        'crossBorder'                     => 'CrossBorder',
        'description'                     => 'Description',
        'bandwidth'                       => 'Bandwidth',
        'reservationBandwidth'            => 'ReservationBandwidth',
        'hcRate'                          => 'HcRate',
        'name'                            => 'Name',
        'oppositeRouterId'                => 'OppositeRouterId',
        'oppositeInterfaceSpec'           => 'OppositeInterfaceSpec',
        'routerId'                        => 'RouterId',
        'oppositeInterfaceBusinessStatus' => 'OppositeInterfaceBusinessStatus',
        'connectedTime'                   => 'ConnectedTime',
        'healthCheckSourceIp'             => 'HealthCheckSourceIp',
        'oppositeInterfaceStatus'         => 'OppositeInterfaceStatus',
        'endTime'                         => 'EndTime',
        'oppositeRegionId'                => 'OppositeRegionId',
        'oppositeAccessPointId'           => 'OppositeAccessPointId',
        'businessStatus'                  => 'BusinessStatus',
        'oppositeBandwidth'               => 'OppositeBandwidth',
        'routerType'                      => 'RouterType',
        'role'                            => 'Role',
        'hasReservationData'              => 'HasReservationData',
        'accessPointId'                   => 'AccessPointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservationActiveTime) {
            $res['ReservationActiveTime'] = $this->reservationActiveTime;
        }
        if (null !== $this->healthCheckTargetIp) {
            $res['HealthCheckTargetIp'] = $this->healthCheckTargetIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->reservationOrderType) {
            $res['ReservationOrderType'] = $this->reservationOrderType;
        }
        if (null !== $this->oppositeInterfaceId) {
            $res['OppositeInterfaceId'] = $this->oppositeInterfaceId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->routerInterfaceId) {
            $res['RouterInterfaceId'] = $this->routerInterfaceId;
        }
        if (null !== $this->hcThreshold) {
            $res['HcThreshold'] = $this->hcThreshold;
        }
        if (null !== $this->oppositeRouterType) {
            $res['OppositeRouterType'] = $this->oppositeRouterType;
        }
        if (null !== $this->oppositeInterfaceOwnerId) {
            $res['OppositeInterfaceOwnerId'] = $this->oppositeInterfaceOwnerId;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }
        if (null !== $this->oppositeVpcInstanceId) {
            $res['OppositeVpcInstanceId'] = $this->oppositeVpcInstanceId;
        }
        if (null !== $this->reservationInternetChargeType) {
            $res['ReservationInternetChargeType'] = $this->reservationInternetChargeType;
        }
        if (null !== $this->crossBorder) {
            $res['CrossBorder'] = $this->crossBorder;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->reservationBandwidth) {
            $res['ReservationBandwidth'] = $this->reservationBandwidth;
        }
        if (null !== $this->hcRate) {
            $res['HcRate'] = $this->hcRate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->oppositeRouterId) {
            $res['OppositeRouterId'] = $this->oppositeRouterId;
        }
        if (null !== $this->oppositeInterfaceSpec) {
            $res['OppositeInterfaceSpec'] = $this->oppositeInterfaceSpec;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->oppositeInterfaceBusinessStatus) {
            $res['OppositeInterfaceBusinessStatus'] = $this->oppositeInterfaceBusinessStatus;
        }
        if (null !== $this->connectedTime) {
            $res['ConnectedTime'] = $this->connectedTime;
        }
        if (null !== $this->healthCheckSourceIp) {
            $res['HealthCheckSourceIp'] = $this->healthCheckSourceIp;
        }
        if (null !== $this->oppositeInterfaceStatus) {
            $res['OppositeInterfaceStatus'] = $this->oppositeInterfaceStatus;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->oppositeRegionId) {
            $res['OppositeRegionId'] = $this->oppositeRegionId;
        }
        if (null !== $this->oppositeAccessPointId) {
            $res['OppositeAccessPointId'] = $this->oppositeAccessPointId;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->oppositeBandwidth) {
            $res['OppositeBandwidth'] = $this->oppositeBandwidth;
        }
        if (null !== $this->routerType) {
            $res['RouterType'] = $this->routerType;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routerInterfaceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservationActiveTime'])) {
            $model->reservationActiveTime = $map['ReservationActiveTime'];
        }
        if (isset($map['HealthCheckTargetIp'])) {
            $model->healthCheckTargetIp = $map['HealthCheckTargetIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ReservationOrderType'])) {
            $model->reservationOrderType = $map['ReservationOrderType'];
        }
        if (isset($map['OppositeInterfaceId'])) {
            $model->oppositeInterfaceId = $map['OppositeInterfaceId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['RouterInterfaceId'])) {
            $model->routerInterfaceId = $map['RouterInterfaceId'];
        }
        if (isset($map['HcThreshold'])) {
            $model->hcThreshold = $map['HcThreshold'];
        }
        if (isset($map['OppositeRouterType'])) {
            $model->oppositeRouterType = $map['OppositeRouterType'];
        }
        if (isset($map['OppositeInterfaceOwnerId'])) {
            $model->oppositeInterfaceOwnerId = $map['OppositeInterfaceOwnerId'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }
        if (isset($map['OppositeVpcInstanceId'])) {
            $model->oppositeVpcInstanceId = $map['OppositeVpcInstanceId'];
        }
        if (isset($map['ReservationInternetChargeType'])) {
            $model->reservationInternetChargeType = $map['ReservationInternetChargeType'];
        }
        if (isset($map['CrossBorder'])) {
            $model->crossBorder = $map['CrossBorder'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ReservationBandwidth'])) {
            $model->reservationBandwidth = $map['ReservationBandwidth'];
        }
        if (isset($map['HcRate'])) {
            $model->hcRate = $map['HcRate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OppositeRouterId'])) {
            $model->oppositeRouterId = $map['OppositeRouterId'];
        }
        if (isset($map['OppositeInterfaceSpec'])) {
            $model->oppositeInterfaceSpec = $map['OppositeInterfaceSpec'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['OppositeInterfaceBusinessStatus'])) {
            $model->oppositeInterfaceBusinessStatus = $map['OppositeInterfaceBusinessStatus'];
        }
        if (isset($map['ConnectedTime'])) {
            $model->connectedTime = $map['ConnectedTime'];
        }
        if (isset($map['HealthCheckSourceIp'])) {
            $model->healthCheckSourceIp = $map['HealthCheckSourceIp'];
        }
        if (isset($map['OppositeInterfaceStatus'])) {
            $model->oppositeInterfaceStatus = $map['OppositeInterfaceStatus'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OppositeRegionId'])) {
            $model->oppositeRegionId = $map['OppositeRegionId'];
        }
        if (isset($map['OppositeAccessPointId'])) {
            $model->oppositeAccessPointId = $map['OppositeAccessPointId'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['OppositeBandwidth'])) {
            $model->oppositeBandwidth = $map['OppositeBandwidth'];
        }
        if (isset($map['RouterType'])) {
            $model->routerType = $map['RouterType'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }

        return $model;
    }
}
