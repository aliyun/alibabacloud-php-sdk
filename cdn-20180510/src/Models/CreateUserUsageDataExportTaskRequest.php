<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class CreateUserUsageDataExportTaskRequest extends Model
{
    /**
     * @description The end of the time range to query. The end time must be later than the start time.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     * @example 2015-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The language in which you want to export the file. Default value: zh-cn. Valid values:
     *
     *   **zh-cn**: Chinese
     *   **en-us**: English
     *
     * @example zh-cn
     *
     * @var string
     */
    public $language;

    /**
     * @description The start of the time range to query. The data is collected every 5 minutes.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the task.
     *
     * @example Refresh
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'endTime'   => 'EndTime',
        'language'  => 'Language',
        'startTime' => 'StartTime',
        'taskName'  => 'TaskName',
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
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserUsageDataExportTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
