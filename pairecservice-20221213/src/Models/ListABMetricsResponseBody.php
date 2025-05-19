<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListABMetricsResponseBody\ABMetrics;

class ListABMetricsResponseBody extends Model
{
    /**
     * @var ABMetrics[]
     */
    public $ABMetrics;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ABMetrics' => 'ABMetrics',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->ABMetrics)) {
            Model::validateArray($this->ABMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ABMetrics) {
            if (\is_array($this->ABMetrics)) {
                $res['ABMetrics'] = [];
                $n1 = 0;
                foreach ($this->ABMetrics as $item1) {
                    $res['ABMetrics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ABMetrics'])) {
            if (!empty($map['ABMetrics'])) {
                $model->ABMetrics = [];
                $n1 = 0;
                foreach ($map['ABMetrics'] as $item1) {
                    $model->ABMetrics[$n1++] = ABMetrics::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
