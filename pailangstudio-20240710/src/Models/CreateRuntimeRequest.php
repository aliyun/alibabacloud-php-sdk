<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateRuntimeRequest\credentialConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateRuntimeRequest\dataSources;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateRuntimeRequest\ecsSpec;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateRuntimeRequest\envs;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateRuntimeRequest\labels;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateRuntimeRequest\userVpc;

class CreateRuntimeRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var bool
     */
    public $autoUpdateImage;

    /**
     * @var credentialConfig
     */
    public $credentialConfig;

    /**
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @var ecsSpec
     */
    public $ecsSpec;

    /**
     * @var envs[]
     */
    public $envs;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $runTimeout;

    /**
     * @var string
     */
    public $runtimeName;

    /**
     * @var string
     */
    public $runtimeType;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $workDir;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'autoUpdateImage' => 'AutoUpdateImage',
        'credentialConfig' => 'CredentialConfig',
        'dataSources' => 'DataSources',
        'ecsSpec' => 'EcsSpec',
        'envs' => 'Envs',
        'labels' => 'Labels',
        'resourceId' => 'ResourceId',
        'runTimeout' => 'RunTimeout',
        'runtimeName' => 'RuntimeName',
        'runtimeType' => 'RuntimeType',
        'userVpc' => 'UserVpc',
        'workDir' => 'WorkDir',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        if (null !== $this->ecsSpec) {
            $this->ecsSpec->validate();
        }
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
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

        if (null !== $this->autoUpdateImage) {
            $res['AutoUpdateImage'] = $this->autoUpdateImage;
        }

        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
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

        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = null !== $this->ecsSpec ? $this->ecsSpec->toArray($noStream) : $this->ecsSpec;
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['Envs'] = [];
                $n1 = 0;
                foreach ($this->envs as $item1) {
                    $res['Envs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->runTimeout) {
            $res['RunTimeout'] = $this->runTimeout;
        }

        if (null !== $this->runtimeName) {
            $res['RuntimeName'] = $this->runtimeName;
        }

        if (null !== $this->runtimeType) {
            $res['RuntimeType'] = $this->runtimeType;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->workDir) {
            $res['WorkDir'] = $this->workDir;
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

        if (isset($map['AutoUpdateImage'])) {
            $model->autoUpdateImage = $map['AutoUpdateImage'];
        }

        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = credentialConfig::fromMap($map['CredentialConfig']);
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

        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = ecsSpec::fromMap($map['EcsSpec']);
        }

        if (isset($map['Envs'])) {
            if (!empty($map['Envs'])) {
                $model->envs = [];
                $n1 = 0;
                foreach ($map['Envs'] as $item1) {
                    $model->envs[$n1] = envs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['RunTimeout'])) {
            $model->runTimeout = $map['RunTimeout'];
        }

        if (isset($map['RuntimeName'])) {
            $model->runtimeName = $map['RuntimeName'];
        }

        if (isset($map['RuntimeType'])) {
            $model->runtimeType = $map['RuntimeType'];
        }

        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }

        if (isset($map['WorkDir'])) {
            $model->workDir = $map['WorkDir'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
