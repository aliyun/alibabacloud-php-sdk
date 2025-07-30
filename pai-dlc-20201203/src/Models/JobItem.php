<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\SDK\Paidlc\V20201203\Models\JobItem\codeSource;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\JobItem\dataSources;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\JobItem\userVpc;
use AlibabaCloud\Tea\Model;

class JobItem extends Model
{
    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var codeSource
     */
    public $codeSource;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @example tf-mnist-test
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 3602
     *
     * @var int
     */
    public $duration;

    /**
     * @var JobElasticSpec
     */
    public $elasticSpec;

    /**
     * @example false
     *
     * @var bool
     */
    public $enablePreemptibleJob;

    /**
     * @example false
     *
     * @var bool
     */
    public $enabledDebugger;

    /**
     * @var string[]
     */
    public $envs;

    /**
     * @example 2021-01-12T14:35:01Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-12T14:35:01Z
     *
     * @var string
     */
    public $gmtFailedTime;

    /**
     * @example 2021-01-12T15:36:08Z
     *
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @example 2021-01-12T15:36:08Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example 2021-01-12T14:35:01Z
     *
     * @var string
     */
    public $gmtRunningTime;

    /**
     * @example 2021-01-12T14:35:01Z
     *
     * @var string
     */
    public $gmtStoppedTime;

    /**
     * @example 2021-01-12T14:35:01Z
     *
     * @var string
     */
    public $gmtSubmittedTime;

    /**
     * @example 2021-01-12T14:35:01Z
     *
     * @var string
     */
    public $gmtSuccessedTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $isDeleted;

    /**
     * @example dlc-20210126170216-mtl37ge7gkvdz
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1
     *
     * @var int
     */
    public $jobMaxRunningTimeMinutes;

    /**
     * @var JobSpec[]
     */
    public $jobSpecs;

    /**
     * @example TFJob
     *
     * @var string
     */
    public $jobType;

    /**
     * @example 1
     *
     * @var string
     */
    public $nodeCount;

    /**
     * @var string[]
     */
    public $nodeNames;

    /**
     * @var PodItem[]
     */
    public $pods;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example JobStoppedByUser
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @example Job is stopped by user.
     *
     * @var string
     */
    public $reasonMessage;

    /**
     * @example 1
     *
     * @var int
     */
    public $requestCPU;

    /**
     * @example 1
     *
     * @var string
     */
    public $requestGPU;

    /**
     * @example 1Gi
     *
     * @var string
     */
    public $requestMemory;

    /**
     * @example dlc-quota
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example L0
     *
     * @var string
     */
    public $resourceLevel;

    /**
     * @example my_resource_group
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example test
     *
     * @var string
     */
    public $resourceQuotaName;

    /**
     * @example ECS
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 1
     *
     * @var string
     */
    public $restartTimes;

    /**
     * @var JobSettings
     */
    public $settings;

    /**
     * @example Stopped
     *
     * @var string
     */
    public $status;

    /**
     * @var StatusTransitionItem[]
     */
    public $statusHistory;

    /**
     * @example Restarting
     *
     * @var string
     */
    public $subStatus;

    /**
     * @var string[]
     */
    public $systemEnvs;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @example /root/code/
     *
     * @var string
     */
    public $thirdpartyLibDir;

    /**
     * @var string[]
     */
    public $thirdpartyLibs;

    /**
     * @example false
     *
     * @var bool
     */
    public $useOversoldResource;

    /**
     * @example python /root/code/mnist.py
     *
     * @var string
     */
    public $userCommand;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $userId;

    /**
     * @example ls
     *
     * @var string
     */
    public $userScript;

    /**
     * @example vpc-1
     *
     * @var userVpc
     */
    public $userVpc;

    /**
     * @example pai-dlc-role
     *
     * @var string
     */
    public $username;

    /**
     * @example /mnt/data
     *
     * @var string
     */
    public $workingDir;

