<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesResponseBody\pagingInfo\dataQualityRules\checkingConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesResponseBody\pagingInfo\dataQualityRules\errorHandlers;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesResponseBody\pagingInfo\dataQualityRules\samplingConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesResponseBody\pagingInfo\dataQualityRules\target;

class dataQualityRules extends Model
{
    /**
     * @var checkingConfig
     */
    public $checkingConfig;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var errorHandlers[]
     */
    public $errorHandlers;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var samplingConfig
     */
    public $samplingConfig;
    /**
     * @var string
     */
    public $severity;
    /**
     * @var target
     */
    public $target;
    /**
     * @var string
     */
    public $templateCode;
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
    ];

    public function validate()
    {
        if (null !== $this->checkingConfig) {
            $this->checkingConfig->validate();
        }
        if (\is_array($this->errorHandlers)) {
            Model::validateArray($this->errorHandlers);
        }
        if (null !== $this->samplingConfig) {
            $this->samplingConfig->validate();
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkingConfig) {
            $res['CheckingConfig'] = null !== $this->checkingConfig ? $this->checkingConfig->toArray($noStream) : $this->checkingConfig;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->errorHandlers) {
            if (\is_array($this->errorHandlers)) {
                $res['ErrorHandlers'] = [];
                $n1                   = 0;
                foreach ($this->errorHandlers as $item1) {
                    $res['ErrorHandlers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['SamplingConfig'] = null !== $this->samplingConfig ? $this->samplingConfig->toArray($noStream) : $this->samplingConfig;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
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
                $n1                   = 0;
                foreach ($map['ErrorHandlers'] as $item1) {
                    $model->errorHandlers[$n1++] = errorHandlers::fromMap($item1);
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

        return $model;
    }
}
