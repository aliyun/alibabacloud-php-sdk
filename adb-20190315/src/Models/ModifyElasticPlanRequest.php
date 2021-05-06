<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ModifyElasticPlanRequest extends Model
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
     * @var int
     */
    public $elasticPlanNodeNum;

    /**
     * @var string
     */
    public $elasticPlanTimeStart;

    /**
     * @var string
     */
    public $elasticPlanTimeEnd;

    /**
     * @var string
     */
    public $elasticPlanWeeklyRepeat;

    /**
     * @var string
     */
    public $elasticPlanStartDay;

    /**
     * @var string
     */
    public $elasticPlanEndDay;

    /**
     * @var bool
     */
    public $elasticPlanEnable;
    protected $_name = [
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'ownerAccount'            => 'OwnerAccount',
        'DBClusterId'             => 'DBClusterId',
        'elasticPlanName'         => 'ElasticPlanName',
        'resourcePoolName'        => 'ResourcePoolName',
        'elasticPlanNodeNum'      => 'ElasticPlanNodeNum',
        'elasticPlanTimeStart'    => 'ElasticPlanTimeStart',
        'elasticPlanTimeEnd'      => 'ElasticPlanTimeEnd',
        'elasticPlanWeeklyRepeat' => 'ElasticPlanWeeklyRepeat',
        'elasticPlanStartDay'     => 'ElasticPlanStartDay',
        'elasticPlanEndDay'       => 'ElasticPlanEndDay',
        'elasticPlanEnable'       => 'ElasticPlanEnable',
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
        if (null !== $this->elasticPlanNodeNum) {
            $res['ElasticPlanNodeNum'] = $this->elasticPlanNodeNum;
        }
        if (null !== $this->elasticPlanTimeStart) {
            $res['ElasticPlanTimeStart'] = $this->elasticPlanTimeStart;
        }
        if (null !== $this->elasticPlanTimeEnd) {
            $res['ElasticPlanTimeEnd'] = $this->elasticPlanTimeEnd;
        }
        if (null !== $this->elasticPlanWeeklyRepeat) {
            $res['ElasticPlanWeeklyRepeat'] = $this->elasticPlanWeeklyRepeat;
        }
        if (null !== $this->elasticPlanStartDay) {
            $res['ElasticPlanStartDay'] = $this->elasticPlanStartDay;
        }
        if (null !== $this->elasticPlanEndDay) {
            $res['ElasticPlanEndDay'] = $this->elasticPlanEndDay;
        }
        if (null !== $this->elasticPlanEnable) {
            $res['ElasticPlanEnable'] = $this->elasticPlanEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyElasticPlanRequest
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
        if (isset($map['ElasticPlanNodeNum'])) {
            $model->elasticPlanNodeNum = $map['ElasticPlanNodeNum'];
        }
        if (isset($map['ElasticPlanTimeStart'])) {
            $model->elasticPlanTimeStart = $map['ElasticPlanTimeStart'];
        }
        if (isset($map['ElasticPlanTimeEnd'])) {
            $model->elasticPlanTimeEnd = $map['ElasticPlanTimeEnd'];
        }
        if (isset($map['ElasticPlanWeeklyRepeat'])) {
            $model->elasticPlanWeeklyRepeat = $map['ElasticPlanWeeklyRepeat'];
        }
        if (isset($map['ElasticPlanStartDay'])) {
            $model->elasticPlanStartDay = $map['ElasticPlanStartDay'];
        }
        if (isset($map['ElasticPlanEndDay'])) {
            $model->elasticPlanEndDay = $map['ElasticPlanEndDay'];
        }
        if (isset($map['ElasticPlanEnable'])) {
            $model->elasticPlanEnable = $map['ElasticPlanEnable'];
        }

        return $model;
    }
}
