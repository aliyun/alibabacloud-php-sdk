<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryQuotaResponseBody\data;

use AlibabaCloud\Dara\Model;

class billingPolicy extends Model
{
    /**
     * @var string
     */
    public $billingMethod;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $odpsSpecCode;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'billingMethod' => 'billingMethod',
        'instanceId' => 'instanceId',
        'odpsSpecCode' => 'odpsSpecCode',
        'orderId' => 'orderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingMethod) {
            $res['billingMethod'] = $this->billingMethod;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->odpsSpecCode) {
            $res['odpsSpecCode'] = $this->odpsSpecCode;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
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
        if (isset($map['billingMethod'])) {
            $model->billingMethod = $map['billingMethod'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['odpsSpecCode'])) {
            $model->odpsSpecCode = $map['odpsSpecCode'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        return $model;
    }
}
