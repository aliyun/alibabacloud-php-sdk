<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest\codeSource;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest\customEnvs;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest\dataSources;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest\userVpc;

class CreateJobRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var codeSource
     */
    public $codeSource;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var customEnvs[]
     */
    public $customEnvs;

    /**
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $debuggerConfigContent;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var JobElasticSpec
     */
    public $elasticSpec;

    /**
     * @var string[]
     */
    public $envs;

    /**
     * @var int
     */
    public $jobMaxRunningTimeMinutes;

    /**
     * @var JobSpec[]
     */
    public $jobSpecs;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $options;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var JobSettings
     */
    public $settings;

    /**
     * @var string
     */
    public $successPolicy;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var int
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $thirdpartyLibDir;

    /**
     * @var string[]
     */
    public $thirdpartyLibs;

    /**
     * @var string
     */
    public $userCommand;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'codeSource' => 'CodeSource',
        'credentialConfig' => 'CredentialConfig',
        'customEnvs' => 'CustomEnvs',
        'dataSources' => 'DataSources',
        'debuggerConfigContent' => 'DebuggerConfigContent',
        'displayName' => 'DisplayName',
        'elasticSpec' => 'ElasticSpec',
        'envs' => 'Envs',
        'jobMaxRunningTimeMinutes' => 'JobMaxRunningTimeMinutes',
        'jobSpecs' => 'JobSpecs',
        'jobType' => 'JobType',
        'options' => 'Options',
        'priority' => 'Priority',
        'resourceId' => 'ResourceId',
        'settings' => 'Settings',
        'successPolicy' => 'SuccessPolicy',
        'templateId' => 'TemplateId',
        'templateVersion' => 'TemplateVersion',
        'thirdpartyLibDir' => 'ThirdpartyLibDir',
        'thirdpartyLibs' => 'ThirdpartyLibs',
        'userCommand' => 'UserCommand',
        'userVpc' => 'UserVpc',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->codeSource) {
            $this->codeSource->validate();
        }
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (\is_array($this->customEnvs)) {
            Model::validateArray($this->customEnvs);
        }
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        if (null !== $this->elasticSpec) {
            $this->elasticSpec->validate();
        }
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        if (\is_array($this->jobSpecs)) {
            Model::validateArray($this->jobSpecs);
        }
        if (null !== $this->settings) {
            $this->settings->validate();
        }
        if (\is_array($this->thirdpartyLibs)) {
            Model::validateArray($this->thirdpartyLibs);
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->codeSource) {
            $res['CodeSource'] = null !== $this->codeSource ? $this->codeSource->toArray($noStream) : $this->codeSource;
        }

        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
        }

        if (null !== $this->customEnvs) {
            if (\is_array($this->customEnvs)) {
                $res['CustomEnvs'] = [];
                $n1 = 0;
                foreach ($this->customEnvs as $item1) {
                    $res['CustomEnvs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSources) {
            if (\is_array($this->dataSources)) {
                $res['DataSources'] = [];
                $n1 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['DataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->debuggerConfigContent) {
            $res['DebuggerConfigContent'] = $this->debuggerConfigContent;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->elasticSpec) {
            $res['ElasticSpec'] = null !== $this->elasticSpec ? $this->elasticSpec->toArray($noStream) : $this->elasticSpec;
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['Envs'] = [];
                foreach ($this->envs as $key1 => $value1) {
                    $res['Envs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->jobMaxRunningTimeMinutes) {
            $res['JobMaxRunningTimeMinutes'] = $this->jobMaxRunningTimeMinutes;
        }

        if (null !== $this->jobSpecs) {
            if (\is_array($this->jobSpecs)) {
                $res['JobSpecs'] = [];
                $n1 = 0;
                foreach ($this->jobSpecs as $item1) {
                    $res['JobSpecs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->settings) {
            $res['Settings'] = null !== $this->settings ? $this->settings->toArray($noStream) : $this->settings;
        }

        if (null !== $this->successPolicy) {
            $res['SuccessPolicy'] = $this->successPolicy;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        if (null !== $this->thirdpartyLibDir) {
            $res['ThirdpartyLibDir'] = $this->thirdpartyLibDir;
        }

        if (null !== $this->thirdpartyLibs) {
            if (\is_array($this->thirdpartyLibs)) {
                $res['ThirdpartyLibs'] = [];
                $n1 = 0;
                foreach ($this->thirdpartyLibs as $item1) {
                    $res['ThirdpartyLibs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userCommand) {
            $res['UserCommand'] = $this->userCommand;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['CodeSource'])) {
            $model->codeSource = codeSource::fromMap($map['CodeSource']);
        }

        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }

        if (isset($map['CustomEnvs'])) {
            if (!empty($map['CustomEnvs'])) {
                $model->customEnvs = [];
                $n1 = 0;
                foreach ($map['CustomEnvs'] as $item1) {
                    $model->customEnvs[$n1] = customEnvs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n1 = 0;
                foreach ($map['DataSources'] as $item1) {
                    $model->dataSources[$n1] = dataSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DebuggerConfigContent'])) {
            $model->debuggerConfigContent = $map['DebuggerConfigContent'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['ElasticSpec'])) {
            $model->elasticSpec = JobElasticSpec::fromMap($map['ElasticSpec']);
        }

        if (isset($map['Envs'])) {
            if (!empty($map['Envs'])) {
                $model->envs = [];
                foreach ($map['Envs'] as $key1 => $value1) {
                    $model->envs[$key1] = $value1;
                }
            }
        }

        if (isset($map['JobMaxRunningTimeMinutes'])) {
            $model->jobMaxRunningTimeMinutes = $map['JobMaxRunningTimeMinutes'];
        }

        if (isset($map['JobSpecs'])) {
            if (!empty($map['JobSpecs'])) {
                $model->jobSpecs = [];
                $n1 = 0;
                foreach ($map['JobSpecs'] as $item1) {
                    $model->jobSpecs[$n1] = JobSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['Settings'])) {
            $model->settings = JobSettings::fromMap($map['Settings']);
        }

        if (isset($map['SuccessPolicy'])) {
            $model->successPolicy = $map['SuccessPolicy'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        if (isset($map['ThirdpartyLibDir'])) {
            $model->thirdpartyLibDir = $map['ThirdpartyLibDir'];
        }

        if (isset($map['ThirdpartyLibs'])) {
            if (!empty($map['ThirdpartyLibs'])) {
                $model->thirdpartyLibs = [];
                $n1 = 0;
                foreach ($map['ThirdpartyLibs'] as $item1) {
                    $model->thirdpartyLibs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserCommand'])) {
            $model->userCommand = $map['UserCommand'];
        }

        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
