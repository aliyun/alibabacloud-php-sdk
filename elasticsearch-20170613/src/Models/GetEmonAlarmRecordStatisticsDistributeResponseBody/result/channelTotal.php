<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonAlarmRecordStatisticsDistributeResponseBody\result;

use AlibabaCloud\Dara\Model;

class channelTotal extends Model
{
    /**
     * @var string
     */
    public $alarmGroup;

    /**
     * @var string
     */
    public $compare;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $receiver;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $today;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $yesterday;
    protected $_name = [
        'alarmGroup' => 'alarmGroup',
        'compare' => 'compare',
        'count' => 'count',
        'level' => 'level',
        'receiver' => 'receiver',
        'time' => 'time',
        'today' => 'today',
        'type' => 'type',
        'yesterday' => 'yesterday',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmGroup) {
            $res['alarmGroup'] = $this->alarmGroup;
        }

        if (null !== $this->compare) {
            $res['compare'] = $this->compare;
        }

        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->receiver) {
            $res['receiver'] = $this->receiver;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->today) {
            $res['today'] = $this->today;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->yesterday) {
            $res['yesterday'] = $this->yesterday;
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
        if (isset($map['alarmGroup'])) {
            $model->alarmGroup = $map['alarmGroup'];
        }

        if (isset($map['compare'])) {
            $model->compare = $map['compare'];
        }

        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['receiver'])) {
            $model->receiver = $map['receiver'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['today'])) {
            $model->today = $map['today'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['yesterday'])) {
            $model->yesterday = $map['yesterday'];
        }

        return $model;
    }
}
