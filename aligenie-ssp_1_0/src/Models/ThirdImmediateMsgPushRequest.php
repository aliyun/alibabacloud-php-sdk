<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;

class ThirdImmediateMsgPushRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $changeDetail;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $psgIds;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $trafficChangeType;

    /**
     * @var string
     */
    public $trafficChangeTypeDesc;

    /**
     * @var string
     */
    public $trafficJourneyIds;

    /**
     * @var string
     */
    public $trafficSubOrderIds;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizType' => 'BizType',
        'changeDetail' => 'ChangeDetail',
        'orderId' => 'OrderId',
        'psgIds' => 'PsgIds',
        'source' => 'Source',
        'trafficChangeType' => 'TrafficChangeType',
        'trafficChangeTypeDesc' => 'TrafficChangeTypeDesc',
        'trafficJourneyIds' => 'TrafficJourneyIds',
        'trafficSubOrderIds' => 'TrafficSubOrderIds',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->changeDetail) {
            $res['ChangeDetail'] = $this->changeDetail;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->psgIds) {
            $res['PsgIds'] = $this->psgIds;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->trafficChangeType) {
            $res['TrafficChangeType'] = $this->trafficChangeType;
        }

        if (null !== $this->trafficChangeTypeDesc) {
            $res['TrafficChangeTypeDesc'] = $this->trafficChangeTypeDesc;
        }

        if (null !== $this->trafficJourneyIds) {
            $res['TrafficJourneyIds'] = $this->trafficJourneyIds;
        }

        if (null !== $this->trafficSubOrderIds) {
            $res['TrafficSubOrderIds'] = $this->trafficSubOrderIds;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ChangeDetail'])) {
            $model->changeDetail = $map['ChangeDetail'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['PsgIds'])) {
            $model->psgIds = $map['PsgIds'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['TrafficChangeType'])) {
            $model->trafficChangeType = $map['TrafficChangeType'];
        }

        if (isset($map['TrafficChangeTypeDesc'])) {
            $model->trafficChangeTypeDesc = $map['TrafficChangeTypeDesc'];
        }

        if (isset($map['TrafficJourneyIds'])) {
            $model->trafficJourneyIds = $map['TrafficJourneyIds'];
        }

        if (isset($map['TrafficSubOrderIds'])) {
            $model->trafficSubOrderIds = $map['TrafficSubOrderIds'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
