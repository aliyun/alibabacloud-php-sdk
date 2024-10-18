<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ImportWorkflowDefinitionResponseBody;

use AlibabaCloud\Tea\Model;

class asyncJob extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $completed;

    /**
     * @example 1706581425000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example target folder already exists: XXXX
     *
     * @var string
     */
    public $error;

    /**
     * @example 1234567691239009XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @example 0
     *
     * @var int
     */
    public $progress;

    /**
     * @example 632647691239009XXXX
     *
     * @var string
     */
    public $response;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example Create
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'completed'  => 'Completed',
        'createTime' => 'CreateTime',
        'error'      => 'Error',
        'id'         => 'Id',
        'progress'   => 'Progress',
        'response'   => 'Response',
        'status'     => 'Status',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

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
