<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetChangeSetResponseBody\log;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetChangeSetResponseBody\parameters;
use AlibabaCloud\Tea\Model;

class GetChangeSetResponseBody extends Model
{
    /**
     * @description The ID of the change set.
     *
     * @example 4c11658d-bd47-4dd0-ba64-727edc62****
     *
     * @var string
     */
    public $changeSetId;

    /**
     * @description The name of the change set.
     *
     * @example ChangeSet_template
     *
     * @var string
     */
    public $changeSetName;

    /**
     * @description The type of the change set.
     *
     * @example UPDATE
     *
     * @var string
     */
    public $changeSetType;

    /**
     * @description The changes of the change set.
     *
     * @var mixed[][]
     */
    public $changes;

    /**
     * @description The time when the change set was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2021-12-01T02:20:56
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the change set.
     *
     * @example It is a demo.
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether rollback was performed when the stack failed to be created or updated.
     *
     * @example false
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description The execution status of the change set.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $executionStatus;

    /**
     * @description The output logs of the change set.
     *
     * @var log
     */
    public $log;

    /**
     * @description The parameters of the stack.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The region ID of the change set.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 3766EE04-76DD-50F9-9C23-3AF136CD5708
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the stack with which the change set is associated.
     *
     * @example a486fc19-ebb7-4ce9-a70b-554a7c3d****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The name of the stack with which the change set is associated.
     *
     * @example stack_2021-10-13
     *
     * @var string
     */
    public $stackName;

    /**
     * @description The status of the change set.
     *
     * @example CREATE_COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The reason why the change set is in its current state.
     *
     * @example too many changes.
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description The template body of the change set.
     *
     * > This parameter takes effect only if you set ShowTemplate to true.
     * @example {"ROSTemplateFormatVersion": "2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description The timeout period that is specified for the stack creation or update operation.
     *
     * @example 60
     *
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'changeSetId'      => 'ChangeSetId',
        'changeSetName'    => 'ChangeSetName',
        'changeSetType'    => 'ChangeSetType',
        'changes'          => 'Changes',
        'createTime'       => 'CreateTime',
        'description'      => 'Description',
        'disableRollback'  => 'DisableRollback',
        'executionStatus'  => 'ExecutionStatus',
        'log'              => 'Log',
        'parameters'       => 'Parameters',
        'regionId'         => 'RegionId',
        'requestId'        => 'RequestId',
        'stackId'          => 'StackId',
        'stackName'        => 'StackName',
        'status'           => 'Status',
        'statusReason'     => 'StatusReason',
        'templateBody'     => 'TemplateBody',
        'timeoutInMinutes' => 'TimeoutInMinutes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }
        if (null !== $this->changeSetName) {
            $res['ChangeSetName'] = $this->changeSetName;
        }
        if (null !== $this->changeSetType) {
            $res['ChangeSetType'] = $this->changeSetType;
        }
        if (null !== $this->changes) {
            $res['Changes'] = $this->changes;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }
        if (null !== $this->log) {
            $res['Log'] = null !== $this->log ? $this->log->toMap() : null;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChangeSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }
        if (isset($map['ChangeSetName'])) {
            $model->changeSetName = $map['ChangeSetName'];
        }
        if (isset($map['ChangeSetType'])) {
            $model->changeSetType = $map['ChangeSetType'];
        }
        if (isset($map['Changes'])) {
            if (!empty($map['Changes'])) {
                $model->changes = $map['Changes'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['ExecutionStatus'])) {
            $model->executionStatus = $map['ExecutionStatus'];
        }
        if (isset($map['Log'])) {
            $model->log = log::fromMap($map['Log']);
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }

        return $model;
    }
}
