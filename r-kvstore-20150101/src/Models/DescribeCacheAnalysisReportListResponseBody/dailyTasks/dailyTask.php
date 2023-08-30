<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportListResponseBody\dailyTasks;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportListResponseBody\dailyTasks\dailyTask\tasks;
use AlibabaCloud\Tea\Model;

class dailyTask extends Model
{
    /**
     * @description The date when the offline key analytics task was performed.
     *
     * @example 2019-08-01Z
     *
     * @var string
     */
    public $date;

    /**
     * @description Details of the offline key analytics tasks.
     *
     * @var tasks
     */
    public $tasks;
    protected $_name = [
        'date'  => 'Date',
        'tasks' => 'Tasks',
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
        if (null !== $this->tasks) {
            $res['Tasks'] = null !== $this->tasks ? $this->tasks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dailyTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Tasks'])) {
            $model->tasks = tasks::fromMap($map['Tasks']);
        }

        return $model;
    }
}
