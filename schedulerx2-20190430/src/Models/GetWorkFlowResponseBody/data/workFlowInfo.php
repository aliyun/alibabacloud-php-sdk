<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponseBody\data;

use AlibabaCloud\Tea\Model;

class workFlowInfo extends Model
{
    /**
     * @description The description of the workflow.
     *
     * @example my first workflow
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the workflow.
     *
     * @example workflow_111
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the workflow.
     *
     * @example Successful
     *
     * @var string
     */
    public $status;

    /**
     * @description The time expression of the workflow.
     *
     * @example 0 0 2 * * ?
     *
     * @var string
     */
    public $timeExpression;

    /**
     * @description The time type of the workflow.
     *
     * @example cron
     *
     * @var string
     */
    public $timeType;

    /**
     * @description The ID of the workflow.
     *
     * @example 1234xxx
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'description'    => 'Description',
        'name'           => 'Name',
        'status'         => 'Status',
        'timeExpression' => 'TimeExpression',
        'timeType'       => 'TimeType',
        'workflowId'     => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeExpression) {
            $res['TimeExpression'] = $this->timeExpression;
        }
        if (null !== $this->timeType) {
            $res['TimeType'] = $this->timeType;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workFlowInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeExpression'])) {
            $model->timeExpression = $map['TimeExpression'];
        }
        if (isset($map['TimeType'])) {
            $model->timeType = $map['TimeType'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
