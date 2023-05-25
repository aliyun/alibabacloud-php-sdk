<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceChargeTypeResponseBody\feeOfInstances;

use AlibabaCloud\Tea\Model;

class feeOfInstance extends Model
{
    /**
     * @description The unit of currency for the bill.
     *
     * Alibaba Cloud International site (alibabacloud.com): USD.
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The charged amount.
     *
     * @example 0
     *
     * @var string
     */
    public $fee;

    /**
     * @description The instance ID.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'currency'   => 'Currency',
        'fee'        => 'Fee',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->fee) {
            $res['Fee'] = $this->fee;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return feeOfInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['Fee'])) {
            $model->fee = $map['Fee'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
