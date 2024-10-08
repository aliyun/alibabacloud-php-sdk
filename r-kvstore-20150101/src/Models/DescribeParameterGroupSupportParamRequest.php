<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeParameterGroupSupportParamRequest extends Model
{
    /**
     * @description The service category. Valid values:
     *
     *   **standard**: ApsaraDB for Redis Community Edition
     *   **enterprise**: ApsaraDB for Redis Enhanced Edition (Tair)
     *
     * @example standard
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
     * @example redis
     *
     * @var string
     */
    public $engineType;

    /**
     * @description The compatible engine version. Valid values:
     *
     *   For ApsaraDB for Redis Community Edition instances, set the parameter to **5.0**, **6.0**, or **7.0**.
     *   For Tair DRAM-based instances that are compatible with Redis 5.0 or Redis 6.0, set the parameter to **5.0** or **6.0**.
     *   For Tair persistent memory-optimized instances that are compatible with Redis 6.0, set the parameter to **1.0**.
     *   For Tair ESSD-based instances that are compatible with Redis 6.0, set the parameter to **1.0**. For Tair SSD-based instances that are compatible with Redis 6.0, set the parameter to **2.0**.
     *
     * This parameter is required.
     * @example 5
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
     * @return DescribeParameterGroupSupportParamRequest
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
