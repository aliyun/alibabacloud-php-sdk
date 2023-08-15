<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ConvertInstanceRequest extends Model
{
    /**
     * @example hb-bp16o0pd52e3y****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 7
     *
     * @var int
     */
    public $duration;

    /**
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example month
     *
     * @var string
     */
    public $pricingCycle;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'duration'     => 'Duration',
        'payType'      => 'PayType',
        'pricingCycle' => 'PricingCycle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        return $model;
    }
}
