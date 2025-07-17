<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataQualityRuleShrinkRequest extends Model
{
    /**
     * @description The check settings for sample data.
     *
     * @var string
     */
    public $checkingConfigShrink;

    /**
     * @description The description of the rule. The description can be up to 500 characters in length.
     *
     * @example this is a odps _sql task
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable the monitoring rule.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The operations that you can perform after the rule-based check fails.
     *
     * @var string
     */
    public $errorHandlersShrink;

    /**
     * @description The name of the rule.
     *
     * This parameter is required.
     *
     * @example The table cannot be empty.
     *
     * @var string
     */
    public $name;

    /**
     * @description The DataWorks workspace ID.
     *
     * This parameter is required.
     *
     * @example 10726
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The sampling settings.
     *
     * @var string
     */
    public $samplingConfigShrink;

    /**
     * @description The strength of the rule. Valid values:
     *
     *   Normal
     *   High
     *
     * @example Normal
     *
     * @var string
     */
    public $severity;

    /**
     * @description The monitored object of the rule.
     *
     * @var string
     */
    public $targetShrink;

    /**
     * @description The ID of the template used by the rule.
     *
     * @example system::user_defined
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'checkingConfigShrink' => 'CheckingConfig',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'errorHandlersShrink' => 'ErrorHandlers',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'samplingConfigShrink' => 'SamplingConfig',
        'severity' => 'Severity',
        'targetShrink' => 'Target',
        'templateCode' => 'TemplateCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkingConfigShrink) {
            $res['CheckingConfig'] = $this->checkingConfigShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->errorHandlersShrink) {
            $res['ErrorHandlers'] = $this->errorHandlersShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->samplingConfigShrink) {
            $res['SamplingConfig'] = $this->samplingConfigShrink;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->targetShrink) {
            $res['Target'] = $this->targetShrink;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataQualityRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckingConfig'])) {
            $model->checkingConfigShrink = $map['CheckingConfig'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ErrorHandlers'])) {
            $model->errorHandlersShrink = $map['ErrorHandlers'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SamplingConfig'])) {
            $model->samplingConfigShrink = $map['SamplingConfig'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Target'])) {
            $model->targetShrink = $map['Target'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
