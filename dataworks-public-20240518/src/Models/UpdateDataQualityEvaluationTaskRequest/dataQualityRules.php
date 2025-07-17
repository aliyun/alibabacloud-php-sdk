<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskRequest\dataQualityRules\checkingConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskRequest\dataQualityRules\errorHandlers;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskRequest\dataQualityRules\samplingConfig;
use AlibabaCloud\Tea\Model;

class dataQualityRules extends Model
{
    /**
     * @description The check settings for sample data.
     *
     * @var checkingConfig
     */
    public $checkingConfig;

    /**
     * @description The description of the rule.
     *
     * @example OpenAPI test rules
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
     * @var errorHandlers[]
     */
    public $errorHandlers;

    /**
     * @description The rule ID. You can call the [ListQualityRules](https://help.aliyun.com/document_detail/173995.html) operation to query the ID of the monitoring rule.
     *
     * @example 1022171560
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the monitoring rule.
     *
     * @example OpenAPI test rules
     *
     * @var string
     */
    public $name;

    /**
     * @description The parameters required for sampling.
     *
     * @var samplingConfig
     */
    public $samplingConfig;

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
     * @description The ID of the template used by the rule.
     *
     * @example SYSTEM:field:null_value:fixed:0
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'checkingConfig' => 'CheckingConfig',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'errorHandlers' => 'ErrorHandlers',
        'id' => 'Id',
        'name' => 'Name',
        'samplingConfig' => 'SamplingConfig',
        'severity' => 'Severity',
        'templateCode' => 'TemplateCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkingConfig) {
            $res['CheckingConfig'] = null !== $this->checkingConfig ? $this->checkingConfig->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->errorHandlers) {
            $res['ErrorHandlers'] = [];
            if (null !== $this->errorHandlers && \is_array($this->errorHandlers)) {
                $n = 0;
                foreach ($this->errorHandlers as $item) {
                    $res['ErrorHandlers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->samplingConfig) {
            $res['SamplingConfig'] = null !== $this->samplingConfig ? $this->samplingConfig->toMap() : null;
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
     * @return dataQualityRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckingConfig'])) {
            $model->checkingConfig = checkingConfig::fromMap($map['CheckingConfig']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ErrorHandlers'])) {
            if (!empty($map['ErrorHandlers'])) {
                $model->errorHandlers = [];
                $n = 0;
                foreach ($map['ErrorHandlers'] as $item) {
                    $model->errorHandlers[$n++] = null !== $item ? errorHandlers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SamplingConfig'])) {
            $model->samplingConfig = samplingConfig::fromMap($map['SamplingConfig']);
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
