<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleTemplateResponseBody\dataQualityRuleTemplate\checkingConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleTemplateResponseBody\dataQualityRuleTemplate\samplingConfig;

class dataQualityRuleTemplate extends Model
{
    /**
     * @var checkingConfig
     */
    public $checkingConfig;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $directoryPath;
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
    public $visibleScope;
    protected $_name = [
        'checkingConfig' => 'CheckingConfig',
        'code'           => 'Code',
        'directoryPath'  => 'DirectoryPath',
        'name'           => 'Name',
        'projectId'      => 'ProjectId',
        'samplingConfig' => 'SamplingConfig',
        'visibleScope'   => 'VisibleScope',
    ];

    public function validate()
    {
        if (null !== $this->checkingConfig) {
            $this->checkingConfig->validate();
        }
        if (null !== $this->samplingConfig) {
            $this->samplingConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkingConfig) {
            $res['CheckingConfig'] = null !== $this->checkingConfig ? $this->checkingConfig->toArray($noStream) : $this->checkingConfig;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->directoryPath) {
            $res['DirectoryPath'] = $this->directoryPath;
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

        if (null !== $this->visibleScope) {
            $res['VisibleScope'] = $this->visibleScope;
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

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DirectoryPath'])) {
            $model->directoryPath = $map['DirectoryPath'];
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

        if (isset($map['VisibleScope'])) {
            $model->visibleScope = $map['VisibleScope'];
        }

        return $model;
    }
}
