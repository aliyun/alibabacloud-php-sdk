<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribePayOrdersResponseBody;

use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribePayOrdersResponseBody\payOrders\payOrderInfo;
use AlibabaCloud\Tea\Model;

class payOrders extends Model
{
    /**
     * @var payOrderInfo[]
     */
    public $payOrderInfo;
    protected $_name = [
        'payOrderInfo' => 'PayOrderInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payOrderInfo) {
            $res['PayOrderInfo'] = [];
            if (null !== $this->payOrderInfo && \is_array($this->payOrderInfo)) {
                $n = 0;
                foreach ($this->payOrderInfo as $item) {
                    $res['PayOrderInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payOrders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PayOrderInfo'])) {
            if (!empty($map['PayOrderInfo'])) {
                $model->payOrderInfo = [];
                $n                   = 0;
                foreach ($map['PayOrderInfo'] as $item) {
                    $model->payOrderInfo[$n++] = null !== $item ? payOrderInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
