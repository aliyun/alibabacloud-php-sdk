<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainResponseBody\data;

use AlibabaCloud\SDK\APIG\V20240327\Models\ResourceStatistic;
use AlibabaCloud\Tea\Model;

class statisticsInfo extends Model
{
    /**
     * @description The resource statistics.
     *
     * @var ResourceStatistic[]
     */
    public $resourceStatistics;

    /**
     * @description The total number of resources.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'resourceStatistics' => 'resourceStatistics',
        'totalCount' => 'totalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceStatistics) {
            $res['resourceStatistics'] = [];
            if (null !== $this->resourceStatistics && \is_array($this->resourceStatistics)) {
                $n = 0;
                foreach ($this->resourceStatistics as $item) {
                    $res['resourceStatistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statisticsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceStatistics'])) {
            if (!empty($map['resourceStatistics'])) {
                $model->resourceStatistics = [];
                $n = 0;
                foreach ($map['resourceStatistics'] as $item) {
                    $model->resourceStatistics[$n++] = null !== $item ? ResourceStatistic::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
