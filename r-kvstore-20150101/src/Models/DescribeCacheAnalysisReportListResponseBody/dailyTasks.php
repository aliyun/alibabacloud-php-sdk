<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportListResponseBody\dailyTasks\dailyTask;

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
        if (\is_array($this->dailyTask)) {
            Model::validateArray($this->dailyTask);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyTask) {
            if (\is_array($this->dailyTask)) {
                $res['DailyTask'] = [];
                $n1 = 0;
                foreach ($this->dailyTask as $item1) {
                    $res['DailyTask'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DailyTask'])) {
            if (!empty($map['DailyTask'])) {
                $model->dailyTask = [];
                $n1 = 0;
                foreach ($map['DailyTask'] as $item1) {
                    $model->dailyTask[$n1++] = dailyTask::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
