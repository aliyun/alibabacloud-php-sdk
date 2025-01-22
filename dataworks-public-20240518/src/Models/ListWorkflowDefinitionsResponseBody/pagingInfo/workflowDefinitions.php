<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponseBody\pagingInfo\workflowDefinitions\script;

class workflowDefinitions extends Model
{
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $modifyTime;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var script
     */
    public $script;
    /**
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
        if (null !== $this->script) {
            $this->script->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Script'] = null !== $this->script ? $this->script->toArray($noStream) : $this->script;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
