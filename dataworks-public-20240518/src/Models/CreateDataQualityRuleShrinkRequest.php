<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateDataQualityRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $checkingConfigShrink;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var string
     */
    public $errorHandlersShrink;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $samplingConfigShrink;
    /**
     * @var string
     */
    public $severity;
    /**
     * @var string
     */
    public $targetShrink;
    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'checkingConfigShrink' => 'CheckingConfig',
        'description'          => 'Description',
        'enabled'              => 'Enabled',
        'errorHandlersShrink'  => 'ErrorHandlers',
        'name'                 => 'Name',
        'projectId'            => 'ProjectId',
        'samplingConfigShrink' => 'SamplingConfig',
        'severity'             => 'Severity',
        'targetShrink'         => 'Target',
        'templateCode'         => 'TemplateCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
