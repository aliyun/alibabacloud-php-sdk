<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\filterDimensionStatistics;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\tagDimensionStatistics;
use AlibabaCloud\Tea\Model;

class statisticsOverview extends Model
{
    /**
     * @example 17
     *
     * @var int
     */
    public $count;

    /**
     * @var filterDimensionStatistics
     */
    public $filterDimensionStatistics;

    /**
     * @var tagDimensionStatistics
     */
    public $tagDimensionStatistics;
    protected $_name = [
        'count' => 'count',
        'filterDimensionStatistics' => 'filterDimensionStatistics',
        'tagDimensionStatistics' => 'tagDimensionStatistics',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->filterDimensionStatistics) {
            $res['filterDimensionStatistics'] = null !== $this->filterDimensionStatistics ? $this->filterDimensionStatistics->toMap() : null;
        }
        if (null !== $this->tagDimensionStatistics) {
            $res['tagDimensionStatistics'] = null !== $this->tagDimensionStatistics ? $this->tagDimensionStatistics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statisticsOverview
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['filterDimensionStatistics'])) {
            $model->filterDimensionStatistics = filterDimensionStatistics::fromMap($map['filterDimensionStatistics']);
        }
        if (isset($map['tagDimensionStatistics'])) {
            $model->tagDimensionStatistics = tagDimensionStatistics::fromMap($map['tagDimensionStatistics']);
        }

        return $model;
    }
}
