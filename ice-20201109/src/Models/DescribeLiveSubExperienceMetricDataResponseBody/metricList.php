<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLiveSubExperienceMetricDataResponseBody;

use AlibabaCloud\Tea\Model;

class metricList extends Model
{
    /**
     * @var float
     */
    public $avgScore;

    /**
     * @var float
     */
    public $maxScore;

    /**
     * @var float
     */
    public $minScore;
    protected $_name = [
        'avgScore' => 'AvgScore',
        'maxScore' => 'MaxScore',
        'minScore' => 'MinScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgScore) {
            $res['AvgScore'] = $this->avgScore;
        }
        if (null !== $this->maxScore) {
            $res['MaxScore'] = $this->maxScore;
        }
        if (null !== $this->minScore) {
            $res['MinScore'] = $this->minScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgScore'])) {
            $model->avgScore = $map['AvgScore'];
        }
        if (isset($map['MaxScore'])) {
            $model->maxScore = $map['MaxScore'];
        }
        if (isset($map['MinScore'])) {
            $model->minScore = $map['MinScore'];
        }

        return $model;
    }
}
