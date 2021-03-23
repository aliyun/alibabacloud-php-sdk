<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportListResponseBody\dailyTasks;
use AlibabaCloud\Tea\Model;

class DescribeCacheAnalysisReportListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var dailyTasks
     */
    public $dailyTasks;
    protected $_name = [
        'requestId'  => 'RequestId',
        'instanceId' => 'InstanceId',
        'dailyTasks' => 'DailyTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->dailyTasks) {
            $res['DailyTasks'] = null !== $this->dailyTasks ? $this->dailyTasks->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DailyTasks'])) {
            $model->dailyTasks = dailyTasks::fromMap($map['DailyTasks']);
        }

        return $model;
    }
}
