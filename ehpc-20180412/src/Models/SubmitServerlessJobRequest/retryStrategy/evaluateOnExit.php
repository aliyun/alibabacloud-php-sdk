<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\retryStrategy;

use AlibabaCloud\Tea\Model;

class evaluateOnExit extends Model
{
    /**
     * @description The action that you want to take on the job. Valid values:
     *
     *   Retry: The job starts a retry when a specific exit code is hit.
     *   Exit: The job exits when a specific exit code is hit.
     *
     * @example Retry
     *
     * @var string
     */
    public $action;

    /**
     * @description The job exit code, which is used together with the Action parameter as a job retry rule. Valid values: 0 to 255.
     *
     * @example 10
     *
     * @var string
     */
    public $onExitCode;
    protected $_name = [
        'action'     => 'Action',
        'onExitCode' => 'OnExitCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->onExitCode) {
            $res['OnExitCode'] = $this->onExitCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluateOnExit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['OnExitCode'])) {
            $model->onExitCode = $map['OnExitCode'];
        }

        return $model;
    }
}
