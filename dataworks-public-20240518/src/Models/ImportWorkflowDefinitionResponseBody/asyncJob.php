<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ImportWorkflowDefinitionResponseBody;

use AlibabaCloud\Tea\Model;

class asyncJob extends Model
{
    /**
     * @description Indicates whether the asynchronous task is complete.
     *
     * @example false
     *
     * @var bool
     */
    public $completed;

    /**
     * @description The time when the asynchronous task was created. This value is a UNIX timestamp.
     *
     * @example 1706581425000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The error message returned if the asynchronous task fails.
     *
     * @example target folder already exists: XXXX
     *
     * @var string
     */
    public $error;

    /**
     * @description The ID of the asynchronous task.
     *
     * @example 1234567691239009XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description The progress of the asynchronous task. Valid values: 0 to 100.
     *
     * @example 0
     *
     * @var int
     */
    public $progress;

    /**
     * @description The response.
     *
     * >  The workflow ID is returned.
     *
     * @example 632647691239009XXXX
     *
     * @var string
     */
    public $response;

    /**
     * @description The status of the asynchronous task.
     *
     * Valid values:
     *
     *   Running: The asynchronous task is running.
     *   Success: The asynchronous task is complete.
     *   Fail: The asynchronous task fails.
     *   Cancel: The asynchronous task is canceled.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the asynchronous task.
     *
     * Valid values:
     *
     *   Create: The asynchronous task is used to create an object.
     *   Cancel: The asynchronous task is used to cancel an operation.
     *
     * @example Create
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'completed' => 'Completed',
        'createTime' => 'CreateTime',
        'error' => 'Error',
        'id' => 'Id',
        'progress' => 'Progress',
        'response' => 'Response',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->completed) {
            $res['Completed'] = $this->completed;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->response) {
            $res['Response'] = $this->response;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asyncJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Completed'])) {
            $model->completed = $map['Completed'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Response'])) {
            $model->response = $map['Response'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
