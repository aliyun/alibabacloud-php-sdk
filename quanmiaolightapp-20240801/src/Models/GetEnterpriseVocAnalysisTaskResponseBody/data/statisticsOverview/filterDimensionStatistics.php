<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\filterDimensionStatistics\tagValueCountStatistic;
use AlibabaCloud\Tea\Model;

class filterDimensionStatistics extends Model
{
    /**
     * @var tagValueCountStatistic[]
     */
    public $tagValueCountStatistic;
    protected $_name = [
        'tagValueCountStatistic' => 'tagValueCountStatistic',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagValueCountStatistic) {
            $res['tagValueCountStatistic'] = [];
            if (null !== $this->tagValueCountStatistic && \is_array($this->tagValueCountStatistic)) {
                $n = 0;
                foreach ($this->tagValueCountStatistic as $item) {
                    $res['tagValueCountStatistic'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterDimensionStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tagValueCountStatistic'])) {
            if (!empty($map['tagValueCountStatistic'])) {
                $model->tagValueCountStatistic = [];
                $n = 0;
                foreach ($map['tagValueCountStatistic'] as $item) {
                    $model->tagValueCountStatistic[$n++] = null !== $item ? tagValueCountStatistic::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
