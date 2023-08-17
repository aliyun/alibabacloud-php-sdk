<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticPlanRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the cluster IDs of all AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a specific region.
     * @example am-bp278jg9****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies whether the scaling plan takes effect. Default value: true. Valid values:
     *
     *   **true**: The scaling plan takes effect.
     *   **false**: The scaling plan does not take effect.
     *
     * @example true
     *
     * @var bool
     */
    public $elasticPlanEnable;

    /**
     * @description The name of the scaling plan.
     *
     *   The name must be 2 to 30 characters in length.
     *
     *   The name can contain letters, digits, and underscores (\_).
     *
     * >  If you do not specify this parameter, the details of all scaling plans for the specified cluster are returned.
     * @example realtime
     *
     * @var string
     */
    public $elasticPlanName;

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
     * @description The name of the resource group.
     *
     * > *   You can call the [DescribeDBResourceGroup](~~466685~~) operation to query the resource group name.
     * @example USER_DEFAULT
     *
     * @var string
     */
    public $resourcePoolName;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'elasticPlanEnable'    => 'ElasticPlanEnable',
        'elasticPlanName'      => 'ElasticPlanName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourcePoolName'     => 'ResourcePoolName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->elasticPlanEnable) {
            $res['ElasticPlanEnable'] = $this->elasticPlanEnable;
        }
        if (null !== $this->elasticPlanName) {
            $res['ElasticPlanName'] = $this->elasticPlanName;
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
        if (null !== $this->resourcePoolName) {
            $res['ResourcePoolName'] = $this->resourcePoolName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ElasticPlanEnable'])) {
            $model->elasticPlanEnable = $map['ElasticPlanEnable'];
        }
        if (isset($map['ElasticPlanName'])) {
            $model->elasticPlanName = $map['ElasticPlanName'];
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
        if (isset($map['ResourcePoolName'])) {
            $model->resourcePoolName = $map['ResourcePoolName'];
        }

        return $model;
    }
}
