<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InstallAgentResponseBody\executionResultList;

use AlibabaCloud\Tea\Model;

class executionResult extends Model
{
    /**
     * @description The time when the installation was complete.
     *
     * @example 20**-11-10T07:02:17Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The ID of the instance.
     *
     * @example i-2ze7s2v0b789k*******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The state of the installation.
     *
     * @example Finished
     *
     * @var string
     */
    public $invokeRecordStatus;

    /**
     * @description The state of the installation command.
     *
     * @example OK
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the installation was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'finishedTime'       => 'FinishedTime',
        'instanceId'         => 'InstanceId',
        'invokeRecordStatus' => 'InvokeRecordStatus',
        'status'             => 'Status',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->invokeRecordStatus) {
            $res['InvokeRecordStatus'] = $this->invokeRecordStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executionResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InvokeRecordStatus'])) {
            $model->invokeRecordStatus = $map['InvokeRecordStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
