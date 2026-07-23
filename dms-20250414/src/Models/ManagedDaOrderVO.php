<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ManagedDaOrderVO extends Model
{
    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $payNum;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $subscriptionPlan;
    protected $_name = [
        'expireTime' => 'expireTime',
        'gmtCreate' => 'gmtCreate',
        'instanceId' => 'instanceId',
        'orderId' => 'orderId',
        'payNum' => 'payNum',
        'region' => 'region',
        'state' => 'state',
        'subscriptionPlan' => 'subscriptionPlan',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->payNum) {
            $res['payNum'] = $this->payNum;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->subscriptionPlan) {
            $res['subscriptionPlan'] = $this->subscriptionPlan;
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
        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['payNum'])) {
            $model->payNum = $map['payNum'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['subscriptionPlan'])) {
            $model->subscriptionPlan = $map['subscriptionPlan'];
        }

        return $model;
    }
}
