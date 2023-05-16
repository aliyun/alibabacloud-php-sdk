<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockResponseBody\saleControl;
use AlibabaCloud\Tea\Model;

class DescribeEnsSaleControlStockResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var saleControl[]
     */
    public $saleControl;
    protected $_name = [
        'requestId'   => 'RequestId',
        'saleControl' => 'SaleControl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->saleControl) {
            $res['SaleControl'] = [];
            if (null !== $this->saleControl && \is_array($this->saleControl)) {
                $n = 0;
                foreach ($this->saleControl as $item) {
                    $res['SaleControl'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsSaleControlStockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SaleControl'])) {
            if (!empty($map['SaleControl'])) {
                $model->saleControl = [];
                $n                  = 0;
                foreach ($map['SaleControl'] as $item) {
                    $model->saleControl[$n++] = null !== $item ? saleControl::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
