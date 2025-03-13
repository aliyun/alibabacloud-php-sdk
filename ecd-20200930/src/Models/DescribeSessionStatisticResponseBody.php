<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSessionStatisticResponseBody\statistic;
use AlibabaCloud\Tea\Model;

class DescribeSessionStatisticResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example C5528624-C6ED-5CA4-A4A2-7C30DBF2****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The statistics.
     *
     * @var statistic[]
     */
    public $statistic;

    /**
     * @description The total number of sessions returned.
     *
     * @example 1
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statistic) {
            $res['Statistic'] = [];
            if (null !== $this->statistic && \is_array($this->statistic)) {
                $n = 0;
                foreach ($this->statistic as $item) {
                    $res['Statistic'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSessionStatisticResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Statistic'])) {
            if (!empty($map['Statistic'])) {
                $model->statistic = [];
                $n                = 0;
                foreach ($map['Statistic'] as $item) {
                    $model->statistic[$n++] = null !== $item ? statistic::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
