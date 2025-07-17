<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataQualityRuleShrinkRequest extends Model
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
     * @description Specifies whether to enable the rule.
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
     * @description The rule ID.
     *
     * This parameter is required.
     *
     * @example 100001
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the rule. The name can be up to 255 characters in length and can contain digits, letters, and punctuation marks.
     *
     * @example The table cannot be empty.
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
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
     * @example High
     *
     * @var string
     */
    public $severity;

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
        'id' => 'Id',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'samplingConfigShrink' => 'SamplingConfig',
        'severity' => 'Severity',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDataQualityRuleShrinkRequest
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
