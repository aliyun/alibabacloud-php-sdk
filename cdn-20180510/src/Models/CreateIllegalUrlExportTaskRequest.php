<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class CreateIllegalUrlExportTaskRequest extends Model
{
    /**
     * @description The name of the export task.
     *
     * @example exampleTask
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-DDThh:mm:ssZ format. The finest granularity is one day.
     *
     * @example 2019-09-30T16:00:00Z
     *
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'taskName'  => 'TaskName',
        'timePoint' => 'TimePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIllegalUrlExportTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}
