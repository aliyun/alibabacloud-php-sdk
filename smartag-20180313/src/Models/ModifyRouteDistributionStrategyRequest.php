<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ModifyRouteDistributionStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $hcInstanceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $destCidrBlock;

    /**
     * @var string
     */
    public $routeSource;

    /**
     * @var string
     */
    public $routeDistribution;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'smartAGId'            => 'SmartAGId',
        'hcInstanceId'         => 'HcInstanceId',
        'sourceType'           => 'SourceType',
        'destCidrBlock'        => 'DestCidrBlock',
        'routeSource'          => 'RouteSource',
        'routeDistribution'    => 'RouteDistribution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->hcInstanceId) {
            $res['HcInstanceId'] = $this->hcInstanceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->destCidrBlock) {
            $res['DestCidrBlock'] = $this->destCidrBlock;
        }
        if (null !== $this->routeSource) {
            $res['RouteSource'] = $this->routeSource;
        }
        if (null !== $this->routeDistribution) {
            $res['RouteDistribution'] = $this->routeDistribution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRouteDistributionStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['HcInstanceId'])) {
            $model->hcInstanceId = $map['HcInstanceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['DestCidrBlock'])) {
            $model->destCidrBlock = $map['DestCidrBlock'];
        }
        if (isset($map['RouteSource'])) {
            $model->routeSource = $map['RouteSource'];
        }
        if (isset($map['RouteDistribution'])) {
            $model->routeDistribution = $map['RouteDistribution'];
        }

        return $model;
    }
}
