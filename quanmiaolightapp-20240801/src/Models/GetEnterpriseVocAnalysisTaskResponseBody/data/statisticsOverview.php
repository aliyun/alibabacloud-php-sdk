<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\filterDimensionStatistics;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\tagDimensionStatistics;

class statisticsOverview extends Model
{
    /**
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

    public function validate()
    {
        if (null !== $this->filterDimensionStatistics) {
            $this->filterDimensionStatistics->validate();
        }
        if (null !== $this->tagDimensionStatistics) {
            $this->tagDimensionStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->filterDimensionStatistics) {
            $res['filterDimensionStatistics'] = null !== $this->filterDimensionStatistics ? $this->filterDimensionStatistics->toArray($noStream) : $this->filterDimensionStatistics;
        }

        if (null !== $this->tagDimensionStatistics) {
            $res['tagDimensionStatistics'] = null !== $this->tagDimensionStatistics ? $this->tagDimensionStatistics->toArray($noStream) : $this->tagDimensionStatistics;
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
