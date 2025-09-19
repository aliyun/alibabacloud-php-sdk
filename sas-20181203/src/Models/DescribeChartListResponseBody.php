<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartListResponseBody\chartList;

class DescribeChartListResponseBody extends Model
{
    /**
     * @var chartList[]
     */
    public $chartList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'chartList' => 'ChartList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->chartList)) {
            Model::validateArray($this->chartList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chartList) {
            if (\is_array($this->chartList)) {
                $res['ChartList'] = [];
                $n1 = 0;
                foreach ($this->chartList as $item1) {
                    $res['ChartList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ChartList'])) {
            if (!empty($map['ChartList'])) {
                $model->chartList = [];
                $n1 = 0;
                foreach ($map['ChartList'] as $item1) {
                    $model->chartList[$n1] = chartList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
