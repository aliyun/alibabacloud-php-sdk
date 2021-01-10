<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\customs\custom\clips;

use AlibabaCloud\Tea\Model;

class clip extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $minScore;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $avgScore;

    /**
     * @var string
     */
    public $maxScore;

    /**
     * @var string
     */
    public $endTarget;

    /**
     * @var string
     */
    public $startTarget;
    protected $_name = [
        'endTime'     => 'EndTime',
        'minScore'    => 'MinScore',
        'startTime'   => 'StartTime',
        'avgScore'    => 'AvgScore',
        'maxScore'    => 'MaxScore',
        'endTarget'   => 'EndTarget',
        'startTarget' => 'StartTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->minScore) {
            $res['MinScore'] = $this->minScore;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->avgScore) {
            $res['AvgScore'] = $this->avgScore;
        }
        if (null !== $this->maxScore) {
            $res['MaxScore'] = $this->maxScore;
        }
        if (null !== $this->endTarget) {
            $res['EndTarget'] = $this->endTarget;
        }
        if (null !== $this->startTarget) {
            $res['StartTarget'] = $this->startTarget;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clip
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MinScore'])) {
            $model->minScore = $map['MinScore'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['AvgScore'])) {
            $model->avgScore = $map['AvgScore'];
        }
        if (isset($map['MaxScore'])) {
            $model->maxScore = $map['MaxScore'];
        }
        if (isset($map['EndTarget'])) {
            $model->endTarget = $map['EndTarget'];
        }
        if (isset($map['StartTarget'])) {
            $model->startTarget = $map['StartTarget'];
        }

        return $model;
    }
}
