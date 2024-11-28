<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\filterDimensionStatistics;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\tagDimensionStatistics;
use AlibabaCloud\Tea\Model;

class statisticsOverview extends Model
{
    /**
     * @example 100
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
        'count'                     => 'Count',
        'filterDimensionStatistics' => 'FilterDimensionStatistics',
        'tagDimensionStatistics'    => 'TagDimensionStatistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->filterDimensionStatistics) {
            $res['FilterDimensionStatistics'] = null !== $this->filterDimensionStatistics ? $this->filterDimensionStatistics->toMap() : null;
        }
        if (null !== $this->tagDimensionStatistics) {
            $res['TagDimensionStatistics'] = null !== $this->tagDimensionStatistics ? $this->tagDimensionStatistics->toMap() : null;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['FilterDimensionStatistics'])) {
            $model->filterDimensionStatistics = filterDimensionStatistics::fromMap($map['FilterDimensionStatistics']);
        }
        if (isset($map['TagDimensionStatistics'])) {
            $model->tagDimensionStatistics = tagDimensionStatistics::fromMap($map['TagDimensionStatistics']);
        }

        return $model;
    }
}
