<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\filterDimensionStatistics\tagValueCountStatistic;

class filterDimensionStatistics extends Model
{
    /**
     * @var tagValueCountStatistic[]
     */
    public $tagValueCountStatistic;
    protected $_name = [
        'tagValueCountStatistic' => 'tagValueCountStatistic',
    ];

    public function validate()
    {
        if (\is_array($this->tagValueCountStatistic)) {
            Model::validateArray($this->tagValueCountStatistic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagValueCountStatistic) {
            if (\is_array($this->tagValueCountStatistic)) {
                $res['tagValueCountStatistic'] = [];
                $n1 = 0;
                foreach ($this->tagValueCountStatistic as $item1) {
                    $res['tagValueCountStatistic'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['tagValueCountStatistic'])) {
            if (!empty($map['tagValueCountStatistic'])) {
                $model->tagValueCountStatistic = [];
                $n1 = 0;
                foreach ($map['tagValueCountStatistic'] as $item1) {
                    $model->tagValueCountStatistic[$n1] = tagValueCountStatistic::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
