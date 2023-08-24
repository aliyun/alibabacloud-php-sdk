<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportListResponseBody\dailyTasks;
use AlibabaCloud\Tea\Model;

class DescribeCacheAnalysisReportListResponseBody extends Model
{
    /**
     * @description 30
     *
     * @var dailyTasks
     */
    public $dailyTasks;

    /**
     * @description The date when the offline key analysis task was performed.
     *
     * @example 1041xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the task.
     *
     * @example 743D0A03-52DE-4E6F-8D09-EC1414CF****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dailyTasks' => 'DailyTasks',
        'instanceId' => 'InstanceId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dailyTasks) {
            $res['DailyTasks'] = null !== $this->dailyTasks ? $this->dailyTasks->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCacheAnalysisReportListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DailyTasks'])) {
            $model->dailyTasks = dailyTasks::fromMap($map['DailyTasks']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
