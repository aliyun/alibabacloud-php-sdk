<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class CreateExplorerTaskRequest extends Model
{
    /**
     * @var bool
     */
    public $initModuleState;

    /**
     * @var string
     */
    public $terraformVersion;

    /**
     * @var bool
     */
    public $autoApply;

    /**
     * @var bool
     */
    public $autoDestroy;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $skipPropertyValidation;

    /**
     * @var string
     */
    public $terraformProviderVersion;

    /**
     * @var string
     */
    public $triggerValue;
    protected $_name = [
        'initModuleState' => 'InitModuleState',
        'terraformVersion' => 'TerraformVersion',
        'autoApply' => 'autoApply',
        'autoDestroy' => 'autoDestroy',
        'clientToken' => 'clientToken',
        'description' => 'description',
        'moduleId' => 'moduleId',
        'moduleVersion' => 'moduleVersion',
        'name' => 'name',
        'skipPropertyValidation' => 'skipPropertyValidation',
        'terraformProviderVersion' => 'terraformProviderVersion',
        'triggerValue' => 'triggerValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->initModuleState) {
            $res['InitModuleState'] = $this->initModuleState;
        }

        if (null !== $this->terraformVersion) {
            $res['TerraformVersion'] = $this->terraformVersion;
        }

        if (null !== $this->autoApply) {
            $res['autoApply'] = $this->autoApply;
        }

        if (null !== $this->autoDestroy) {
            $res['autoDestroy'] = $this->autoDestroy;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }

        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->skipPropertyValidation) {
            $res['skipPropertyValidation'] = $this->skipPropertyValidation;
        }

        if (null !== $this->terraformProviderVersion) {
            $res['terraformProviderVersion'] = $this->terraformProviderVersion;
        }

        if (null !== $this->triggerValue) {
            $res['triggerValue'] = $this->triggerValue;
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
        if (isset($map['InitModuleState'])) {
            $model->initModuleState = $map['InitModuleState'];
        }

        if (isset($map['TerraformVersion'])) {
            $model->terraformVersion = $map['TerraformVersion'];
        }

        if (isset($map['autoApply'])) {
            $model->autoApply = $map['autoApply'];
        }

        if (isset($map['autoDestroy'])) {
            $model->autoDestroy = $map['autoDestroy'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }

        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['skipPropertyValidation'])) {
            $model->skipPropertyValidation = $map['skipPropertyValidation'];
        }

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        if (isset($map['triggerValue'])) {
            $model->triggerValue = $map['triggerValue'];
        }

        return $model;
    }
}
