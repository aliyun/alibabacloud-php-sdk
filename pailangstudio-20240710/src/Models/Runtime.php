<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Runtime\credentialConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Runtime\dataSources;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Runtime\ecsSpec;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Runtime\envs;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Runtime\flows;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Runtime\labels;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Runtime\userVpc;

class Runtime extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $creator;

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
     * @var string
     */
    public $flowId;

    /**
     * @var flows[]
     */
    public $flows;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $MCPConfig;

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
    public $runtimeId;

    /**
     * @var string
     */
    public $runtimeLog;

    /**
     * @var string
     */
    public $runtimeName;

    /**
     * @var string
     */
    public $runtimeStatus;

    /**
     * @var string
     */
    public $runtimeType;

    /**
     * @var bool
     */
    public $supportSSEStream;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $version;

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
        'creator' => 'Creator',
        'credentialConfig' => 'CredentialConfig',
        'dataSources' => 'DataSources',
        'ecsSpec' => 'EcsSpec',
        'envs' => 'Envs',
        'flowId' => 'FlowId',
        'flows' => 'Flows',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'idleTimeout' => 'IdleTimeout',
        'labels' => 'Labels',
        'latestVersion' => 'LatestVersion',
        'MCPConfig' => 'MCPConfig',
        'resourceId' => 'ResourceId',
        'runTimeout' => 'RunTimeout',
        'runtimeId' => 'RuntimeId',
        'runtimeLog' => 'RuntimeLog',
        'runtimeName' => 'RuntimeName',
        'runtimeStatus' => 'RuntimeStatus',
        'runtimeType' => 'RuntimeType',
        'supportSSEStream' => 'SupportSSEStream',
        'userVpc' => 'UserVpc',
        'version' => 'Version',
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
        if (\is_array($this->flows)) {
            Model::validateArray($this->flows);
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

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
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

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flows) {
            if (\is_array($this->flows)) {
                $res['Flows'] = [];
                $n1 = 0;
                foreach ($this->flows as $item1) {
                    $res['Flows'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
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

        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }

        if (null !== $this->MCPConfig) {
            $res['MCPConfig'] = $this->MCPConfig;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->runTimeout) {
            $res['RunTimeout'] = $this->runTimeout;
        }

        if (null !== $this->runtimeId) {
            $res['RuntimeId'] = $this->runtimeId;
        }

        if (null !== $this->runtimeLog) {
            $res['RuntimeLog'] = $this->runtimeLog;
        }

        if (null !== $this->runtimeName) {
            $res['RuntimeName'] = $this->runtimeName;
        }

        if (null !== $this->runtimeStatus) {
            $res['RuntimeStatus'] = $this->runtimeStatus;
        }

        if (null !== $this->runtimeType) {
            $res['RuntimeType'] = $this->runtimeType;
        }

        if (null !== $this->supportSSEStream) {
            $res['SupportSSEStream'] = $this->supportSSEStream;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
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

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['Flows'])) {
            if (!empty($map['Flows'])) {
                $model->flows = [];
                $n1 = 0;
                foreach ($map['Flows'] as $item1) {
                    $model->flows[$n1] = flows::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
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

        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }

        if (isset($map['MCPConfig'])) {
            $model->MCPConfig = $map['MCPConfig'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['RunTimeout'])) {
            $model->runTimeout = $map['RunTimeout'];
        }

        if (isset($map['RuntimeId'])) {
            $model->runtimeId = $map['RuntimeId'];
        }

        if (isset($map['RuntimeLog'])) {
            $model->runtimeLog = $map['RuntimeLog'];
        }

        if (isset($map['RuntimeName'])) {
            $model->runtimeName = $map['RuntimeName'];
        }

        if (isset($map['RuntimeStatus'])) {
            $model->runtimeStatus = $map['RuntimeStatus'];
        }

        if (isset($map['RuntimeType'])) {
            $model->runtimeType = $map['RuntimeType'];
        }

        if (isset($map['SupportSSEStream'])) {
            $model->supportSSEStream = $map['SupportSSEStream'];
        }

        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
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
