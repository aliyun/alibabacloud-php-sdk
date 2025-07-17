<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowsResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowsResponseBody\pagingInfo\workflows\trigger;
use AlibabaCloud\Tea\Model;

class workflows extends Model
{
    /**
     * @description The unique code of the client. This parameter is used to create a workflow asynchronously and implement the idempotence of the workflow. If you do not specify this parameter when you create the workflow, the system automatically generates a unique code. The unique code is uniquely associated with the workflow ID. If you specify this parameter when you update or delete the workflow, the value of this parameter must be the unique code that is used to create the workflow.
     *
     * @example Workflow_0bc5213917368545132902xxxxxxxx
     *
     * @var string
     */
    public $clientUniqueCode;

    /**
     * @description The creation time.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The account ID of the creator.
     *
     * @example 1000
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The environment of the workspace. Valid values:
     *
     *   Prod
     *   Dev
     *
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @description The workflow ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The modification time.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The account ID of the modifier.
     *
     * @example 1000
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @description The name.
     *
     * @example Workflow1
     *
     * @var string
     */
    public $name;

    /**
     * @description The account ID of the owner.
     *
     * @example 1000
     *
     * @var string
     */
    public $owner;

    /**
     * @description The parameters.
     *
     * @example para1=$bizdate para2=$[yyyymmdd]
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The workspace ID.
     *
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The trigger method.
     *
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'clientUniqueCode' => 'ClientUniqueCode',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'description' => 'Description',
        'envType' => 'EnvType',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'modifyUser' => 'ModifyUser',
        'name' => 'Name',
        'owner' => 'Owner',
        'parameters' => 'Parameters',
        'projectId' => 'ProjectId',
        'trigger' => 'Trigger',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientUniqueCode) {
            $res['ClientUniqueCode'] = $this->clientUniqueCode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workflows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientUniqueCode'])) {
            $model->clientUniqueCode = $map['ClientUniqueCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        return $model;
    }
}
