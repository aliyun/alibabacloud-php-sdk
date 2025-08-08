<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $areaId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $configurationShrink;

    /**
     * @var string
     */
    public $instancesShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $processVariablesShrink;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $variablesShrink;
    protected $_name = [
        'areaId' => 'AreaId',
        'clientToken' => 'ClientToken',
        'configurationShrink' => 'Configuration',
        'instancesShrink' => 'Instances',
        'name' => 'Name',
        'processVariablesShrink' => 'ProcessVariables',
        'resourceGroupId' => 'ResourceGroupId',
        'templateId' => 'TemplateId',
        'variablesShrink' => 'Variables',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->configurationShrink) {
            $res['Configuration'] = $this->configurationShrink;
        }

        if (null !== $this->instancesShrink) {
            $res['Instances'] = $this->instancesShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->processVariablesShrink) {
            $res['ProcessVariables'] = $this->processVariablesShrink;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->variablesShrink) {
            $res['Variables'] = $this->variablesShrink;
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
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Configuration'])) {
            $model->configurationShrink = $map['Configuration'];
        }

        if (isset($map['Instances'])) {
            $model->instancesShrink = $map['Instances'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProcessVariables'])) {
            $model->processVariablesShrink = $map['ProcessVariables'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['Variables'])) {
            $model->variablesShrink = $map['Variables'];
        }

        return $model;
    }
}
