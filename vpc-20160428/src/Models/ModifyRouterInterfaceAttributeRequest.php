<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyRouterInterfaceAttributeRequest extends Model
{
    /**
     * @description Specifies whether to delete the health check IP addresses configured on the router interface. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $deleteHealthCheckIp;

    /**
     * @description The description of the router interface.
     *
     * The value must be 2 to 256 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     * @example The description of the router interface.
     *
     * @var string
     */
    public $description;

    /**
     * @description The rate of health checks. Unit: milliseconds. The recommended value is **2000**. This value specifies the interval at which probe packets are sent during a health check.
     *
     * In this example, **HcThreshold** is set to **8** and **HcRate** is set to **2000**. In this example, probe packets are sent from **HealthCheckSourceIp** (source address) to **HealthCheckTargetIp** (destination address) every 2,000 seconds. If no response is returned for eight consecutive times, the health check fails.
     * @example 2000
     *
     * @var int
     */
    public $hcRate;

    /**
     * @description The healthy threshold. Unit: packets. We recommend that you set the value to **8**. This value specifies the number of probe packets that are sent during a health check.
     *
     * @example 8
     *
     * @var int
     */
    public $hcThreshold;

    /**
     * @description The source IP address that is used to perform health checks. The source IP address must be an idle IP address of the local virtual private cloud (VPC).
     *
     * >  You can set this parameter when an Express Connect circuit is used.
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @description The destination IP address that is used to perform health checks.
     *
     * >  This parameter is required when **HealthCheckSourceIp** is specified.
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @description The name of the router interface.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). The name must start with a letter.
     * @example TEST
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the peer router interface.
     *
     * @example ri-2zeo3xzyf38r4urz****
     *
     * @var string
     */
    public $oppositeInterfaceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the peer router interface belongs.
     *
     * @example 28768383240243****
     *
     * @var int
     */
    public $oppositeInterfaceOwnerId;

    /**
     * @description The ID of the peer router.
     *
     * @example vrt-bp1jcg5cmxjbl9xgc****
     *
     * @var string
     */
    public $oppositeRouterId;

    /**
     * @description The type of router to which the peer router interface belongs. Valid values:
     *
     *   **VRouter**
     *   **VBR** (default)
     *
     * @example VBR
     *
     * @var string
     */
    public $oppositeRouterType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the router interface.
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the router interface.
     *
     * This parameter is required.
     * @example ri-2zeo3xzyf38r4urz****
     *
     * @var string
     */
    public $routerInterfaceId;
    protected $_name = [
        'deleteHealthCheckIp'      => 'DeleteHealthCheckIp',
        'description'              => 'Description',
        'hcRate'                   => 'HcRate',
        'hcThreshold'              => 'HcThreshold',
        'healthCheckSourceIp'      => 'HealthCheckSourceIp',
        'healthCheckTargetIp'      => 'HealthCheckTargetIp',
        'name'                     => 'Name',
        'oppositeInterfaceId'      => 'OppositeInterfaceId',
        'oppositeInterfaceOwnerId' => 'OppositeInterfaceOwnerId',
        'oppositeRouterId'         => 'OppositeRouterId',
        'oppositeRouterType'       => 'OppositeRouterType',
        'ownerId'                  => 'OwnerId',
        'regionId'                 => 'RegionId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'routerInterfaceId'        => 'RouterInterfaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteHealthCheckIp) {
            $res['DeleteHealthCheckIp'] = $this->deleteHealthCheckIp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->oppositeInterfaceId) {
            $res['OppositeInterfaceId'] = $this->oppositeInterfaceId;
        }
        if (null !== $this->oppositeInterfaceOwnerId) {
            $res['OppositeInterfaceOwnerId'] = $this->oppositeInterfaceOwnerId;
        }
        if (null !== $this->oppositeRouterId) {
            $res['OppositeRouterId'] = $this->oppositeRouterId;
        }
        if (null !== $this->oppositeRouterType) {
            $res['OppositeRouterType'] = $this->oppositeRouterType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->routerInterfaceId) {
            $res['RouterInterfaceId'] = $this->routerInterfaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRouterInterfaceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteHealthCheckIp'])) {
            $model->deleteHealthCheckIp = $map['DeleteHealthCheckIp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OppositeInterfaceId'])) {
            $model->oppositeInterfaceId = $map['OppositeInterfaceId'];
        }
        if (isset($map['OppositeInterfaceOwnerId'])) {
            $model->oppositeInterfaceOwnerId = $map['OppositeInterfaceOwnerId'];
        }
        if (isset($map['OppositeRouterId'])) {
            $model->oppositeRouterId = $map['OppositeRouterId'];
        }
        if (isset($map['OppositeRouterType'])) {
            $model->oppositeRouterType = $map['OppositeRouterType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RouterInterfaceId'])) {
            $model->routerInterfaceId = $map['RouterInterfaceId'];
        }

        return $model;
    }
}
