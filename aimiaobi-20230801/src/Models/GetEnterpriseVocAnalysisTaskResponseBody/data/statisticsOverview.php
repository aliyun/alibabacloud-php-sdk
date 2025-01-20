<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\filterDimensionStatistics;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\tagDimensionStatistics;

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
        'count'                     => 'Count',
        'filterDimensionStatistics' => 'FilterDimensionStatistics',
        'tagDimensionStatistics'    => 'TagDimensionStatistics',
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
            $res['Count'] = $this->count;
        }

        if (null !== $this->filterDimensionStatistics) {
            $res['FilterDimensionStatistics'] = null !== $this->filterDimensionStatistics ? $this->filterDimensionStatistics->toArray($noStream) : $this->filterDimensionStatistics;
        }

        if (null !== $this->tagDimensionStatistics) {
            $res['TagDimensionStatistics'] = null !== $this->tagDimensionStatistics ? $this->tagDimensionStatistics->toArray($noStream) : $this->tagDimensionStatistics;
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
