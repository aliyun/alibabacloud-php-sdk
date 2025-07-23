<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkerResourceStatusRequest extends Model
{
    /**
     * @description The ID of the deployment task. You can call the [CreateDeploymentJob](https://help.aliyun.com/document_detail/2712234.html) operation to obtain the ID of a deployment task from the **JobId** parameter. You can also call the [ListDeploymentJob](https://help.aliyun.com/document_detail/2712223.html) operation to obtain the ID of a deployment task.
     *
     * This parameter is required.
     *
     * @example 8888
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The desired status.
     *
     * Valid values:
     *
     *   rollback
     *
     * This parameter is required.
     *
     * @example rollback
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the worker task. You can call the [ListWorkerResource](https://help.aliyun.com/document_detail/2712224.html) operation to obtain the ID of a worker task.
     *
     * This parameter is required.
     *
     * @example 1234
     *
     * @var int
     */
    public $workerId;
    protected $_name = [
        'jobId' => 'JobId',
        'status' => 'Status',
        'workerId' => 'WorkerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workerId) {
            $res['WorkerId'] = $this->workerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWorkerResourceStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WorkerId'])) {
            $model->workerId = $map['WorkerId'];
        }

        return $model;
    }
}
