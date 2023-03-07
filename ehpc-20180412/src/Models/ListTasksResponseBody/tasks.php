<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListTasksResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The current step of the task.
     *
     * @example 16
     *
     * @var int
     */
    public $currentStep;

    /**
     * @description The list of error messages returned for the task.
     *
     * For information about error messages and their solutions, visit the [API Error Center](https://error-center.alibabacloud.com/status/product/EHPC).
     * @example []
     *
     * @var string
     */
    public $errors;

    /**
     * @description The request parameters of the task. The value is a JSON string.
     *
     * @example {\"requestId\":\"0A6CA33E-BFBF-4F92-BDAE-4E8860DA****\",\"uid\":\"160998252992****\",\"bid\":\"268**\",\"clusterId\":\"ehpc-hz-ysQtcZ****\"}
     *
     * @var string
     */
    public $request;

    /**
     * @description The result of the task. Valid values:
     *
     *   If TaskType is set to CreateCluster and AddComputes, the value is in the `{\"Instances\":[]}` format, which indicates the information of the nodes added to the cluster.
     *   If TaskType is set to a value other than CreateCluster and AddComputes, the value is in the `{}` format.
     *
     * @example {\"Instances\":[{\"InstanceId\":\"i-bp1inb1j2xz8pnoi****\",\"Ip\":\"192.168.*.*\",\"Hostname\":\"login0\",\"role\":\"login\"}]}
     *
     * @var string
     */
    public $result;

    /**
     * @description The status of the task. Valid values:
     *
     *   Processing: The task is running.
     *   Success: The task is completed.
     *   Fail: The task failed.
     *   PartialFail: The task partially failed.
     *
     * @example Processing
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task.
     *
     * @example B745C159-3155-4B94-95D0-4B73D4D2****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of the task. Valid values:
     *
     *   CreateCluster: creates a cluster by calling the [CreateCluster](~~87100~~) operation.
     *   StartCluster: starts a cluster by calling the [StartCluster](~~200345~~) operation.
     *   StopCluster: stops a cluster by calling the [StopCluster](~~200346~~) operation.
     *   DeleteCluster: releases a cluster by calling the [DeleteCluster](~~87110~~) operation.
     *   AddComputes: adds nodes to a cluster by calling the [AddNodes](~~87147~~) operation.
     *   StartComputes: starts nodes by calling the [StartNodes](~~87159~~) operation.
     *   ResetCompute: resets nodes by calling the [ResetNodes](~~87158~~) operation.
     *   StopComputes: stops nodes by calling the [StopNodes](~~87160~~) operation.
     *   DeleteComputes: deletes nodes by calling the [DeleteNodes](~~87155~~) operation.
     *
     * @example StopCluster
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The total number of steps of the task.
     *
     * @example 35
     *
     * @var int
     */
    public $totalSteps;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'currentStep' => 'CurrentStep',
        'errors'      => 'Errors',
        'request'     => 'Request',
        'result'      => 'Result',
        'status'      => 'Status',
        'taskId'      => 'TaskId',
        'taskType'    => 'TaskType',
        'totalSteps'  => 'TotalSteps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }
        if (null !== $this->errors) {
            $res['Errors'] = $this->errors;
        }
        if (null !== $this->request) {
            $res['Request'] = $this->request;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->totalSteps) {
            $res['TotalSteps'] = $this->totalSteps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CurrentStep'])) {
            $model->currentStep = $map['CurrentStep'];
        }
        if (isset($map['Errors'])) {
            $model->errors = $map['Errors'];
        }
        if (isset($map['Request'])) {
            $model->request = $map['Request'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TotalSteps'])) {
            $model->totalSteps = $map['TotalSteps'];
        }

        return $model;
    }
}
