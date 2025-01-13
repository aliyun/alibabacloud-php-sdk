<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data\alarmList;

use AlibabaCloud\Tea\Model;

class alarmRuleList extends Model
{
    /**
     * @var string
     */
    public $aggregator;

    /**
     * @var string
     */
    public $comparator;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $threshold;
    protected $_name = [
        'aggregator' => 'Aggregator',
        'comparator' => 'Comparator',
        'duration'   => 'Duration',
        'level'      => 'Level',
        'threshold'  => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregator) {
            $res['Aggregator'] = $this->aggregator;
        }
        if (null !== $this->comparator) {
            $res['Comparator'] = $this->comparator;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregator'])) {
            $model->aggregator = $map['Aggregator'];
        }
        if (isset($map['Comparator'])) {
            $model->comparator = $map['Comparator'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
