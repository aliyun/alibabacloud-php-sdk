<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\tagDimensionStatistics\tagValueCountStatistic;

class tagDimensionStatistics extends Model
{
    /**
     * @var tagValueCountStatistic[]
     */
    public $tagValueCountStatistic;
    protected $_name = [
        'tagValueCountStatistic' => 'TagValueCountStatistic',
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
                $res['TagValueCountStatistic'] = [];
                $n1 = 0;
                foreach ($this->tagValueCountStatistic as $item1) {
                    $res['TagValueCountStatistic'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TagValueCountStatistic'])) {
            if (!empty($map['TagValueCountStatistic'])) {
                $model->tagValueCountStatistic = [];
                $n1 = 0;
                foreach ($map['TagValueCountStatistic'] as $item1) {
                    $model->tagValueCountStatistic[$n1] = tagValueCountStatistic::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
