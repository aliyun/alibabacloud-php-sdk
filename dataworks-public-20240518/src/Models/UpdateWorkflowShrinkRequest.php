<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkflowShrinkRequest extends Model
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
     * @description The dependency information.
     *
     * @var string
     */
    public $dependenciesShrink;

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
     *   Prod: production environment
     *   Dev: development environment
     *
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @description The workflow ID.
     *
     * This parameter is required.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the workflow.
     *
     * This parameter is required.
     *
     * @example My Workflow
     *
     * @var string
     */
    public $name;

    /**
     * @description The output information.
     *
     * @var string
     */
    public $outputsShrink;

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
     * @description The parameters.
     *
     * @example para1=$bizdate para2=$[yyyymmdd]
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The tags.
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The tasks.
     *
     * @var string
     */
    public $tasksShrink;

    /**
     * @description The trigger method.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $triggerShrink;
    protected $_name = [
        'clientUniqueCode' => 'ClientUniqueCode',
        'dependenciesShrink' => 'Dependencies',
        'description' => 'Description',
        'envType' => 'EnvType',
        'id' => 'Id',
        'name' => 'Name',
        'outputsShrink' => 'Outputs',
        'owner' => 'Owner',
        'parameters' => 'Parameters',
        'tagsShrink' => 'Tags',
        'tasksShrink' => 'Tasks',
        'triggerShrink' => 'Trigger',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientUniqueCode) {
            $res['ClientUniqueCode'] = $this->clientUniqueCode;
        }
        if (null !== $this->dependenciesShrink) {
            $res['Dependencies'] = $this->dependenciesShrink;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputsShrink) {
            $res['Outputs'] = $this->outputsShrink;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->tasksShrink) {
            $res['Tasks'] = $this->tasksShrink;
        }
        if (null !== $this->triggerShrink) {
            $res['Trigger'] = $this->triggerShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWorkflowShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientUniqueCode'])) {
            $model->clientUniqueCode = $map['ClientUniqueCode'];
        }
        if (isset($map['Dependencies'])) {
            $model->dependenciesShrink = $map['Dependencies'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Outputs'])) {
            $model->outputsShrink = $map['Outputs'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['Tasks'])) {
            $model->tasksShrink = $map['Tasks'];
        }
        if (isset($map['Trigger'])) {
            $model->triggerShrink = $map['Trigger'];
        }

        return $model;
    }
}
