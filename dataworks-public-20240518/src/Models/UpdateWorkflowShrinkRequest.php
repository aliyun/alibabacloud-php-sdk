<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateWorkflowShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientUniqueCode;

    /**
     * @var string
     */
    public $dependenciesShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputsShrink;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $tasksShrink;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
