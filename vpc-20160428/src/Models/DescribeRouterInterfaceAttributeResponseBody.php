<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeRouterInterfaceAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $oppositeInterfaceId;

    /**
     * @var string
     */
    public $oppositeInterfaceStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $oppositeRouterId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $reservationOrderType;

    /**
     * @var string
     */
    public $oppositeRouterType;

    /**
     * @var int
     */
    public $oppositeBandwidth;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $connectedTime;

    /**
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @var int
     */
    public $hcThreshold;

    /**
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $oppositeInterfaceOwnerId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $oppositeRegionId;

    /**
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @var string
     */
    public $hasReservationData;

    /**
     * @var bool
     */
    public $crossBorder;

    /**
     * @var int
     */
    public $hcRate;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @var string
     */
    public $oppositeInterfaceSpec;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $oppositeVpcInstanceId;

    /**
     * @var string
     */
    public $routerType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @var string
     */
    public $oppositeInterfaceBusinessStatus;

    /**
     * @var string
     */
    public $oppositeAccessPointId;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $healthCheckStatus;

    /**
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @var string
     */
    public $routerInterfaceId;
    protected $_name = [
        'oppositeInterfaceId'             => 'OppositeInterfaceId',
        'oppositeInterfaceStatus'         => 'OppositeInterfaceStatus',
        'description'                     => 'Description',
        'oppositeRouterId'                => 'OppositeRouterId',
        'message'                         => 'Message',
        'endTime'                         => 'EndTime',
        'gmtModified'                     => 'GmtModified',
        'routerId'                        => 'RouterId',
        'businessStatus'                  => 'BusinessStatus',
        'success'                         => 'Success',
        'name'                            => 'Name',
        'reservationOrderType'            => 'ReservationOrderType',
        'oppositeRouterType'              => 'OppositeRouterType',
        'oppositeBandwidth'               => 'OppositeBandwidth',
        'bandwidth'                       => 'Bandwidth',
        'connectedTime'                   => 'ConnectedTime',
        'reservationActiveTime'           => 'ReservationActiveTime',
        'hcThreshold'                     => 'HcThreshold',
        'reservationBandwidth'            => 'ReservationBandwidth',
        'status'                          => 'Status',
        'oppositeInterfaceOwnerId'        => 'OppositeInterfaceOwnerId',
        'requestId'                       => 'RequestId',
        'oppositeRegionId'                => 'OppositeRegionId',
        'healthCheckSourceIp'             => 'HealthCheckSourceIp',
        'hasReservationData'              => 'HasReservationData',
        'crossBorder'                     => 'CrossBorder',
        'hcRate'                          => 'HcRate',
        'code'                            => 'Code',
        'reservationInternetChargeType'   => 'ReservationInternetChargeType',
        'oppositeInterfaceSpec'           => 'OppositeInterfaceSpec',
        'role'                            => 'Role',
        'oppositeVpcInstanceId'           => 'OppositeVpcInstanceId',
        'routerType'                      => 'RouterType',
        'chargeType'                      => 'ChargeType',
        'creationTime'                    => 'CreationTime',
        'accessPointId'                   => 'AccessPointId',
        'vpcInstanceId'                   => 'VpcInstanceId',
        'oppositeInterfaceBusinessStatus' => 'OppositeInterfaceBusinessStatus',
        'oppositeAccessPointId'           => 'OppositeAccessPointId',
        'spec'                            => 'Spec',
        'healthCheckStatus'               => 'HealthCheckStatus',
        'healthCheckTargetIp'             => 'HealthCheckTargetIp',
        'routerInterfaceId'               => 'RouterInterfaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oppositeInterfaceId) {
            $res['OppositeInterfaceId'] = $this->oppositeInterfaceId;
        }
        if (null !== $this->oppositeInterfaceStatus) {
            $res['OppositeInterfaceStatus'] = $this->oppositeInterfaceStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->oppositeRouterId) {
            $res['OppositeRouterId'] = $this->oppositeRouterId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->reservationOrderType) {
            $res['ReservationOrderType'] = $this->reservationOrderType;
        }
        if (null !== $this->oppositeRouterType) {
            $res['OppositeRouterType'] = $this->oppositeRouterType;
        }
        if (null !== $this->oppositeBandwidth) {
            $res['OppositeBandwidth'] = $this->oppositeBandwidth;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->connectedTime) {
            $res['ConnectedTime'] = $this->connectedTime;
        }
        if (null !== $this->reservationActiveTime) {
            $res['ReservationActiveTime'] = $this->reservationActiveTime;
        }
        if (null !== $this->hcThreshold) {
            $res['HcThreshold'] = $this->hcThreshold;
        }
        if (null !== $this->reservationBandwidth) {
            $res['ReservationBandwidth'] = $this->reservationBandwidth;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->oppositeInterfaceOwnerId) {
            $res['OppositeInterfaceOwnerId'] = $this->oppositeInterfaceOwnerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->oppositeRegionId) {
            $res['OppositeRegionId'] = $this->oppositeRegionId;
        }
        if (null !== $this->healthCheckSourceIp) {
            $res['HealthCheckSourceIp'] = $this->healthCheckSourceIp;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }
        if (null !== $this->crossBorder) {
            $res['CrossBorder'] = $this->crossBorder;
        }
        if (null !== $this->hcRate) {
            $res['HcRate'] = $this->hcRate;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->reservationInternetChargeType) {
            $res['ReservationInternetChargeType'] = $this->reservationInternetChargeType;
        }
        if (null !== $this->oppositeInterfaceSpec) {
            $res['OppositeInterfaceSpec'] = $this->oppositeInterfaceSpec;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->oppositeVpcInstanceId) {
            $res['OppositeVpcInstanceId'] = $this->oppositeVpcInstanceId;
        }
        if (null !== $this->routerType) {
            $res['RouterType'] = $this->routerType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }
        if (null !== $this->oppositeInterfaceBusinessStatus) {
            $res['OppositeInterfaceBusinessStatus'] = $this->oppositeInterfaceBusinessStatus;
        }
        if (null !== $this->oppositeAccessPointId) {
            $res['OppositeAccessPointId'] = $this->oppositeAccessPointId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->healthCheckStatus) {
            $res['HealthCheckStatus'] = $this->healthCheckStatus;
        }
        if (null !== $this->healthCheckTargetIp) {
            $res['HealthCheckTargetIp'] = $this->healthCheckTargetIp;
        }
        if (null !== $this->routerInterfaceId) {
            $res['RouterInterfaceId'] = $this->routerInterfaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouterInterfaceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OppositeInterfaceId'])) {
            $model->oppositeInterfaceId = $map['OppositeInterfaceId'];
        }
        if (isset($map['OppositeInterfaceStatus'])) {
            $model->oppositeInterfaceStatus = $map['OppositeInterfaceStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OppositeRouterId'])) {
            $model->oppositeRouterId = $map['OppositeRouterId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReservationOrderType'])) {
            $model->reservationOrderType = $map['ReservationOrderType'];
        }
        if (isset($map['OppositeRouterType'])) {
            $model->oppositeRouterType = $map['OppositeRouterType'];
        }
        if (isset($map['OppositeBandwidth'])) {
            $model->oppositeBandwidth = $map['OppositeBandwidth'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ConnectedTime'])) {
            $model->connectedTime = $map['ConnectedTime'];
        }
        if (isset($map['ReservationActiveTime'])) {
            $model->reservationActiveTime = $map['ReservationActiveTime'];
        }
        if (isset($map['HcThreshold'])) {
            $model->hcThreshold = $map['HcThreshold'];
        }
        if (isset($map['ReservationBandwidth'])) {
            $model->reservationBandwidth = $map['ReservationBandwidth'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['OppositeInterfaceOwnerId'])) {
            $model->oppositeInterfaceOwnerId = $map['OppositeInterfaceOwnerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OppositeRegionId'])) {
            $model->oppositeRegionId = $map['OppositeRegionId'];
        }
        if (isset($map['HealthCheckSourceIp'])) {
            $model->healthCheckSourceIp = $map['HealthCheckSourceIp'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }
        if (isset($map['CrossBorder'])) {
            $model->crossBorder = $map['CrossBorder'];
        }
        if (isset($map['HcRate'])) {
            $model->hcRate = $map['HcRate'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ReservationInternetChargeType'])) {
            $model->reservationInternetChargeType = $map['ReservationInternetChargeType'];
        }
        if (isset($map['OppositeInterfaceSpec'])) {
            $model->oppositeInterfaceSpec = $map['OppositeInterfaceSpec'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['OppositeVpcInstanceId'])) {
            $model->oppositeVpcInstanceId = $map['OppositeVpcInstanceId'];
        }
        if (isset($map['RouterType'])) {
            $model->routerType = $map['RouterType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }
        if (isset($map['OppositeInterfaceBusinessStatus'])) {
            $model->oppositeInterfaceBusinessStatus = $map['OppositeInterfaceBusinessStatus'];
        }
        if (isset($map['OppositeAccessPointId'])) {
            $model->oppositeAccessPointId = $map['OppositeAccessPointId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['HealthCheckStatus'])) {
            $model->healthCheckStatus = $map['HealthCheckStatus'];
        }
        if (isset($map['HealthCheckTargetIp'])) {
            $model->healthCheckTargetIp = $map['HealthCheckTargetIp'];
        }
        if (isset($map['RouterInterfaceId'])) {
            $model->routerInterfaceId = $map['RouterInterfaceId'];
        }

        return $model;
    }
}
