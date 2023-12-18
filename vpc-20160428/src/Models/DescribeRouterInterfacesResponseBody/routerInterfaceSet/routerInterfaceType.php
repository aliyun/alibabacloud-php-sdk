<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesResponseBody\routerInterfaceSet;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesResponseBody\routerInterfaceSet\routerInterfaceType\tags;
use AlibabaCloud\Tea\Model;

class routerInterfaceType extends Model
{
    /**
     * @description The ID of the access point.
     *
     * @example ap-cn-shanghaiSZ-****
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description The bandwidth of the router interface. Unit: Mbit/s.
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The service status of the router interface. Valid values:
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
     * @description The billing method.
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the connection was established.
     *
     * The time follows the ISO8601 standard in the `YYYY-MM-DDThh:mmZ` format. The time is displayed in UTC.
     * @example 2021-06-08T12:20:55
     *
     * @var string
     */
    public $connectedTime;

    /**
     * @description The time when the route table was created.
     *
     * The time follows the ISO8601 standard in the `YYYY-MM-DDThh:mmZ` format. The time is displayed in UTC.
     * @example 2021-06-08T12:20:55
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether the connection is a cross-border connection.
     *
     * @example false
     *
     * @var bool
     */
    public $crossBorder;

    /**
     * @description The description of the router interface.
     *
     * @example The description of the router interface.
     *
     * @var string
     */
    public $description;

    /**
     * @description The end of the time range during which data was queried.
     *
     * The time follows the ISO8601 standard in the `YYYY-MM-DDThh:mmZ` format. The time is displayed in UTC.
     * @example 2021-06-08T12:20:55
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Indicates whether the VBR that is created in the Fast Link mode is uplinked to the router interface. The Fast Link mode helps automatically connect router interfaces that are created for the VBR and its peer VPC. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $fastLinkMode;

    /**
     * @description Indicates whether renewal data is included.
     *
     * @example false
     *
     * @var string
     */
    public $hasReservationData;

    /**
     * @description The rate of heath checks.
     *
     * @example 1
     *
     * @var int
     */
    public $hcRate;

    /**
     * @description The health check threshold.
     *
     * @example 2
     *
     * @var int
     */
    public $hcThreshold;

    /**
     * @description The source IP address that is used for the health check.
     *
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @description The destination IP address that is used for the health check.
     *
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @description Indicates whether protection against malicious IPv6 traffic is enabled. Valid values:
     *
     *   **on**
     *   **off**
     *   **unsupport**
     *
     * @example on
     *
     * @var string
     */
    public $ipv6Status;

    /**
     * @description The custom name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the peer access point.
     *
     * @example ap-cn-shanghaiSZ-****
     *
     * @var string
     */
    public $oppositeAccessPointId;

    /**
     * @description The maximum bandwidth of the peer router interface. Unit: Mbit/s.
     *
     * @example 12
     *
     * @var int
     */
    public $oppositeBandwidth;

    /**
     * @description The service status of the peer router interface.
     *
     * @example Normal
     *
     * @var string
     */
    public $oppositeInterfaceBusinessStatus;

    /**
     * @description The ID of the peer router interface.
     *
     * @example ri-bp1itx13bwe6f2wfh****
     *
     * @var string
     */
    public $oppositeInterfaceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the peer router interface belongs.
     *
     * @example 271598332402530847
     *
     * @var string
     */
    public $oppositeInterfaceOwnerId;

    /**
     * @description The specification of the peer router interface.
     *
     * @example Large
     *
     * @var string
     */
    public $oppositeInterfaceSpec;

    /**
     * @description The status of the peer router interface.
     *
     * @example Normal
     *
     * @var string
     */
    public $oppositeInterfaceStatus;

    /**
     * @description The region ID of the peer router interface.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $oppositeRegionId;

    /**
     * @description The ID of the router to which the peer router interface belongs.
     *
     * @example vrt-bp1d3bxtdv68tfd7g****
     *
     * @var string
     */
    public $oppositeRouterId;

    /**
     * @description The type of the router to which the peer router interface belongs.
     *
     * @example VRouter
     *
     * @var string
     */
    public $oppositeRouterType;

    /**
     * @description The ID of the peer VPC.
     *
     * @example vpc-bp1qpo0kug3a20qqe****
     *
     * @var string
     */
    public $oppositeVpcInstanceId;

    /**
     * @description The time when the renewal takes effect.
     *
     * The time follows the ISO8601 standard in the `YYYY-MM-DDThh:mmZ` format. The time is displayed in UTC.
     * @example 2021-03-11T16:00:00Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @description The maximum bandwidth after the renewal takes effect. Unit: Mbit/s.
     *
     * @example 10
     *
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @description The metering method that is used after the renewal takes effect. Valid values:
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @description The type of the renewal order. Valid values:
     *
     * @example RENEWCHANGE
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @description Resource Group ID.
     *
     * For more information about resource groups, please refer to [What is a Resource Group?](~~94475~~)
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the router interface is the initiator or acceptor of the peering connection.
     *
     * @example InitiatingSide
     *
     * @var string
     */
    public $role;

