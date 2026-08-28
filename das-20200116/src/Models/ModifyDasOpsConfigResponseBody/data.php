<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\ModifyDasOpsConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $commodityInstanceId;

    /**
     * @var bool
     */
    public $ecoEnable;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $opsEnable;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'commodityInstanceId' => 'CommodityInstanceId',
        'ecoEnable' => 'EcoEnable',
        'enable' => 'Enable',
        'endTime' => 'EndTime',
        'opsEnable' => 'OpsEnable',
        'orderId' => 'OrderId',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->commodityInstanceId) {
            $res['CommodityInstanceId'] = $this->commodityInstanceId;
        }

        if (null !== $this->ecoEnable) {
            $res['EcoEnable'] = $this->ecoEnable;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->opsEnable) {
            $res['OpsEnable'] = $this->opsEnable;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CommodityInstanceId'])) {
            $model->commodityInstanceId = $map['CommodityInstanceId'];
        }

        if (isset($map['EcoEnable'])) {
            $model->ecoEnable = $map['EcoEnable'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['OpsEnable'])) {
            $model->opsEnable = $map['OpsEnable'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
