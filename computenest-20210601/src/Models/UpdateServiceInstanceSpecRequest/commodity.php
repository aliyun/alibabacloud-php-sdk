<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateServiceInstanceSpecRequest;

use AlibabaCloud\Tea\Model;

class commodity extends Model
{
    /**
     * @description Specifies whether to enable automatic payment.
     *
     * Valid values:
     *
     *   **true (default)**: automatically completes the payment. You must make sure that your account balance is sufficient.
     *   **false**: does not automatically complete the payment. An unpaid order is generated. If your account balance is insufficient, you can set AutoPay to false. In this case, an unpaid order is generated. You can complete the payment in the Expenses and Costs console.[](https://rdsnext.console.aliyun.com/dashboard/cn-beijing)
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;
    protected $_name = [
        'autoPay' => 'AutoPay',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        return $model;
    }
}
