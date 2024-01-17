<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ListAsyncTasksShrinkRequest extends Model
{
    /**
     * @example cd327c3d5d5e44159cc716e23bfa530e_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 2023-03-18 02:00:00
     *
     * @var string
     */
    public $createTimeEnd;

    /**
     * @example 2023-02-19 07:28:11
     *
     * @var string
     */
    public $createTimeStart;

    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example MaterialDocumentUpload
     *
     * @var string
     */
    public $taskCode;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskStatusListShrink;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskTypeListShrink;
    protected $_name = [
        'agentKey'             => 'AgentKey',
        'createTimeEnd'        => 'CreateTimeEnd',
        'createTimeStart'      => 'CreateTimeStart',
        'current'              => 'Current',
        'size'                 => 'Size',
        'taskCode'             => 'TaskCode',
        'taskName'             => 'TaskName',
        'taskStatus'           => 'TaskStatus',
        'taskStatusListShrink' => 'TaskStatusList',
        'taskType'             => 'TaskType',
        'taskTypeListShrink'   => 'TaskTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }
        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->taskCode) {
            $res['TaskCode'] = $this->taskCode;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskStatusListShrink) {
            $res['TaskStatusList'] = $this->taskStatusListShrink;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskTypeListShrink) {
            $res['TaskTypeList'] = $this->taskTypeListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAsyncTasksShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }
        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['TaskCode'])) {
            $model->taskCode = $map['TaskCode'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskStatusList'])) {
            $model->taskStatusListShrink = $map['TaskStatusList'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskTypeList'])) {
            $model->taskTypeListShrink = $map['TaskTypeList'];
        }

        return $model;
    }
}
