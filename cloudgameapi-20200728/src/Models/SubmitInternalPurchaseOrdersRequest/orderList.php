<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SubmitInternalPurchaseOrdersRequest;

use AlibabaCloud\Tea\Model;

class orderList extends Model
{
    /**
     * @var string
     */
    public $batchNumber;

    /**
     * @var int
     */
    public $finalPrice;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'batchNumber' => 'BatchNumber',
        'finalPrice'  => 'FinalPrice',
        'finishTime'  => 'FinishTime',
        'gameId'      => 'GameId',
        'orderId'     => 'OrderId',
        'roleId'      => 'RoleId',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchNumber) {
            $res['BatchNumber'] = $this->batchNumber;
        }
        if (null !== $this->finalPrice) {
            $res['FinalPrice'] = $this->finalPrice;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchNumber'])) {
            $model->batchNumber = $map['BatchNumber'];
        }
        if (isset($map['FinalPrice'])) {
            $model->finalPrice = $map['FinalPrice'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
