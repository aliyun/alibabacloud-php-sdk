<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ExecuteAdhocWorkflowInstanceShrinkRequest extends Model
{
    /**
     * @description The data timestamp.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $bizDate;

    /**
     * @description The environment of the workspace. Valid values:
     *
     *   Prod: production environment
     *   Dev: development environment
     *
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @description The name of the workflow instance.
     *
     * This parameter is required.
     *
     * @example WorkflowInstance1
     *
     * @var string
     */
    public $name;

    /**
     * @description The account ID of the owner.
     *
     * This parameter is required.
     *
     * @example 1000
     *
     * @var string
     */
    public $owner;

    /**
     * @description The workspace ID.
     *
     * This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The tasks.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $tasksShrink;
    protected $_name = [
        'bizDate' => 'BizDate',
        'envType' => 'EnvType',
        'name' => 'Name',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'tasksShrink' => 'Tasks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tasksShrink) {
            $res['Tasks'] = $this->tasksShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteAdhocWorkflowInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Tasks'])) {
            $model->tasksShrink = $map['Tasks'];
        }

        return $model;
    }
}
