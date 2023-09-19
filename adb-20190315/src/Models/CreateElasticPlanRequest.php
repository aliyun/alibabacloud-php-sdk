<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class CreateElasticPlanRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * > You can call the [DescribeDBClusters](~~129857~~) operation to query the IDs of all AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a region.
     * @example am-bp1d8lbdj22rx****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies whether the scaling plan takes effect. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $elasticPlanEnable;

    /**
     * @description The end date of the scaling plan. Specify the date in the yyyy-MM-dd format.
     *
     * @example 2022-12-09
     *
     * @var string
     */
    public $elasticPlanEndDay;

    /**
     * @description The name of the scaling plan.
     *
     *   The name must be 2 to 30 characters in length.
     *   The name can contain letters, digits, and underscores (\_).
     *
     * @example test
     *
     * @var string
     */
    public $elasticPlanName;

    /**
     * @description The number of nodes that are involved in the scaling plan.
     *
     *   If ElasticPlanType is set to **worker**, you can set this parameter to 0 or leave this parameter empty.
     *   If ElasticPlanType is set to **executorcombineworker** or **executor**, you must set this parameter to a value that is greater than 0.
     *
     * @example 0
     *
     * @var int
     */
    public $elasticPlanNodeNum;

    /**
     * @description The start date of the scaling plan. Specify the date in the yyyy-MM-dd format.
     *
     * @example 2022-12-02
     *
     * @var string
     */
    public $elasticPlanStartDay;

    /**
     * @description The restoration time of the scaling plan. Specify the time on the hour in the HH:mm:ss format. The interval between the scale-up time and the restoration time cannot be more than 24 hours.
     *
     * @example 10:00:00
     *
     * @var string
     */
    public $elasticPlanTimeEnd;

    /**
     * @description The scale-up time of the scaling plan. Specify the time on the hour in the HH:mm:ss format.
     *
     * @example 08:00:00
     *
     * @var string
     */
    public $elasticPlanTimeStart;

    /**
     * @description The type of the scaling plan. Valid values:
     *
     *   **worker**: scales only elastic I/O resources.
     *   **executor**: scales only computing resources.
     *   **executorcombineworker** (default): scales both elastic I/O resources and computing resources by proportion.
     * > - If you want to set this parameter to **executorcombineworker**, make sure that the cluster runs a minor version of 3.1.3.2 or later.
     * > - If you want to set this parameter to **worker** or **executor**, make sure that the cluster runs a minor version of 3.1.6.1 or later and a ticket is submitted. After your request is approved, you can set this parameter to **worker** or **executor**.
     * @example worker
     *
     * @var string
     */
    public $elasticPlanType;

    /**
     * @description The days of the week when you want to execute the scaling plan. Valid values: 0 to 6, which indicates Sunday to Saturday. Separate multiple values with commas (,).
     *
     * @example 1,2,3,4,5
     *
     * @var string
     */
    public $elasticPlanWeeklyRepeat;

    /**
     * @description The resource specifications that can be scaled up by the scaling plan. Valid values:
     *
     *   8 Core 64 GB (default)
     *   16 Core 64 GB
     *   32 Core 64 GB
     *   64 Core 128 GB
     *   12 Core 96 GB
     *   24 Core 96 GB
     *   52 Core 86 GB
     *
     * @example 32 Core 64 GB
     *
     * @var string
     */
    public $elasticPlanWorkerSpec;

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
     * > You can call the [DescribeDBResourceGroup](~~466685~~) operation to query the resource group name.
     * @example realtime
     *
     * @var string
     */
    public $resourcePoolName;
    protected $_name = [
        'DBClusterId'             => 'DBClusterId',
        'elasticPlanEnable'       => 'ElasticPlanEnable',
        'elasticPlanEndDay'       => 'ElasticPlanEndDay',
        'elasticPlanName'         => 'ElasticPlanName',
        'elasticPlanNodeNum'      => 'ElasticPlanNodeNum',
        'elasticPlanStartDay'     => 'ElasticPlanStartDay',
        'elasticPlanTimeEnd'      => 'ElasticPlanTimeEnd',
        'elasticPlanTimeStart'    => 'ElasticPlanTimeStart',
        'elasticPlanType'         => 'ElasticPlanType',
        'elasticPlanWeeklyRepeat' => 'ElasticPlanWeeklyRepeat',
        'elasticPlanWorkerSpec'   => 'ElasticPlanWorkerSpec',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'resourcePoolName'        => 'ResourcePoolName',
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
        if (null !== $this->elasticPlanEndDay) {
            $res['ElasticPlanEndDay'] = $this->elasticPlanEndDay;
        }
        if (null !== $this->elasticPlanName) {
            $res['ElasticPlanName'] = $this->elasticPlanName;
        }
        if (null !== $this->elasticPlanNodeNum) {
            $res['ElasticPlanNodeNum'] = $this->elasticPlanNodeNum;
        }
        if (null !== $this->elasticPlanStartDay) {
            $res['ElasticPlanStartDay'] = $this->elasticPlanStartDay;
        }
        if (null !== $this->elasticPlanTimeEnd) {
            $res['ElasticPlanTimeEnd'] = $this->elasticPlanTimeEnd;
        }
        if (null !== $this->elasticPlanTimeStart) {
            $res['ElasticPlanTimeStart'] = $this->elasticPlanTimeStart;
        }
        if (null !== $this->elasticPlanType) {
            $res['ElasticPlanType'] = $this->elasticPlanType;
        }
        if (null !== $this->elasticPlanWeeklyRepeat) {
            $res['ElasticPlanWeeklyRepeat'] = $this->elasticPlanWeeklyRepeat;
        }
        if (null !== $this->elasticPlanWorkerSpec) {
            $res['ElasticPlanWorkerSpec'] = $this->elasticPlanWorkerSpec;
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
     * @return CreateElasticPlanRequest
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
        if (isset($map['ElasticPlanEndDay'])) {
            $model->elasticPlanEndDay = $map['ElasticPlanEndDay'];
        }
        if (isset($map['ElasticPlanName'])) {
            $model->elasticPlanName = $map['ElasticPlanName'];
        }
        if (isset($map['ElasticPlanNodeNum'])) {
            $model->elasticPlanNodeNum = $map['ElasticPlanNodeNum'];
        }
        if (isset($map['ElasticPlanStartDay'])) {
            $model->elasticPlanStartDay = $map['ElasticPlanStartDay'];
        }
        if (isset($map['ElasticPlanTimeEnd'])) {
            $model->elasticPlanTimeEnd = $map['ElasticPlanTimeEnd'];
        }
        if (isset($map['ElasticPlanTimeStart'])) {
            $model->elasticPlanTimeStart = $map['ElasticPlanTimeStart'];
        }
        if (isset($map['ElasticPlanType'])) {
            $model->elasticPlanType = $map['ElasticPlanType'];
        }
        if (isset($map['ElasticPlanWeeklyRepeat'])) {
            $model->elasticPlanWeeklyRepeat = $map['ElasticPlanWeeklyRepeat'];
        }
        if (isset($map['ElasticPlanWorkerSpec'])) {
            $model->elasticPlanWorkerSpec = $map['ElasticPlanWorkerSpec'];
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
