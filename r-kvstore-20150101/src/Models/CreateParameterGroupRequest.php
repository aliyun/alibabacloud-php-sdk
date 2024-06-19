<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class CreateParameterGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example enterprise
     *
     * @var string
     */
    public $category;

    /**
     * @description This parameter is required.
     *
     * @example redis
     *
     * @var string
     */
    public $engineType;

    /**
     * @description This parameter is required.
     *
     * @example 6.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example test
     *
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @description This parameter is required.
     *
     * @example tw_test1
     *
     * @var string
     */
    public $parameterGroupName;

    /**
     * @description This parameter is required.
     *
     * @example {"hz":"15","#no_loose_disabled-commands":"flushall"}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
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
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'category'             => 'Category',
        'engineType'           => 'EngineType',
        'engineVersion'        => 'EngineVersion',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'parameterGroupDesc'   => 'ParameterGroupDesc',
        'parameterGroupName'   => 'ParameterGroupName',
        'parameters'           => 'Parameters',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parameterGroupDesc) {
            $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
        }
        if (null !== $this->parameterGroupName) {
            $res['ParameterGroupName'] = $this->parameterGroupName;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateParameterGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParameterGroupDesc'])) {
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
        }
        if (isset($map['ParameterGroupName'])) {
            $model->parameterGroupName = $map['ParameterGroupName'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
