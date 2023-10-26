<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListInsightsEventsResponseBody;

use AlibabaCloud\Tea\Model;

class insightsEvents extends Model
{
    /**
     * @description The time at which the event occurred. The value is a timestamp.
     *
     * @example 1658890560
     *
     * @var int
     */
    public $date;

    /**
     * @description The ID of the application associated with the event.
     *
     * @example The severity of the event.
     *
     * @var string
     */
    public $desc;

    /**
     * @description Queries the abnormal Insights events within a specified period of time.
     *
     * @example P3
     *
     * @var string
     */
    public $level;

    /**
     * @description auditing
     *
     * @example dsv9zcel92@7da413b******
     *
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $problemId;

    /**
     * @description The overall response time of the \[HTTP] service of the application \[sd] spikes at \[2022-07-27 10:57:00]
     *
     * @example The type of the event.
     *
     * @var string
     */
    public $title;

    /**
     * @description The time at which the event occurred. The value is a timestamp.
     *
     * @example rtIncrease
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'date'      => 'Date',
        'desc'      => 'Desc',
        'level'     => 'Level',
        'pid'       => 'Pid',
        'problemId' => 'ProblemId',
        'title'     => 'Title',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->problemId) {
            $res['ProblemId'] = $this->problemId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insightsEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['ProblemId'])) {
            $model->problemId = $map['ProblemId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
