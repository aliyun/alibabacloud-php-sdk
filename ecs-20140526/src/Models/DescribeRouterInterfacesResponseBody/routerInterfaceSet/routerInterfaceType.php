<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouterInterfacesResponseBody\routerInterfaceSet;

use AlibabaCloud\Tea\Model;

class routerInterfaceType extends Model
{
    /**
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $oppositeInterfaceId;

    /**
     * @var string
     */
    public $routerInterfaceId;

    /**
     * @var string
     */
    public $chargeType;

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
    public $description;

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
    public $accessPointId;
    protected $_name = [
        'healthCheckTargetIp'             => 'HealthCheckTargetIp',
        'creationTime'                    => 'CreationTime',
        'status'                          => 'Status',
        'spec'                            => 'Spec',
        'oppositeInterfaceId'             => 'OppositeInterfaceId',
        'routerInterfaceId'               => 'RouterInterfaceId',
        'chargeType'                      => 'ChargeType',
        'oppositeRouterType'              => 'OppositeRouterType',
        'oppositeInterfaceOwnerId'        => 'OppositeInterfaceOwnerId',
        'description'                     => 'Description',
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
        'routerType'                      => 'RouterType',
        'role'                            => 'Role',
        'accessPointId'                   => 'AccessPointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckTargetIp) {
            $res['HealthCheckTargetIp'] = $this->healthCheckTargetIp;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->oppositeInterfaceId) {
            $res['OppositeInterfaceId'] = $this->oppositeInterfaceId;
        }
        if (null !== $this->routerInterfaceId) {
            $res['RouterInterfaceId'] = $this->routerInterfaceId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->oppositeRouterType) {
            $res['OppositeRouterType'] = $this->oppositeRouterType;
        }
        if (null !== $this->oppositeInterfaceOwnerId) {
            $res['OppositeInterfaceOwnerId'] = $this->oppositeInterfaceOwnerId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->routerType) {
            $res['RouterType'] = $this->routerType;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['HealthCheckTargetIp'])) {
            $model->healthCheckTargetIp = $map['HealthCheckTargetIp'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['OppositeInterfaceId'])) {
            $model->oppositeInterfaceId = $map['OppositeInterfaceId'];
        }
        if (isset($map['RouterInterfaceId'])) {
            $model->routerInterfaceId = $map['RouterInterfaceId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['OppositeRouterType'])) {
            $model->oppositeRouterType = $map['OppositeRouterType'];
        }
        if (isset($map['OppositeInterfaceOwnerId'])) {
            $model->oppositeInterfaceOwnerId = $map['OppositeInterfaceOwnerId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['RouterType'])) {
            $model->routerType = $map['RouterType'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }

        return $model;
    }
}