    /**
     * @description The ID of the router to which the route entry belongs.
     *
     * @example vrt-bp1d3bxtdv68tfd7g****
     *
     * @var string
     */
    public $routerId;

    /**
     * @description The ID of the router interface.
     *
     * @example ri-2zenfgfpyu3v93koa****
     *
     * @var string
     */
    public $routerInterfaceId;

    /**
     * @description The type of the router to which the route table belongs. Valid values:
     *
     *   **VRouter**
     *   **VBR**
     *
     * @example VRouter
     *
     * @var string
     */
    public $routerType;

    /**
     * @description The specification of the router interface.
     *
     * @example Large
     *
     * @var string
     */
    public $spec;

    /**
     * @description The status of the router interface.
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the resource.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the local virtual private cloud (VPC) in the peering connection.
     *
     * @example vpc-2ze3tq4uxhysg717x****
     *
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'accessPointId'                   => 'AccessPointId',
        'bandwidth'                       => 'Bandwidth',
        'businessStatus'                  => 'BusinessStatus',
        'chargeType'                      => 'ChargeType',
        'connectedTime'                   => 'ConnectedTime',
        'creationTime'                    => 'CreationTime',
        'crossBorder'                     => 'CrossBorder',
        'description'                     => 'Description',
        'endTime'                         => 'EndTime',
        'fastLinkMode'                    => 'FastLinkMode',
        'hasReservationData'              => 'HasReservationData',
        'hcRate'                          => 'HcRate',
        'hcThreshold'                     => 'HcThreshold',
        'healthCheckSourceIp'             => 'HealthCheckSourceIp',
        'healthCheckTargetIp'             => 'HealthCheckTargetIp',
        'ipv6Status'                      => 'Ipv6Status',
        'name'                            => 'Name',
        'oppositeAccessPointId'           => 'OppositeAccessPointId',
        'oppositeBandwidth'               => 'OppositeBandwidth',
        'oppositeInterfaceBusinessStatus' => 'OppositeInterfaceBusinessStatus',
        'oppositeInterfaceId'             => 'OppositeInterfaceId',
        'oppositeInterfaceOwnerId'        => 'OppositeInterfaceOwnerId',
        'oppositeInterfaceSpec'           => 'OppositeInterfaceSpec',
        'oppositeInterfaceStatus'         => 'OppositeInterfaceStatus',
        'oppositeRegionId'                => 'OppositeRegionId',
        'oppositeRouterId'                => 'OppositeRouterId',
        'oppositeRouterType'              => 'OppositeRouterType',
        'oppositeVpcInstanceId'           => 'OppositeVpcInstanceId',
        'reservationActiveTime'           => 'ReservationActiveTime',
        'reservationBandwidth'            => 'ReservationBandwidth',
        'reservationInternetChargeType'   => 'ReservationInternetChargeType',
        'reservationOrderType'            => 'ReservationOrderType',
        'resourceGroupId'                 => 'ResourceGroupId',
        'role'                            => 'Role',
        'routerId'                        => 'RouterId',
        'routerInterfaceId'               => 'RouterInterfaceId',
        'routerType'                      => 'RouterType',
        'spec'                            => 'Spec',
        'status'                          => 'Status',
        'tags'                            => 'Tags',
        'vpcInstanceId'                   => 'VpcInstanceId',
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->connectedTime) {
            $res['ConnectedTime'] = $this->connectedTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->crossBorder) {
            $res['CrossBorder'] = $this->crossBorder;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fastLinkMode) {
            $res['FastLinkMode'] = $this->fastLinkMode;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }
        if (null !== $this->hcRate) {
            $res['HcRate'] = $this->hcRate;
        }
        if (null !== $this->hcThreshold) {
            $res['HcThreshold'] = $this->hcThreshold;
        }
        if (null !== $this->healthCheckSourceIp) {
            $res['HealthCheckSourceIp'] = $this->healthCheckSourceIp;
        }
        if (null !== $this->healthCheckTargetIp) {
            $res['HealthCheckTargetIp'] = $this->healthCheckTargetIp;
        }
        if (null !== $this->ipv6Status) {
            $res['Ipv6Status'] = $this->ipv6Status;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->oppositeAccessPointId) {
            $res['OppositeAccessPointId'] = $this->oppositeAccessPointId;
        }
        if (null !== $this->oppositeBandwidth) {
            $res['OppositeBandwidth'] = $this->oppositeBandwidth;
        }
        if (null !== $this->oppositeInterfaceBusinessStatus) {
            $res['OppositeInterfaceBusinessStatus'] = $this->oppositeInterfaceBusinessStatus;
        }
        if (null !== $this->oppositeInterfaceId) {
            $res['OppositeInterfaceId'] = $this->oppositeInterfaceId;
        }
        if (null !== $this->oppositeInterfaceOwnerId) {
            $res['OppositeInterfaceOwnerId'] = $this->oppositeInterfaceOwnerId;
        }
        if (null !== $this->oppositeInterfaceSpec) {
            $res['OppositeInterfaceSpec'] = $this->oppositeInterfaceSpec;
        }
        if (null !== $this->oppositeInterfaceStatus) {
            $res['OppositeInterfaceStatus'] = $this->oppositeInterfaceStatus;
        }
        if (null !== $this->oppositeRegionId) {
            $res['OppositeRegionId'] = $this->oppositeRegionId;
        }
        if (null !== $this->oppositeRouterId) {
            $res['OppositeRouterId'] = $this->oppositeRouterId;
        }
        if (null !== $this->oppositeRouterType) {
            $res['OppositeRouterType'] = $this->oppositeRouterType;
        }
        if (null !== $this->oppositeVpcInstanceId) {
            $res['OppositeVpcInstanceId'] = $this->oppositeVpcInstanceId;
        }
        if (null !== $this->reservationActiveTime) {
            $res['ReservationActiveTime'] = $this->reservationActiveTime;
        }
        if (null !== $this->reservationBandwidth) {
            $res['ReservationBandwidth'] = $this->reservationBandwidth;
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
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->routerInterfaceId) {
            $res['RouterInterfaceId'] = $this->routerInterfaceId;
        }
        if (null !== $this->routerType) {
            $res['RouterType'] = $this->routerType;
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
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
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
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
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
        if (isset($map['ConnectedTime'])) {
            $model->connectedTime = $map['ConnectedTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CrossBorder'])) {
            $model->crossBorder = $map['CrossBorder'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FastLinkMode'])) {
            $model->fastLinkMode = $map['FastLinkMode'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }
        if (isset($map['HcRate'])) {
            $model->hcRate = $map['HcRate'];
        }
        if (isset($map['HcThreshold'])) {
            $model->hcThreshold = $map['HcThreshold'];
        }
        if (isset($map['HealthCheckSourceIp'])) {
            $model->healthCheckSourceIp = $map['HealthCheckSourceIp'];
        }
        if (isset($map['HealthCheckTargetIp'])) {
            $model->healthCheckTargetIp = $map['HealthCheckTargetIp'];
        }
        if (isset($map['Ipv6Status'])) {
            $model->ipv6Status = $map['Ipv6Status'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OppositeAccessPointId'])) {
            $model->oppositeAccessPointId = $map['OppositeAccessPointId'];
        }
        if (isset($map['OppositeBandwidth'])) {
            $model->oppositeBandwidth = $map['OppositeBandwidth'];
        }
        if (isset($map['OppositeInterfaceBusinessStatus'])) {
            $model->oppositeInterfaceBusinessStatus = $map['OppositeInterfaceBusinessStatus'];
        }
        if (isset($map['OppositeInterfaceId'])) {
            $model->oppositeInterfaceId = $map['OppositeInterfaceId'];
        }
        if (isset($map['OppositeInterfaceOwnerId'])) {
            $model->oppositeInterfaceOwnerId = $map['OppositeInterfaceOwnerId'];
        }
        if (isset($map['OppositeInterfaceSpec'])) {
            $model->oppositeInterfaceSpec = $map['OppositeInterfaceSpec'];
        }
        if (isset($map['OppositeInterfaceStatus'])) {
            $model->oppositeInterfaceStatus = $map['OppositeInterfaceStatus'];
        }
        if (isset($map['OppositeRegionId'])) {
            $model->oppositeRegionId = $map['OppositeRegionId'];
        }
        if (isset($map['OppositeRouterId'])) {
            $model->oppositeRouterId = $map['OppositeRouterId'];
        }
        if (isset($map['OppositeRouterType'])) {
            $model->oppositeRouterType = $map['OppositeRouterType'];
        }
        if (isset($map['OppositeVpcInstanceId'])) {
            $model->oppositeVpcInstanceId = $map['OppositeVpcInstanceId'];
        }
        if (isset($map['ReservationActiveTime'])) {
            $model->reservationActiveTime = $map['ReservationActiveTime'];
        }
        if (isset($map['ReservationBandwidth'])) {
            $model->reservationBandwidth = $map['ReservationBandwidth'];
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
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['RouterInterfaceId'])) {
            $model->routerInterfaceId = $map['RouterInterfaceId'];
        }
        if (isset($map['RouterType'])) {
            $model->routerType = $map['RouterType'];
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
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        return $model;
    }
}
