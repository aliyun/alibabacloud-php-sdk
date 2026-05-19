<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostByCostCenterResponseBody\consumeAmountList;

class QueryCostByCostCenterResponseBody extends Model
{
    /**
     * @var consumeAmountList[]
     */
    public $consumeAmountList;

    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalAmount;
    protected $_name = [
        'consumeAmountList' => 'ConsumeAmountList',
        'metadata' => 'Metadata',
        'requestId' => 'RequestId',
        'totalAmount' => 'TotalAmount',
    ];

    public function validate()
    {
        if (\is_array($this->consumeAmountList)) {
            Model::validateArray($this->consumeAmountList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumeAmountList) {
            if (\is_array($this->consumeAmountList)) {
                $res['ConsumeAmountList'] = [];
                $n1 = 0;
                foreach ($this->consumeAmountList as $item1) {
                    $res['ConsumeAmountList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
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
        if (isset($map['ConsumeAmountList'])) {
            if (!empty($map['ConsumeAmountList'])) {
                $model->consumeAmountList = [];
                $n1 = 0;
                foreach ($map['ConsumeAmountList'] as $item1) {
                    $model->consumeAmountList[$n1] = consumeAmountList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }

        return $model;
    }
}
