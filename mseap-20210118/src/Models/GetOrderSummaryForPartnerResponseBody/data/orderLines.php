<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models\GetOrderSummaryForPartnerResponseBody\data;

use AlibabaCloud\Dara\Model;

class orderLines extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderLineId;

    /**
     * @var string
     */
    public $orderType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'orderLineId' => 'OrderLineId',
        'orderType' => 'OrderType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->orderLineId) {
            $res['OrderLineId'] = $this->orderLineId;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrderLineId'])) {
            $model->orderLineId = $map['OrderLineId'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
