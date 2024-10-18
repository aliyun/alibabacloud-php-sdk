<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponseBody\pagingInfo\workflowDefinitions\script;
use AlibabaCloud\Tea\Model;

class workflowDefinitions extends Model
{
    /**
     * @description The time when the workflow was created. This value is a UNIX timestamp.
     *
     * @example 1698057323000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the workflow.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the workflow.
     *
     * @example 463497880880954XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description The times when the workflow was last modified. This value is a UNIX timestamp.
     *
     * @example 1698057323000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The name of the workflow.
     *
     * @var string
     */
    public $name;

    /**
     * @description The owner.
     *
     * @example 110755000425XXXX
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the DataWorks workspace to which the workflow belongs.
     *
     * This parameter is required.
     * @example 4710
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The script information.
     *
     * @var script
     */
    public $script;

    /**
     * @description The type of the workflow.
     *
     * Valid values:
     *
     *   CycleWorkflow
     *   ManualWorkflow
     *
     * @example CycleWorkflow
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'id'          => 'Id',
        'modifyTime'  => 'ModifyTime',
        'name'        => 'Name',
        'owner'       => 'Owner',
        'projectId'   => 'ProjectId',
        'script'      => 'Script',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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
        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workflowDefinitions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
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
        if (isset($map['Script'])) {
            $model->script = script::fromMap($map['Script']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
