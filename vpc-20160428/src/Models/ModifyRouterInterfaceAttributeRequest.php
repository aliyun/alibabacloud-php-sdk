<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyRouterInterfaceAttributeRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $deleteHealthCheckIp;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2
     *
     * @var int
     */
    public $hcRate;

    /**
     * @example 8
     *
     * @var int
     */
    public $hcThreshold;

    /**
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @example TEST
     *
     * @var string
     */
    public $name;

    /**
     * @example ri-2zeo3xzyf38r4urz****
     *
     * @var string
     */
    public $oppositeInterfaceId;

    /**
     * @example 28768383240243****
     *
     * @var int
     */
    public $oppositeInterfaceOwnerId;

    /**
     * @example vrt-bp1jcg5cmxjbl9xgc****
     *
     * @var string
     */
    public $oppositeRouterId;

    /**
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
