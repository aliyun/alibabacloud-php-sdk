<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\codeSource;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\dataSources;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\pods;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\userVpc;
use AlibabaCloud\Tea\Model;

class GetJobResponseBody extends Model
{
    /**
     * @description The visibility of the job. Valid values:
     *
     *   PUBLIC: The code is public in the workspace.
     *   PRIVATE: The workspace is visible only to you and the administrator of the workspace. This is the default value.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description The cluster ID.
     *
     * @example a*****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The code source.
     *
     * @var codeSource
     */
    public $codeSource;

    /**
     * @description The access credential configurations.
     *
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @description The data sources.
     *
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @description The job name.
     *
     * @example tf-mnist-test
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The duration of the job (seconds).
     *
     * @example 3602
     *
     * @var int
     */
    public $duration;

    /**
     * @description The elastic job parameters.
     *
     * @var JobElasticSpec
     */
    public $elasticSpec;

    /**
     * @description Specifies whether to enable the debugger job.
     *
     * @example false
     *
     * @var bool
     */
    public $enabledDebugger;

    /**
     * @description The configurations of environment variables.
     *
     * @var string[]
     */
    public $envs;

    /**
     * @description The time when the job was created (UTC).
     *
     * @example 2021-01-12T14:35:01Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description The time of the job failed (UTC).
     *
     * @example 2021-01-12T15:36:08Z
     *
     * @var string
     */
    public $gmtFailedTime;

    /**
     * @description The time when the job ended (UTC).
     *
     * @example 2021-01-12T15:36:08Z
     *
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @description The start time of the job (UTC).
     *
     * @example 2021-01-12T14:36:21Z
     *
     * @var string
     */
    public $gmtRunningTime;

    /**
     * @description The time when the job stopped (UTC).
     *
     * @example 2021-01-12T15:36:08Z
     *
     * @var string
     */
    public $gmtStoppedTime;

    /**
     * @description The time when the job was submitted to the cluster (UTC).
     *
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $gmtSubmittedTime;

    /**
     * @description The time when the job succeeded (UTC).
     *
     * @example 2021-01-12T15:36:08Z
     *
     * @var string
     */
    public $gmtSuccessedTime;

    /**
     * @description The job ID.
     *
     * @example dlc*******
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The node configuration of the job, which is **JobSpecs** in the CreateJob operation.
     *
     * @var JobSpec[]
     */
    public $jobSpecs;

    /**
     * @description The job type. Specified by the JobType parameter of the [CreateJob](https://help.aliyun.com/document_detail/459672.html) operation.
     *
     * @example TFJob
     *
     * @var string
     */
    public $jobType;

    /**
     * @description All running nodes of the job.
     *
     * @var pods[]
     */
    public $pods;

    /**
     * @description The priority of the job. Valid values: 1 to 9.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The status detail code, which is a sub-status under the current status.
     *
     * @example JobStoppedByUser
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @description The description of the status detail code.
     *
     * @example Job is stopped by user.
     *
     * @var string
     */
    public $reasonMessage;

    /**
     * @description The request ID, which can be used for troubleshooting.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-xxxxxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the job belongs.
     *
     * @example r******
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource level that the job uses.
     *
     * @example L0
     *
     * @var string
     */
    public $resourceLevel;

    /**
     * @description The resource type. Valid values: ECS, Lingjun, and ACS.
     *
     * @example ECS
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The number of retries and the maximum number of retries used by the job.
     *
     * @example 0/10
     *
     * @var string
     */
    public $restartTimes;

    /**
     * @description The additional parameter configurations of the job.
     *
     * @var JobSettings
     */
    public $settings;

    /**
     * @description The status of the job. Valid values:
     *
     *   Creating
     *   Queuing
     *   Bidding (Only for Lingjun preemptible jobs)
     *   EnvPreparing
     *   SanityChecking
     *   Running
     *   Restarting
     *   Stopping
     *   SucceededReserving
     *   FailedReserving
     *   Succeeded
     *   Failed
     *   Stopped
     *
     * @example Stopped
     *
     * @var string
     */
    public $status;

    /**
     * @description The status history.
     *
     * @var StatusTransitionItem[]
     */
    public $statusHistory;

    /**
     * @description The sub-status of the job, such as its preemption status.
     *
     * @example Restarting
     *
     * @var string
     */
    public $subStatus;

    /**
     * @description The tenant ID.
     *
     * @example GAR***W134
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The directory that contains requirements.txt.
     *
     * @example /root/code/
     *
     * @var string
     */
    public $thirdpartyLibDir;

    /**
     * @description The third-party Python libraries to be installed.
     *
     * @var string[]
     */
    public $thirdpartyLibs;

    /**
     * @description The command that is run to start each node.
     *
     * @example python /root/code/mnist.py
     *
     * @var string
     */
    public $userCommand;

    /**
     * @description The UID of the Alibaba Cloud account who submitted the job.
     *
     * @example 12*********
     *
     * @var string
     */
    public $userId;

    /**
     * @description The VPC of the user.
     *
     * @var userVpc
     */
    public $userVpc;

    /**
     * @description The ID of the workspace to which the job belongs.
     *
     * @example 268
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The name of the workspace to which the job belongs.
     *
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
        'enabledDebugger' => 'EnabledDebugger',
        'envs' => 'Envs',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtFailedTime' => 'GmtFailedTime',
        'gmtFinishTime' => 'GmtFinishTime',
        'gmtRunningTime' => 'GmtRunningTime',
        'gmtStoppedTime' => 'GmtStoppedTime',
        'gmtSubmittedTime' => 'GmtSubmittedTime',
        'gmtSuccessedTime' => 'GmtSuccessedTime',
        'jobId' => 'JobId',
        'jobSpecs' => 'JobSpecs',
        'jobType' => 'JobType',
        'pods' => 'Pods',
        'priority' => 'Priority',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'requestId' => 'RequestId',
        'resourceId' => 'ResourceId',
        'resourceLevel' => 'ResourceLevel',
        'resourceType' => 'ResourceType',
        'restartTimes' => 'RestartTimes',
        'settings' => 'Settings',
        'status' => 'Status',
        'statusHistory' => 'StatusHistory',
        'subStatus' => 'SubStatus',
        'tenantId' => 'TenantId',
        'thirdpartyLibDir' => 'ThirdpartyLibDir',
        'thirdpartyLibs' => 'ThirdpartyLibs',
        'userCommand' => 'UserCommand',
        'userId' => 'UserId',
        'userVpc' => 'UserVpc',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceLevel) {
            $res['ResourceLevel'] = $this->resourceLevel;
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->thirdpartyLibDir) {
            $res['ThirdpartyLibDir'] = $this->thirdpartyLibDir;
        }
        if (null !== $this->thirdpartyLibs) {
            $res['ThirdpartyLibs'] = $this->thirdpartyLibs;
        }
        if (null !== $this->userCommand) {
            $res['UserCommand'] = $this->userCommand;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
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
     * @return GetJobResponseBody
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
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
        if (isset($map['Pods'])) {
            if (!empty($map['Pods'])) {
                $model->pods = [];
                $n = 0;
                foreach ($map['Pods'] as $item) {
                    $model->pods[$n++] = null !== $item ? pods::fromMap($item) : $item;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceLevel'])) {
            $model->resourceLevel = $map['ResourceLevel'];
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
        if (isset($map['UserCommand'])) {
            $model->userCommand = $map['UserCommand'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
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
