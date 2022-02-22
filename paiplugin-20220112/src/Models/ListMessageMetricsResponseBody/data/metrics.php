<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessageMetricsResponseBody\data;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description 日期
     *
     * @var string
     */
    public $date;

    /**
     * @description 失败
     *
     * @var int
     */
    public $fail;

    /**
     * @description 挂起
     *
     * @var int
     */
    public $pending;

    /**
     * @description 非失败率
     *
     * @var float
     */
    public $rate;

    /**
     * @description 成功
     *
     * @var int
     */
    public $success;

    /**
     * @description 总计
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'date'    => 'Date',
        'fail'    => 'Fail',
        'pending' => 'Pending',
        'rate'    => 'Rate',
        'success' => 'Success',
        'total'   => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->fail) {
            $res['Fail'] = $this->fail;
        }
        if (null !== $this->pending) {
            $res['Pending'] = $this->pending;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Fail'])) {
            $model->fail = $map['Fail'];
        }
        if (isset($map['Pending'])) {
            $model->pending = $map['Pending'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
