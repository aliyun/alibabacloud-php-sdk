<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockResponseBody\saleControl;

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
        'requestId' => 'RequestId',
        'saleControl' => 'SaleControl',
    ];

    public function validate()
    {
        if (\is_array($this->saleControl)) {
            Model::validateArray($this->saleControl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->saleControl) {
            if (\is_array($this->saleControl)) {
                $res['SaleControl'] = [];
                $n1 = 0;
                foreach ($this->saleControl as $item1) {
                    $res['SaleControl'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SaleControl'])) {
            if (!empty($map['SaleControl'])) {
                $model->saleControl = [];
                $n1 = 0;
                foreach ($map['SaleControl'] as $item1) {
                    $model->saleControl[$n1] = saleControl::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
