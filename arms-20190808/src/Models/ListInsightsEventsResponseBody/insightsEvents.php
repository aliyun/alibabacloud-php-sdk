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
     * @description The description of the alert event.
     *
     * @example The overall response time of the [HTTP] service of the application [sd] spikes at [2022-07-27 10:57:00]
     *
     * @var string
     */
    public $desc;

    /**
     * @description The severity of the event.
     *
     * @example P3
     *
     * @var string
     */
    public $level;

    /**
     * @description The ID of the application associated with the event.
     *
     * @example dsv9zcel92@7da413b******
     *
     * @var string
     */
    public $pid;

    /**
     * @description 问题标识。
     *
     * @example erep3o9zue@01ebe697ab70566|@1499161100890550|@cn-hangzhou|@1701841800000|@1701842040000|@daa6c51a-3c44-4d57-9548-4e212c******
     *
     * @var string
     */
    public $problemId;

    /**
     * @description The title of the event.
     *
     * @example Average response-time spikes of application services
     *
     * @var string
     */
    public $title;

    /**
     * @description The type of the event.
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
