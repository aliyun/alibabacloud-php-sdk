<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticDailyPlanRequest extends Model
{
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
    public $ownerAccount;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $elasticPlanName;

    /**
     * @var string
     */
    public $resourcePoolName;

    /**
     * @var string
     */
    public $elasticDailyPlanDay;

    /**
     * @var string
     */
    public $elasticDailyPlanStatusList;
    protected $_name = [
        'ownerId'                    => 'OwnerId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'ownerAccount'               => 'OwnerAccount',
        'DBClusterId'                => 'DBClusterId',
        'elasticPlanName'            => 'ElasticPlanName',
        'resourcePoolName'           => 'ResourcePoolName',
        'elasticDailyPlanDay'        => 'ElasticDailyPlanDay',
        'elasticDailyPlanStatusList' => 'ElasticDailyPlanStatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->elasticPlanName) {
            $res['ElasticPlanName'] = $this->elasticPlanName;
        }
        if (null !== $this->resourcePoolName) {
            $res['ResourcePoolName'] = $this->resourcePoolName;
        }
        if (null !== $this->elasticDailyPlanDay) {
            $res['ElasticDailyPlanDay'] = $this->elasticDailyPlanDay;
        }
        if (null !== $this->elasticDailyPlanStatusList) {
            $res['ElasticDailyPlanStatusList'] = $this->elasticDailyPlanStatusList;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ElasticPlanName'])) {
            $model->elasticPlanName = $map['ElasticPlanName'];
        }
        if (isset($map['ResourcePoolName'])) {
            $model->resourcePoolName = $map['ResourcePoolName'];
        }
        if (isset($map['ElasticDailyPlanDay'])) {
            $model->elasticDailyPlanDay = $map['ElasticDailyPlanDay'];
        }
        if (isset($map['ElasticDailyPlanStatusList'])) {
            $model->elasticDailyPlanStatusList = $map['ElasticDailyPlanStatusList'];
        }

        return $model;
    }
}
