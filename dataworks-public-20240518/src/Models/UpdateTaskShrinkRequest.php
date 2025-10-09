<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientUniqueCode;

    /**
     * @var string
     */
    public $dataSourceShrink;

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
    public $inputsShrink;

    /**
     * @var string
     */
    public $instanceMode;

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
     * @var int
     */
    public $rerunInterval;

    /**
     * @var string
     */
    public $rerunMode;

    /**
     * @var int
     */
    public $rerunTimes;

    /**
     * @var string
     */
    public $runtimeResourceShrink;

    /**
     * @var string
     */
    public $scriptShrink;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $triggerShrink;
    protected $_name = [
        'clientUniqueCode' => 'ClientUniqueCode',
        'dataSourceShrink' => 'DataSource',
        'dependenciesShrink' => 'Dependencies',
        'description' => 'Description',
        'envType' => 'EnvType',
        'id' => 'Id',
        'inputsShrink' => 'Inputs',
        'instanceMode' => 'InstanceMode',
        'name' => 'Name',
        'outputsShrink' => 'Outputs',
        'owner' => 'Owner',
        'rerunInterval' => 'RerunInterval',
        'rerunMode' => 'RerunMode',
        'rerunTimes' => 'RerunTimes',
        'runtimeResourceShrink' => 'RuntimeResource',
        'scriptShrink' => 'Script',
        'tagsShrink' => 'Tags',
        'timeout' => 'Timeout',
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

        if (null !== $this->dataSourceShrink) {
            $res['DataSource'] = $this->dataSourceShrink;
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

        if (null !== $this->inputsShrink) {
            $res['Inputs'] = $this->inputsShrink;
        }

        if (null !== $this->instanceMode) {
            $res['InstanceMode'] = $this->instanceMode;
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

        if (null !== $this->rerunInterval) {
            $res['RerunInterval'] = $this->rerunInterval;
        }

        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }

        if (null !== $this->rerunTimes) {
            $res['RerunTimes'] = $this->rerunTimes;
        }

        if (null !== $this->runtimeResourceShrink) {
            $res['RuntimeResource'] = $this->runtimeResourceShrink;
        }

        if (null !== $this->scriptShrink) {
            $res['Script'] = $this->scriptShrink;
        }

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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

        if (isset($map['DataSource'])) {
            $model->dataSourceShrink = $map['DataSource'];
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

        if (isset($map['Inputs'])) {
            $model->inputsShrink = $map['Inputs'];
        }

        if (isset($map['InstanceMode'])) {
            $model->instanceMode = $map['InstanceMode'];
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

        if (isset($map['RerunInterval'])) {
            $model->rerunInterval = $map['RerunInterval'];
        }

        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }

        if (isset($map['RerunTimes'])) {
            $model->rerunTimes = $map['RerunTimes'];
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResourceShrink = $map['RuntimeResource'];
        }

        if (isset($map['Script'])) {
            $model->scriptShrink = $map['Script'];
        }

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Trigger'])) {
            $model->triggerShrink = $map['Trigger'];
        }

        return $model;
    }
}
