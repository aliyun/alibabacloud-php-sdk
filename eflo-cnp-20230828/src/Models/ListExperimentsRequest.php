<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Tea\Model;

class ListExperimentsRequest extends Model
{
    /**
     * @description Order
     *
     * @example 1
     *
     * @var int
     */
    public $order;

    /**
     * @description Plan ID
     *
     * @example 189
     *
     * @var int
     */
    public $planId;
    protected $_name = [
        'order'  => 'Order',
        'planId' => 'PlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExperimentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        return $model;
    }
}
