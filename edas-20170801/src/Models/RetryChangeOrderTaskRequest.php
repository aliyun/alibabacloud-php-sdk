<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class RetryChangeOrderTaskRequest extends Model
{
    /**
     * @description The retry status.
     *
     * @example true
     *
     * @var bool
     */
    public $retryStatus;

    /**
     * @description The ID of the process.
     *
     * @example 823-bhjf-23u4-eiuf*
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'retryStatus' => 'RetryStatus',
        'taskId'      => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->retryStatus) {
            $res['RetryStatus'] = $this->retryStatus;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetryChangeOrderTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RetryStatus'])) {
            $model->retryStatus = $map['RetryStatus'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
