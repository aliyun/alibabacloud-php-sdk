<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportListResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportListResponseBody\dailyTasks\dailyTask;
use AlibabaCloud\Tea\Model;

class dailyTasks extends Model
{
    /**
     * @var dailyTask[]
     */
    public $dailyTask;
    protected $_name = [
        'dailyTask' => 'DailyTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dailyTask) {
            $res['DailyTask'] = [];
            if (null !== $this->dailyTask && \is_array($this->dailyTask)) {
                $n = 0;
                foreach ($this->dailyTask as $item) {
                    $res['DailyTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dailyTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DailyTask'])) {
            if (!empty($map['DailyTask'])) {
                $model->dailyTask = [];
                $n                = 0;
                foreach ($map['DailyTask'] as $item) {
                    $model->dailyTask[$n++] = null !== $item ? dailyTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
