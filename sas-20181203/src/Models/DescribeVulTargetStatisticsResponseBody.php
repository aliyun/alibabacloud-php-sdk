<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetStatisticsResponseBody\targetStats;
use AlibabaCloud\Tea\Model;

class DescribeVulTargetStatisticsResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 23AD0BD2-8771-5647-819E-6BA51E212F80
     *
     * @var string
     */
    public $requestId;

    /**
     * @var targetStats[]
     */
    public $targetStats;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'targetStats' => 'TargetStats',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->targetStats) {
            $res['TargetStats'] = [];
            if (null !== $this->targetStats && \is_array($this->targetStats)) {
                $n = 0;
                foreach ($this->targetStats as $item) {
                    $res['TargetStats'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeVulTargetStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TargetStats'])) {
            if (!empty($map['TargetStats'])) {
                $model->targetStats = [];
                $n                  = 0;
                foreach ($map['TargetStats'] as $item) {
                    $model->targetStats[$n++] = null !== $item ? targetStats::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
