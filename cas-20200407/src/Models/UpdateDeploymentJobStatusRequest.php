<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class UpdateDeploymentJobStatusRequest extends Model
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
     * @description The desired status.
     *
     * Valid values:
     *
     *   pending
     *   scheduling
     *   editing
     *
     * This parameter is required.
     * @example editing
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'jobId'  => 'JobId',
        'status' => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDeploymentJobStatusRequest
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

        return $model;
    }
}
