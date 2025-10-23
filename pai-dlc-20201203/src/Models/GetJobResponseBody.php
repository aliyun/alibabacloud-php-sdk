<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\codeSource;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\dataSources;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\pods;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\restartRecord;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\userVpc;

class GetJobResponseBody extends Model
{
    /**
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
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var JobElasticSpec
     */
    public $elasticSpec;

    /**
     * @var bool
     */
    public $enabledDebugger;

    /**
     * @var string[]
     */
    public $envs;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtFailedTime;

    /**
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @var string
     */
    public $gmtRunningTime;

    /**
     * @var string
     */
    public $gmtStoppedTime;

    /**
     * @var string
     */
    public $gmtSubmittedTime;

    /**
     * @var string
     */
    public $gmtSuccessedTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var JobReplicaStatus[]
     */
    public $jobReplicaStatuses;

    /**
     * @var JobSpec[]
     */
    public $jobSpecs;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var pods[]
     */
    public $pods;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceLevel;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var restartRecord[]
     */
    public $restartRecord;

    /**
     * @var string
     */
    public $restartTimes;

    /**
     * @var JobSettings
     */
    public $settings;

    /**
     * @var string
     */
    public $status;

    /**
     * @var StatusTransitionItem[]
     */
    public $statusHistory;

    /**
     * @var string
     */
    public $subStatus;

    /**
     * @var string
     */
    public $tenantId;

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
     * @var string
     */
    public $userId;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $workspaceId;

    /**
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
        'jobReplicaStatuses' => 'JobReplicaStatuses',
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
        'restartRecord' => 'RestartRecord',
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

    public function validate()
    {
        if (null !== $this->codeSource) {
            $this->codeSource->validate();
        }
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
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
        if (\is_array($this->jobReplicaStatuses)) {
            Model::validateArray($this->jobReplicaStatuses);
        }
        if (\is_array($this->jobSpecs)) {
            Model::validateArray($this->jobSpecs);
        }
        if (\is_array($this->pods)) {
            Model::validateArray($this->pods);
        }
        if (\is_array($this->restartRecord)) {
            Model::validateArray($this->restartRecord);
        }
        if (null !== $this->settings) {
            $this->settings->validate();
        }
        if (\is_array($this->statusHistory)) {
            Model::validateArray($this->statusHistory);
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

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->codeSource) {
            $res['CodeSource'] = null !== $this->codeSource ? $this->codeSource->toArray($noStream) : $this->codeSource;
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

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->elasticSpec) {
            $res['ElasticSpec'] = null !== $this->elasticSpec ? $this->elasticSpec->toArray($noStream) : $this->elasticSpec;
        }

        if (null !== $this->enabledDebugger) {
            $res['EnabledDebugger'] = $this->enabledDebugger;
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['Envs'] = [];
                foreach ($this->envs as $key1 => $value1) {
                    $res['Envs'][$key1] = $value1;
                }
            }
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

        if (null !== $this->jobReplicaStatuses) {
            if (\is_array($this->jobReplicaStatuses)) {
                $res['JobReplicaStatuses'] = [];
                $n1 = 0;
                foreach ($this->jobReplicaStatuses as $item1) {
                    $res['JobReplicaStatuses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->pods) {
            if (\is_array($this->pods)) {
                $res['Pods'] = [];
                $n1 = 0;
                foreach ($this->pods as $item1) {
                    $res['Pods'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->restartRecord) {
            if (\is_array($this->restartRecord)) {
                $res['RestartRecord'] = [];
                $n1 = 0;
                foreach ($this->restartRecord as $item1) {
                    $res['RestartRecord'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->restartTimes) {
            $res['RestartTimes'] = $this->restartTimes;
        }

        if (null !== $this->settings) {
            $res['Settings'] = null !== $this->settings ? $this->settings->toArray($noStream) : $this->settings;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusHistory) {
            if (\is_array($this->statusHistory)) {
                $res['StatusHistory'] = [];
                $n1 = 0;
                foreach ($this->statusHistory as $item1) {
                    $res['StatusHistory'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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
                $n1 = 0;
                foreach ($map['DataSources'] as $item1) {
                    $model->dataSources[$n1] = dataSources::fromMap($item1);
                    ++$n1;
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
            if (!empty($map['Envs'])) {
                $model->envs = [];
                foreach ($map['Envs'] as $key1 => $value1) {
                    $model->envs[$key1] = $value1;
                }
            }
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

        if (isset($map['JobReplicaStatuses'])) {
            if (!empty($map['JobReplicaStatuses'])) {
                $model->jobReplicaStatuses = [];
                $n1 = 0;
                foreach ($map['JobReplicaStatuses'] as $item1) {
                    $model->jobReplicaStatuses[$n1] = JobReplicaStatus::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['Pods'])) {
            if (!empty($map['Pods'])) {
                $model->pods = [];
                $n1 = 0;
                foreach ($map['Pods'] as $item1) {
                    $model->pods[$n1] = pods::fromMap($item1);
                    ++$n1;
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

        if (isset($map['RestartRecord'])) {
            if (!empty($map['RestartRecord'])) {
                $model->restartRecord = [];
                $n1 = 0;
                foreach ($map['RestartRecord'] as $item1) {
                    $model->restartRecord[$n1] = restartRecord::fromMap($item1);
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['StatusHistory'] as $item1) {
                    $model->statusHistory[$n1] = StatusTransitionItem::fromMap($item1);
                    ++$n1;
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
