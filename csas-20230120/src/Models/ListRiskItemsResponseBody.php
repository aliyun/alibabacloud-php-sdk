<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListRiskItemsResponseBody\riskItems;

class ListRiskItemsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskItems[]
     */
    public $riskItems;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'requestId' => 'RequestId',
        'riskItems' => 'RiskItems',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->riskItems)) {
            Model::validateArray($this->riskItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskItems) {
            if (\is_array($this->riskItems)) {
                $res['RiskItems'] = [];
                $n1 = 0;
                foreach ($this->riskItems as $item1) {
                    $res['RiskItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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

        if (isset($map['RiskItems'])) {
            if (!empty($map['RiskItems'])) {
                $model->riskItems = [];
                $n1 = 0;
                foreach ($map['RiskItems'] as $item1) {
                    $model->riskItems[$n1] = riskItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
