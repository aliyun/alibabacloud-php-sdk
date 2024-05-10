<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfaceAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeRouterInterfaceAttributeResponseBody extends Model
{
    /**
     * @description The ID of the access point.
     *
     * @example ap-cn-qingdao-ls-A
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description The bandwidth of the router interface. Unit: Mbit/s.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The status of the router interface. Valid values:
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
     * @description The billing method. Valid values:
     *
     *   **AfterPay**: pay-as-you-go
     *   **PrePaid**: subscription
     *
     * @example AfterPay
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the connection was established.
     *
     * @example 2022-04-14T08:58:04Z
     *
     * @var string
     */
    public $connectedTime;

    /**
     * @description The time when the router interface was created.
     *
     * @example 2022-04-14T08:57:24Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether the connection is a cross-border connection. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example false
     *
     * @var bool
     */
    public $crossBorder;

    /**
     * @description The description of the router interface.
     *
     * @example Peer interface.
     *
     * @var string
     */
    public $description;

    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2999-09-08T16:00:00Z
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
     * >
     *
     *   This parameter takes effect only when **RouterType** is set to **VBR** and **OppositeRouterType** is set to **VRouter**.
     *
     *   When **FastLinkMode** is set to **true**, **Role** must be set to **InitiatingSide**. **AccessPointId**, **OppositeRouterType**, **OpppsiteRouterId**, and **OppositeInterfaceOwnerId** are required.
     *
     * @example false
     *
     * @var string
     */
    public $fastLinkMode;

    /**
     * @description The time when the router interface was modified.
     *
     * @example 2022-04-28T10:02:12Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Indicates whether renewal data is included. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example false
     *
     * @var string
     */
    public $hasReservationData;

    /**
     * @description The rate of health checks. Unit: seconds. The value indicates the interval at which probe packets are sent during a health check.
     *
     * @example 2
     *
     * @var int
     */
    public $hcRate;

    /**
     * @description The healthy threshold. This value indicates the number of probe packets that are sent during a health check. Unit: packets.
     *
     * @example 8
     *
     * @var int
     */
    public $hcThreshold;

    /**
     * @description The source IP address that is used for the health check.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @description The status of the health check. Valid values:
     *
     *   **Abnormal**
     *   **Normal**
     *   **NoRedundantRoute**
     *   **NoHealthCheckConfig**
     *
     * @example normal
     *
     * @var string
     */
    public $healthCheckStatus;

    /**
     * @description The destination IP address that is used for the health check.
     *
     * @example 2.2.XX.XX
     *
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @description The response parameters.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the router interface.
     *
     * @example RouterInterface1
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the peer access point.
     *
     * @example ap-cn-qingdao-ls-B
     *
     * @var string
     */
    public $oppositeAccessPointId;

    /**
     * @description The maximum bandwidth of the peer router interface. Unit: Mbit/s.
     *
     * @example 0
     *
     * @var int
     */
    public $oppositeBandwidth;

    /**
     * @description The service status of the peer router interface. Valid values:
     *
     *   **Normal**
     *   **FinancialLocked**
     *   **SecurityLocked**
     *
     * @example Normal
     *
     * @var string
     */
    public $oppositeInterfaceBusinessStatus;

    /**
     * @description The ID of the peer router interface.
     *
     * @example ri-bp1xkrzttximaoxbl****
     *
     * @var string
     */
    public $oppositeInterfaceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the peer router interface belongs.
     *
     * @example 1321932713****
     *
     * @var string
     */
    public $oppositeInterfaceOwnerId;

    /**
     * @description The specification of the peer router interface. Valid values:
     *
     *   **Mini.2**: 2 Mbit/s
     *   **Mini.5**: 5 Mbit/s
     *   **Small.1**: 10 Mbit/s
     *   **Small.2**: 20 Mbit/s
     *   **Small.5**: 50 Mbit/s
     *   **Middle.1**: 100 Mbit/s
     *   **Middle.2**: 200 Mbit/s
     *   **Middle.5**: 500 Mbit/s
     *   **Large.1**: 1,000 Mbit/s
     *   **Large.2**: 2,000 Mbit/s
     *   **Large.5**: 5,000 Mbit/s
     *   **Xlarge.1**: 10,000 Mbit/s
     *   **Negative**: not applicable
     *
     * @example Negative
     *
     * @var string
     */
    public $oppositeInterfaceSpec;

    /**
     * @description The status of the peer router interface. Valid values:
     *
     *   **Idle**
     *   **AcceptingConnecting**
     *   **Connecting**
     *   **Activating**
     *   **Active**
     *   **Modifying**
     *   **Deactivating**
     *   **Inactive**
     *   **Deleting**
     *   **Deleted**
     *
     * @example Active
     *
     * @var string
     */
    public $oppositeInterfaceStatus;

    /**
     * @description The region ID of the peer router interface.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $oppositeRegionId;

    /**
     * @description The ID of the router to which the peer router interface belongs.
     *
     * @example vrt-bp11xvy6lb9photuu****
     *
     * @var string
     */
    public $oppositeRouterId;

    /**
     * @description The type of the router to which the peer router interface belongs. Valid values:
     *
     *   **VRouter**
     *   **VBR**
     *
     * @example VRouter
     *
     * @var string
     */
    public $oppositeRouterType;

    /**
     * @description The ID of the peer VPC.
     *
     * @example vpc-bp1b49rqrybk45nio****
     *
     * @var string
     */
    public $oppositeVpcInstanceId;

    /**
     * @description The request ID.
     *
     * @example 01818199-04F6-47F4-9ADF-7CC824CF57A4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the renewal takes effect.
     *
     * @example 2022-06-11T16:00:00Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @description The maximum bandwidth after the renewal takes effect. Unit: Mbit/s.
     *
     * @example 100
     *
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @description The metering method that is used after the renewal takes effect. Valid values: If **PayByBandwidth** is returned, it indicates that the Express Connect circuit is billed on a pay-by-bandwidth basis.
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @description The type of the renewal order. Only **RENEW** may be returned, which indicates that the order is placed for service renewal.
     *
     * @example RENEW
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @description The resource group ID.
     *
     * For more information about resource groups, see [What is a resource group?](https://help.aliyun.com/document_detail/94475.html)
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The role of the router interface in the peering connection.
     *
     * @example InitiatingSide
     *
     * @var string
     */
    public $role;

    /**
     * @description The ID of the router to which the router interface belongs.
     *
     * @example vbr-m5ex0xf63xk8s5bob****
     *
     * @var string
     */
    public $routerId;

    /**
     * @description The ID of the router interface.
     *
     * @example ri-m5egfc10sednwk2yt****
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
     * @description The specification of the router interface. Valid values:
     *
     *   **Mini.2**: 2 Mbit/s
     *   **Mini.5**: 5 Mbit/s
     *   **Small.1**: 10 Mbit/s
     *   **Small.2**: 20 Mbit/s
     *   **Small.5**: 50 Mbit/s
     *   **Middle.1**: 100 Mbit/s
     *   **Middle.2**: 200 Mbit/s
     *   **Middle.5**: 500 Mbit/s
     *   **Large.1**: 1,000 Mbit/s
     *   **Large.2**: 2,000 Mbit/s
     *   **Large.5**: 5,000 Mbit/s
     *   **Xlarge.1**: 10,000 Mbit/s
     *
     * @example Mini.2
     *
     * @var string
     */
    public $spec;

    /**
     * @description The status of the router interface. Valid values:
     *
     *   **Idle**
     *   **AcceptingConnecting**
     *   **Connecting**
     *   **Activating**
     *   **Active**
     *   **Modifying**
     *   **Deactivating**
     *   **Inactive**
     *   **Deleting**
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the request is successful. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The tag of the resource.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the router interface belongs.
     *
     * @example vpc-bp1b49rqrybk45nio****
     *
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'accessPointId'                   => 'AccessPointId',
        'bandwidth'                       => 'Bandwidth',
        'businessStatus'                  => 'BusinessStatus',
        'chargeType'                      => 'ChargeType',
        'code'                            => 'Code',
        'connectedTime'                   => 'ConnectedTime',
        'creationTime'                    => 'CreationTime',
        'crossBorder'                     => 'CrossBorder',
        'description'                     => 'Description',
        'endTime'                         => 'EndTime',
        'fastLinkMode'                    => 'FastLinkMode',
        'gmtModified'                     => 'GmtModified',
        'hasReservationData'              => 'HasReservationData',
        'hcRate'                          => 'HcRate',
        'hcThreshold'                     => 'HcThreshold',
        'healthCheckSourceIp'             => 'HealthCheckSourceIp',
        'healthCheckStatus'               => 'HealthCheckStatus',
        'healthCheckTargetIp'             => 'HealthCheckTargetIp',
        'message'                         => 'Message',
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
        'requestId'                       => 'RequestId',
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
        'success'                         => 'Success',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (null !== $this->healthCheckStatus) {
            $res['HealthCheckStatus'] = $this->healthCheckStatus;
        }
        if (null !== $this->healthCheckTargetIp) {
            $res['HealthCheckTargetIp'] = $this->healthCheckTargetIp;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
     * @return DescribeRouterInterfaceAttributeResponseBody
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
        if (isset($map['HealthCheckStatus'])) {
            $model->healthCheckStatus = $map['HealthCheckStatus'];
        }
        if (isset($map['HealthCheckTargetIp'])) {
            $model->healthCheckTargetIp = $map['HealthCheckTargetIp'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
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
