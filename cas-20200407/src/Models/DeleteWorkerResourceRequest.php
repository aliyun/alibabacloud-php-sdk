<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class DeleteWorkerResourceRequest extends Model
{
    /**
     * @description The ID of the deployment task.
     *
     * This parameter is required.
     * @example 8888
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The ID of the worker for the deployment task.
     *
     * This parameter is required.
     * @example 13
     *
     * @var int
     */
    public $workerId;
    protected $_name = [
        'jobId'    => 'JobId',
        'workerId' => 'WorkerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->workerId) {
            $res['WorkerId'] = $this->workerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteWorkerResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['WorkerId'])) {
            $model->workerId = $map['WorkerId'];
        }

        return $model;
    }
}
