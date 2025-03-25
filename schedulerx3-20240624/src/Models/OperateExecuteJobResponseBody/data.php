<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateExecuteJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1310630367761285120
     *
     * @var string
     */
    public $jobExecutionId;
    protected $_name = [
        'jobExecutionId' => 'JobExecutionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobExecutionId) {
            $res['JobExecutionId'] = $this->jobExecutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobExecutionId'])) {
            $model->jobExecutionId = $map['JobExecutionId'];
        }

        return $model;
    }
}
