<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\DeliveryItemDetailSynRequest;

use AlibabaCloud\Tea\Model;

class deliveryItemDetailDTOS extends Model
{
    /**
     * @var string
     */
    public $actualSupplyTime;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $deliveredAmount;

    /**
     * @var string
     */
    public $deliveryItemId;

    /**
     * @var string
     */
    public $deliveryPlanId;

    /**
     * @var string
     */
    public $lastSupplyTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subDemandSupplyPerformerName;

    /**
     * @var string
     */
    public $subDemandSupplyPerformerUid;

    /**
     * @var string
     */
    public $subDemandSupplyPmName;

    /**
     * @var string
     */
    public $subDemandSupplyPmUid;

    /**
     * @var int
     */
    public $subOrderId;

    /**
     * @var string
     */
    public $supplyStatus;

    /**
     * @var int
     */
    public $totalOrderId;
    protected $_name = [
        'actualSupplyTime' => 'actualSupplyTime',
        'amount' => 'amount',
        'comment' => 'comment',
        'deliveredAmount' => 'deliveredAmount',
        'deliveryItemId' => 'deliveryItemId',
        'deliveryPlanId' => 'deliveryPlanId',
        'lastSupplyTime' => 'lastSupplyTime',
        'status' => 'status',
        'subDemandSupplyPerformerName' => 'subDemandSupplyPerformerName',
        'subDemandSupplyPerformerUid' => 'subDemandSupplyPerformerUid',
        'subDemandSupplyPmName' => 'subDemandSupplyPmName',
        'subDemandSupplyPmUid' => 'subDemandSupplyPmUid',
        'subOrderId' => 'subOrderId',
        'supplyStatus' => 'supplyStatus',
        'totalOrderId' => 'totalOrderId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualSupplyTime) {
            $res['actualSupplyTime'] = $this->actualSupplyTime;
        }
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->deliveredAmount) {
            $res['deliveredAmount'] = $this->deliveredAmount;
        }
        if (null !== $this->deliveryItemId) {
            $res['deliveryItemId'] = $this->deliveryItemId;
        }
        if (null !== $this->deliveryPlanId) {
            $res['deliveryPlanId'] = $this->deliveryPlanId;
        }
        if (null !== $this->lastSupplyTime) {
            $res['lastSupplyTime'] = $this->lastSupplyTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subDemandSupplyPerformerName) {
            $res['subDemandSupplyPerformerName'] = $this->subDemandSupplyPerformerName;
        }
        if (null !== $this->subDemandSupplyPerformerUid) {
            $res['subDemandSupplyPerformerUid'] = $this->subDemandSupplyPerformerUid;
        }
        if (null !== $this->subDemandSupplyPmName) {
            $res['subDemandSupplyPmName'] = $this->subDemandSupplyPmName;
        }
        if (null !== $this->subDemandSupplyPmUid) {
            $res['subDemandSupplyPmUid'] = $this->subDemandSupplyPmUid;
        }
        if (null !== $this->subOrderId) {
            $res['subOrderId'] = $this->subOrderId;
        }
        if (null !== $this->supplyStatus) {
            $res['supplyStatus'] = $this->supplyStatus;
        }
        if (null !== $this->totalOrderId) {
            $res['totalOrderId'] = $this->totalOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deliveryItemDetailDTOS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actualSupplyTime'])) {
            $model->actualSupplyTime = $map['actualSupplyTime'];
        }
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['deliveredAmount'])) {
            $model->deliveredAmount = $map['deliveredAmount'];
        }
        if (isset($map['deliveryItemId'])) {
            $model->deliveryItemId = $map['deliveryItemId'];
        }
        if (isset($map['deliveryPlanId'])) {
            $model->deliveryPlanId = $map['deliveryPlanId'];
        }
        if (isset($map['lastSupplyTime'])) {
            $model->lastSupplyTime = $map['lastSupplyTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['subDemandSupplyPerformerName'])) {
            $model->subDemandSupplyPerformerName = $map['subDemandSupplyPerformerName'];
        }
        if (isset($map['subDemandSupplyPerformerUid'])) {
            $model->subDemandSupplyPerformerUid = $map['subDemandSupplyPerformerUid'];
        }
        if (isset($map['subDemandSupplyPmName'])) {
            $model->subDemandSupplyPmName = $map['subDemandSupplyPmName'];
        }
        if (isset($map['subDemandSupplyPmUid'])) {
            $model->subDemandSupplyPmUid = $map['subDemandSupplyPmUid'];
        }
        if (isset($map['subOrderId'])) {
            $model->subOrderId = $map['subOrderId'];
        }
        if (isset($map['supplyStatus'])) {
            $model->supplyStatus = $map['supplyStatus'];
        }
        if (isset($map['totalOrderId'])) {
            $model->totalOrderId = $map['totalOrderId'];
        }

        return $model;
    }
}
