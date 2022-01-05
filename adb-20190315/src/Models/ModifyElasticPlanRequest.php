<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ModifyElasticPlanRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var bool
     */
    public $elasticPlanEnable;

    /**
     * @var string
     */
    public $elasticPlanEndDay;

    /**
     * @var string
     */
    public $elasticPlanName;

    /**
     * @var int
     */
    public $elasticPlanNodeNum;

    /**
     * @var string
     */
    public $elasticPlanStartDay;

    /**
     * @var string
     */
    public $elasticPlanTimeEnd;

    /**
     * @var string
     */
    public $elasticPlanTimeStart;

    /**
     * @var string
     */
    public $elasticPlanWeeklyRepeat;

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
        'elasticPlanWeeklyRepeat' => 'ElasticPlanWeeklyRepeat',
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
        if (null !== $this->elasticPlanWeeklyRepeat) {
            $res['ElasticPlanWeeklyRepeat'] = $this->elasticPlanWeeklyRepeat;
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
     * @return ModifyElasticPlanRequest
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
        if (isset($map['ElasticPlanWeeklyRepeat'])) {
            $model->elasticPlanWeeklyRepeat = $map['ElasticPlanWeeklyRepeat'];
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