    /**
     * @example 268
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @example dlc-workspace
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'clusterId' => 'ClusterId',
        'codeSource' => 'CodeSource',
        'credentialConfig' => 'CredentialConfig',
        'dataSources' => 'DataSources',
        'displayName' => 'DisplayName',
        'duration' => 'Duration',
        'elasticSpec' => 'ElasticSpec',
        'enablePreemptibleJob' => 'EnablePreemptibleJob',
        'enabledDebugger' => 'EnabledDebugger',
        'envs' => 'Envs',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtFailedTime' => 'GmtFailedTime',
        'gmtFinishTime' => 'GmtFinishTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'gmtRunningTime' => 'GmtRunningTime',
        'gmtStoppedTime' => 'GmtStoppedTime',
        'gmtSubmittedTime' => 'GmtSubmittedTime',
        'gmtSuccessedTime' => 'GmtSuccessedTime',
        'isDeleted' => 'IsDeleted',
        'jobId' => 'JobId',
        'jobMaxRunningTimeMinutes' => 'JobMaxRunningTimeMinutes',
        'jobSpecs' => 'JobSpecs',
        'jobType' => 'JobType',
        'nodeCount' => 'NodeCount',
        'nodeNames' => 'NodeNames',
        'pods' => 'Pods',
        'priority' => 'Priority',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'requestCPU' => 'RequestCPU',
        'requestGPU' => 'RequestGPU',
        'requestMemory' => 'RequestMemory',
        'resourceId' => 'ResourceId',
        'resourceLevel' => 'ResourceLevel',
        'resourceName' => 'ResourceName',
        'resourceQuotaName' => 'ResourceQuotaName',
        'resourceType' => 'ResourceType',
        'restartTimes' => 'RestartTimes',
        'settings' => 'Settings',
        'status' => 'Status',
        'statusHistory' => 'StatusHistory',
        'subStatus' => 'SubStatus',
        'systemEnvs' => 'SystemEnvs',
        'tenantId' => 'TenantId',
        'thirdpartyLibDir' => 'ThirdpartyLibDir',
        'thirdpartyLibs' => 'ThirdpartyLibs',
        'useOversoldResource' => 'UseOversoldResource',
        'userCommand' => 'UserCommand',
        'userId' => 'UserId',
        'userScript' => 'UserScript',
        'userVpc' => 'UserVpc',
        'username' => 'Username',
        'workingDir' => 'WorkingDir',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->codeSource) {
            $res['CodeSource'] = null !== $this->codeSource ? $this->codeSource->toMap() : null;
        }
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->dataSources) {
            $res['DataSources'] = [];
            if (null !== $this->dataSources && \is_array($this->dataSources)) {
                $n = 0;
                foreach ($this->dataSources as $item) {
                    $res['DataSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->elasticSpec) {
            $res['ElasticSpec'] = null !== $this->elasticSpec ? $this->elasticSpec->toMap() : null;
        }
        if (null !== $this->enablePreemptibleJob) {
            $res['EnablePreemptibleJob'] = $this->enablePreemptibleJob;
        }
        if (null !== $this->enabledDebugger) {
            $res['EnabledDebugger'] = $this->enabledDebugger;
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtFailedTime) {
            $res['GmtFailedTime'] = $this->gmtFailedTime;
        }
        if (null !== $this->gmtFinishTime) {
            $res['GmtFinishTime'] = $this->gmtFinishTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->gmtRunningTime) {
            $res['GmtRunningTime'] = $this->gmtRunningTime;
        }
        if (null !== $this->gmtStoppedTime) {
            $res['GmtStoppedTime'] = $this->gmtStoppedTime;
        }
        if (null !== $this->gmtSubmittedTime) {
            $res['GmtSubmittedTime'] = $this->gmtSubmittedTime;
        }
        if (null !== $this->gmtSuccessedTime) {
            $res['GmtSuccessedTime'] = $this->gmtSuccessedTime;
        }
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobMaxRunningTimeMinutes) {
            $res['JobMaxRunningTimeMinutes'] = $this->jobMaxRunningTimeMinutes;
        }
        if (null !== $this->jobSpecs) {
            $res['JobSpecs'] = [];
            if (null !== $this->jobSpecs && \is_array($this->jobSpecs)) {
                $n = 0;
                foreach ($this->jobSpecs as $item) {
                    $res['JobSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->nodeNames) {
            $res['NodeNames'] = $this->nodeNames;
        }
        if (null !== $this->pods) {
            $res['Pods'] = [];
            if (null !== $this->pods && \is_array($this->pods)) {
                $n = 0;
                foreach ($this->pods as $item) {
                    $res['Pods'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->requestGPU) {
            $res['RequestGPU'] = $this->requestGPU;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceLevel) {
            $res['ResourceLevel'] = $this->resourceLevel;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceQuotaName) {
            $res['ResourceQuotaName'] = $this->resourceQuotaName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->restartTimes) {
            $res['RestartTimes'] = $this->restartTimes;
        }
        if (null !== $this->settings) {
            $res['Settings'] = null !== $this->settings ? $this->settings->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusHistory) {
            $res['StatusHistory'] = [];
            if (null !== $this->statusHistory && \is_array($this->statusHistory)) {
                $n = 0;
                foreach ($this->statusHistory as $item) {
                    $res['StatusHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }
        if (null !== $this->systemEnvs) {
            $res['SystemEnvs'] = $this->systemEnvs;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->thirdpartyLibDir) {
            $res['ThirdpartyLibDir'] = $this->thirdpartyLibDir;
        }
        if (null !== $this->thirdpartyLibs) {
            $res['ThirdpartyLibs'] = $this->thirdpartyLibs;
        }
        if (null !== $this->useOversoldResource) {
            $res['UseOversoldResource'] = $this->useOversoldResource;
        }
        if (null !== $this->userCommand) {
            $res['UserCommand'] = $this->userCommand;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userScript) {
            $res['UserScript'] = $this->userScript;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CodeSource'])) {
            $model->codeSource = codeSource::fromMap($map['CodeSource']);
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n = 0;
                foreach ($map['DataSources'] as $item) {
                    $model->dataSources[$n++] = null !== $item ? dataSources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ElasticSpec'])) {
            $model->elasticSpec = JobElasticSpec::fromMap($map['ElasticSpec']);
        }
        if (isset($map['EnablePreemptibleJob'])) {
            $model->enablePreemptibleJob = $map['EnablePreemptibleJob'];
        }
        if (isset($map['EnabledDebugger'])) {
            $model->enabledDebugger = $map['EnabledDebugger'];
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtFailedTime'])) {
            $model->gmtFailedTime = $map['GmtFailedTime'];
        }
        if (isset($map['GmtFinishTime'])) {
            $model->gmtFinishTime = $map['GmtFinishTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['GmtRunningTime'])) {
            $model->gmtRunningTime = $map['GmtRunningTime'];
        }
        if (isset($map['GmtStoppedTime'])) {
            $model->gmtStoppedTime = $map['GmtStoppedTime'];
        }
        if (isset($map['GmtSubmittedTime'])) {
            $model->gmtSubmittedTime = $map['GmtSubmittedTime'];
        }
        if (isset($map['GmtSuccessedTime'])) {
            $model->gmtSuccessedTime = $map['GmtSuccessedTime'];
        }
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobMaxRunningTimeMinutes'])) {
            $model->jobMaxRunningTimeMinutes = $map['JobMaxRunningTimeMinutes'];
        }
        if (isset($map['JobSpecs'])) {
            if (!empty($map['JobSpecs'])) {
                $model->jobSpecs = [];
                $n = 0;
                foreach ($map['JobSpecs'] as $item) {
                    $model->jobSpecs[$n++] = null !== $item ? JobSpec::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['NodeNames'])) {
            if (!empty($map['NodeNames'])) {
                $model->nodeNames = $map['NodeNames'];
            }
        }
        if (isset($map['Pods'])) {
            if (!empty($map['Pods'])) {
                $model->pods = [];
                $n = 0;
                foreach ($map['Pods'] as $item) {
                    $model->pods[$n++] = null !== $item ? PodItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['RequestGPU'])) {
            $model->requestGPU = $map['RequestGPU'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceLevel'])) {
            $model->resourceLevel = $map['ResourceLevel'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceQuotaName'])) {
            $model->resourceQuotaName = $map['ResourceQuotaName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RestartTimes'])) {
            $model->restartTimes = $map['RestartTimes'];
        }
        if (isset($map['Settings'])) {
            $model->settings = JobSettings::fromMap($map['Settings']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusHistory'])) {
            if (!empty($map['StatusHistory'])) {
                $model->statusHistory = [];
                $n = 0;
                foreach ($map['StatusHistory'] as $item) {
                    $model->statusHistory[$n++] = null !== $item ? StatusTransitionItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }
        if (isset($map['SystemEnvs'])) {
            $model->systemEnvs = $map['SystemEnvs'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ThirdpartyLibDir'])) {
            $model->thirdpartyLibDir = $map['ThirdpartyLibDir'];
        }
        if (isset($map['ThirdpartyLibs'])) {
            if (!empty($map['ThirdpartyLibs'])) {
                $model->thirdpartyLibs = $map['ThirdpartyLibs'];
            }
        }
        if (isset($map['UseOversoldResource'])) {
            $model->useOversoldResource = $map['UseOversoldResource'];
        }
        if (isset($map['UserCommand'])) {
            $model->userCommand = $map['UserCommand'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserScript'])) {
            $model->userScript = $map['UserScript'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
