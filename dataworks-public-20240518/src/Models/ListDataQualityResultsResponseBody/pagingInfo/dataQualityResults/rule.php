<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponseBody\pagingInfo\dataQualityResults;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponseBody\pagingInfo\dataQualityResults\rule\checkingConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponseBody\pagingInfo\dataQualityResults\rule\errorHandlers;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponseBody\pagingInfo\dataQualityResults\rule\samplingConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponseBody\pagingInfo\dataQualityResults\rule\target;
use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @description The check settings for sample data.
     *
     * @var checkingConfig
     */
    public $checkingConfig;

    /**
     * @example this is a odps _sql task
     *
     * @var string
     */
    public $description;

    /**
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
     * @example 100001
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The sampling settings.
     *
     * @var samplingConfig
     */
    public $samplingConfig;

    /**
     * @description The strength of the rule. Valid values:
     *
     *   High
     *   Normal
     *
     * @example NORMAL
     *
     * @var string
     */
    public $severity;

    /**
     * @description The monitored object of the rule.
     *
     * @var target
     */
    public $target;

    /**
     * @description The code of the template that is referenced when you create a rule.
     *
     * @example system::user_defined
     *
     * @var string
     */
    public $templateCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'checkingConfig' => 'CheckingConfig',
        'description'    => 'Description',
        'enabled'        => 'Enabled',
        'errorHandlers'  => 'ErrorHandlers',
        'id'             => 'Id',
        'name'           => 'Name',
        'projectId'      => 'ProjectId',
        'samplingConfig' => 'SamplingConfig',
        'severity'       => 'Severity',
        'target'         => 'Target',
        'templateCode'   => 'TemplateCode',
        'tenantId'       => 'TenantId',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->samplingConfig) {
            $res['SamplingConfig'] = null !== $this->samplingConfig ? $this->samplingConfig->toMap() : null;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toMap() : null;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
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
                $n                    = 0;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SamplingConfig'])) {
            $model->samplingConfig = samplingConfig::fromMap($map['SamplingConfig']);
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
