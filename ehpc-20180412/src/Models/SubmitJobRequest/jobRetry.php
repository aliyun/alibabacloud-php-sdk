<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitJobRequest;

use AlibabaCloud\Tea\Model;

class jobRetry extends Model
{
    /**
     * @description The number of retries for the job. Valid values: 1 to 10. You can only retry jobs that are run on the PBS clusters.
     *
     * >  If this parameter is left empty, the JobRetry.Priority and JobRetry.OnExitCode parameters do not take effect.
     * @example 5
     *
     * @var int
     */
    public $count;

    /**
     * @description The retry condition of the job. If the exit code is the value of the parameter, the job retry is triggered.
     *
     * >  If this parameter is left empty, the job retry is triggered when the exit code is not 0.
     * @example 1
     *
     * @var int
     */
    public $onExitCode;

    /**
     * @description The priority of the job retry. Valid values: 0 to 9. A larger value indicates a higher priority.
     *
     * >  If this parameter is left empty, the priority of the job retry is min {Priority of the original job +1, 9}.
     * @example 1
     *
     * @var int
     */
    public $priority;
    protected $_name = [
        'count'      => 'Count',
        'onExitCode' => 'OnExitCode',
        'priority'   => 'Priority',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->onExitCode) {
            $res['OnExitCode'] = $this->onExitCode;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobRetry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['OnExitCode'])) {
            $model->onExitCode = $map['OnExitCode'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
