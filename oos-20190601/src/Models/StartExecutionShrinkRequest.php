<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class StartExecutionShrinkRequest extends Model
{
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
    public $loopMode;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $parentExecutionId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $safetyCheck;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'description'       => 'Description',
        'loopMode'          => 'LoopMode',
        'mode'              => 'Mode',
        'parameters'        => 'Parameters',
        'parentExecutionId' => 'ParentExecutionId',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'safetyCheck'       => 'SafetyCheck',
        'tagsShrink'        => 'Tags',
        'templateContent'   => 'TemplateContent',
        'templateName'      => 'TemplateName',
        'templateURL'       => 'TemplateURL',
        'templateVersion'   => 'TemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->loopMode) {
            $res['LoopMode'] = $this->loopMode;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->parentExecutionId) {
            $res['ParentExecutionId'] = $this->parentExecutionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->safetyCheck) {
            $res['SafetyCheck'] = $this->safetyCheck;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartExecutionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LoopMode'])) {
            $model->loopMode = $map['LoopMode'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['ParentExecutionId'])) {
            $model->parentExecutionId = $map['ParentExecutionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SafetyCheck'])) {
            $model->safetyCheck = $map['SafetyCheck'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
