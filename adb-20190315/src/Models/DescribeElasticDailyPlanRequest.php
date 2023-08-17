<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticDailyPlanRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the cluster IDs of all AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a specific region.
     * @example am-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The start date of the current-day scaling plan. Specify the date in the yyyy-MM-dd format.
     *
     * @example 2022-12-02
     *
     * @var string
     */
    public $elasticDailyPlanDay;

    /**
     * @description The execution state of the current-day scaling plan. Separate multiple values with commas (,). Valid values:
     *
     *   **1**: The scaling plan is not executed.
     *   **2**: The scaling plan is being executed.
     *   **3**: The scaling plan is executed.
     *   **4**: The scaling plan fails to be executed.
     *
     * @example 3
     *
     * @var string
     */
    public $elasticDailyPlanStatusList;

    /**
     * @description The name of the scaling plan. Valid values:
     *
     *   The name must be 2 to 30 characters in length.
     *   The name can contain letters, digits, and underscores (\_).
     *
     * @example realtimeplan
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
     * >  You can call the [DescribeDBResourceGroup](~~466685~~) operation to query the resource group name.
     * @example test
     *
     * @var string
     */
    public $resourcePoolName;
    protected $_name = [
        'DBClusterId'                => 'DBClusterId',
        'elasticDailyPlanDay'        => 'ElasticDailyPlanDay',
        'elasticDailyPlanStatusList' => 'ElasticDailyPlanStatusList',
        'elasticPlanName'            => 'ElasticPlanName',
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'resourcePoolName'           => 'ResourcePoolName',
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
        if (null !== $this->elasticDailyPlanDay) {
            $res['ElasticDailyPlanDay'] = $this->elasticDailyPlanDay;
        }
        if (null !== $this->elasticDailyPlanStatusList) {
            $res['ElasticDailyPlanStatusList'] = $this->elasticDailyPlanStatusList;
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
     * @return DescribeElasticDailyPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ElasticDailyPlanDay'])) {
            $model->elasticDailyPlanDay = $map['ElasticDailyPlanDay'];
        }
        if (isset($map['ElasticDailyPlanStatusList'])) {
            $model->elasticDailyPlanStatusList = $map['ElasticDailyPlanStatusList'];
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
