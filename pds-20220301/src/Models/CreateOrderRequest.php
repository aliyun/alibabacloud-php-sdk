<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $code;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $orderType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $package;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $period;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $totalSize;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $userCount;
    protected $_name = [
        'autoPay' => 'auto_pay',
        'autoRenew' => 'auto_renew',
        'code' => 'code',
        'instanceId' => 'instance_id',
        'orderType' => 'order_type',
        'package' => 'package',
        'period' => 'period',
        'periodUnit' => 'period_unit',
        'totalSize' => 'total_size',
        'userCount' => 'user_count',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['auto_pay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['auto_renew'] = $this->autoRenew;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->orderType) {
            $res['order_type'] = $this->orderType;
        }
        if (null !== $this->package) {
            $res['package'] = $this->package;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['period_unit'] = $this->periodUnit;
        }
        if (null !== $this->totalSize) {
            $res['total_size'] = $this->totalSize;
        }
        if (null !== $this->userCount) {
            $res['user_count'] = $this->userCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_pay'])) {
            $model->autoPay = $map['auto_pay'];
        }
        if (isset($map['auto_renew'])) {
            $model->autoRenew = $map['auto_renew'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }
        if (isset($map['order_type'])) {
            $model->orderType = $map['order_type'];
        }
        if (isset($map['package'])) {
            $model->package = $map['package'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['period_unit'])) {
            $model->periodUnit = $map['period_unit'];
        }
        if (isset($map['total_size'])) {
            $model->totalSize = $map['total_size'];
        }
        if (isset($map['user_count'])) {
            $model->userCount = $map['user_count'];
        }

        return $model;
    }
}
