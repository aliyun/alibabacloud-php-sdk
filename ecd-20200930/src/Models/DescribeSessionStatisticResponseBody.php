<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSessionStatisticResponseBody\statistic;

class DescribeSessionStatisticResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var statistic[]
     */
    public $statistic;
    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'statistic'  => 'Statistic',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->statistic)) {
            Model::validateArray($this->statistic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statistic) {
            if (\is_array($this->statistic)) {
                $res['Statistic'] = [];
                $n1               = 0;
                foreach ($this->statistic as $item1) {
                    $res['Statistic'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Statistic'])) {
            if (!empty($map['Statistic'])) {
                $model->statistic = [];
                $n1               = 0;
                foreach ($map['Statistic'] as $item1) {
                    $model->statistic[$n1++] = statistic::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
