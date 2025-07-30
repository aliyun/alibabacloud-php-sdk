<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class CreateParameterGroupRequest extends Model
{
    /**
     * @description The service category. Valid values:
     *
     *   **standard**: Community Edition
     *   **enterprise**: Enhanced Edition (Tair)
     *
     * This parameter is required.
     *
     * @example enterprise
     *
     * @var string
     */
    public $category;

    /**
     * @description The engine type. Valid values:
     *
     *   **redis**: ApsaraDB for Redis Community Edition instance or Tair DRAM-based instance
     *   **tair_pena**: Tair persistent memory-optimized instance
     *   **tair_pdb**: Tair ESSD/SSD-based instance
     *
     * This parameter is required.
     *
     * @example redis
     *
     * @var string
     */
    public $engineType;

    /**
     * @description The compatible engine version. Valid values:
     *
     *   For ApsaraDB for Redis Community Edition instances, set the parameter to **5.0**, **6.0**, or **7.0**.
     *   For Tair DRAM-based instances that are compatible with Redis 5.0, 6.0, or 7.0, set the parameter to **5.0**, **6.0**, or **7.0**.
     *   For Tair persistent memory-optimized instances that are compatible with Redis 6.0, set the parameter to **1.0**.
     *   For Tair ESSD-based instances that are compatible with Redis 6.0, set the parameter to **1.0**. For Tair SSD-based instances that are compatible with Redis 6.0, set the parameter to **2.0**.
     *
     * This parameter is required.
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
     * @description The description of the parameter template. The description must be 0 to 200 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @description The new name of the parameter template. The name must meet the following requirements:
     *
     *   The name can contain letters, digits, and underscores (_). It must start with a letter and cannot contain Chinese characters.
     *   The name can be 8 to 64 characters in length.
     *
     * This parameter is required.
     *
     * @example tw_test1
     *
     * @var string
     */
    public $parameterGroupName;

    /**
     * @description A JSON-formatted object that specifies the parameter-value pairs. Format: {"Parameter 1":"Value 1","Parameter 2":"Value 2"...}. The specified value overwrites the original content.
     *
     * >  The parameters that can be added for different editions are displayed in the console.
     *
     * This parameter is required.
     *
     * @example {"hz":"15","#no_loose_disabled-commands":"flushall"}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The region ID.
     *
     * This parameter is required.
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
        'category' => 'Category',
        'engineType' => 'EngineType',
        'engineVersion' => 'EngineVersion',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'parameterGroupName' => 'ParameterGroupName',
        'parameters' => 'Parameters',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate() {}

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
