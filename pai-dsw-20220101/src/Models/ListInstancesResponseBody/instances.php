<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CredentialConfig;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\DynamicMount;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\affinity;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\cloudDisks;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\datasets;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\idleInstanceCuller;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\instanceShutdownTimer;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\instanceSnapshotList;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\labels;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\latestSnapshot;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\requestedResource;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\tags;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\userVpc;

class instances extends Model
{
    /**
     * @var string
     */
    public $acceleratorType;

    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var int
     */
    public $accumulatedRunningTimeInMs;

    /**
     * @var affinity
     */
    public $affinity;

    /**
     * @var cloudDisks[]
     */
    public $cloudDisks;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var datasets[]
     */
    public $datasets;

    /**
     * @var string
     */
    public $driver;

    /**
     * @var DynamicMount
     */
    public $dynamicMount;

    /**
     * @var string
     */
    public $ecsSpec;

    /**
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var idleInstanceCuller
     */
    public $idleInstanceCuller;

    /**
     * @var string
     */
    public $imageAuth;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var instanceShutdownTimer
     */
    public $instanceShutdownTimer;

    /**
     * @var instanceSnapshotList[]
     */
    public $instanceSnapshotList;

    /**
     * @var string
     */
    public $instanceUrl;

    /**
     * @var string
     */
    public $jupyterlabUrl;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var latestSnapshot
     */
    public $latestSnapshot;

    /**
     * @var string
     */
    public $oversoldInfo;

    /**
     * @var string
     */
    public $oversoldType;

    /**
     * @var string
     */
    public $paymentType;

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
     * @var requestedResource
     */
    public $requestedResource;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $terminalUrl;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $webIDEUrl;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;

    /**
     * @var string
     */
    public $workspaceSource;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'accessibility' => 'Accessibility',
        'accumulatedRunningTimeInMs' => 'AccumulatedRunningTimeInMs',
        'affinity' => 'Affinity',
        'cloudDisks' => 'CloudDisks',
        'credentialConfig' => 'CredentialConfig',
        'datasets' => 'Datasets',
        'driver' => 'Driver',
        'dynamicMount' => 'DynamicMount',
        'ecsSpec' => 'EcsSpec',
        'environmentVariables' => 'EnvironmentVariables',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'idleInstanceCuller' => 'IdleInstanceCuller',
        'imageAuth' => 'ImageAuth',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageUrl' => 'ImageUrl',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceShutdownTimer' => 'InstanceShutdownTimer',
        'instanceSnapshotList' => 'InstanceSnapshotList',
        'instanceUrl' => 'InstanceUrl',
        'jupyterlabUrl' => 'JupyterlabUrl',
        'labels' => 'Labels',
        'latestSnapshot' => 'LatestSnapshot',
        'oversoldInfo' => 'OversoldInfo',
        'oversoldType' => 'OversoldType',
        'paymentType' => 'PaymentType',
        'priority' => 'Priority',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'requestedResource' => 'RequestedResource',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'status' => 'Status',
        'tags' => 'Tags',
        'terminalUrl' => 'TerminalUrl',
        'userId' => 'UserId',
        'userName' => 'UserName',
        'userVpc' => 'UserVpc',
        'webIDEUrl' => 'WebIDEUrl',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
        'workspaceSource' => 'WorkspaceSource',
    ];

    public function validate()
    {
        if (null !== $this->affinity) {
            $this->affinity->validate();
        }
        if (\is_array($this->cloudDisks)) {
            Model::validateArray($this->cloudDisks);
        }
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (\is_array($this->datasets)) {
            Model::validateArray($this->datasets);
        }
        if (null !== $this->dynamicMount) {
            $this->dynamicMount->validate();
        }
        if (\is_array($this->environmentVariables)) {
            Model::validateArray($this->environmentVariables);
        }
        if (null !== $this->idleInstanceCuller) {
            $this->idleInstanceCuller->validate();
        }
        if (null !== $this->instanceShutdownTimer) {
            $this->instanceShutdownTimer->validate();
        }
        if (\is_array($this->instanceSnapshotList)) {
            Model::validateArray($this->instanceSnapshotList);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->latestSnapshot) {
            $this->latestSnapshot->validate();
        }
        if (null !== $this->requestedResource) {
            $this->requestedResource->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }

        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->accumulatedRunningTimeInMs) {
            $res['AccumulatedRunningTimeInMs'] = $this->accumulatedRunningTimeInMs;
        }

        if (null !== $this->affinity) {
            $res['Affinity'] = null !== $this->affinity ? $this->affinity->toArray($noStream) : $this->affinity;
        }

        if (null !== $this->cloudDisks) {
            if (\is_array($this->cloudDisks)) {
                $res['CloudDisks'] = [];
                $n1 = 0;
                foreach ($this->cloudDisks as $item1) {
                    $res['CloudDisks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
        }

        if (null !== $this->datasets) {
            if (\is_array($this->datasets)) {
                $res['Datasets'] = [];
                $n1 = 0;
                foreach ($this->datasets as $item1) {
                    $res['Datasets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->driver) {
            $res['Driver'] = $this->driver;
        }

        if (null !== $this->dynamicMount) {
            $res['DynamicMount'] = null !== $this->dynamicMount ? $this->dynamicMount->toArray($noStream) : $this->dynamicMount;
        }

        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }

        if (null !== $this->environmentVariables) {
            if (\is_array($this->environmentVariables)) {
                $res['EnvironmentVariables'] = [];
                foreach ($this->environmentVariables as $key1 => $value1) {
                    $res['EnvironmentVariables'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->idleInstanceCuller) {
            $res['IdleInstanceCuller'] = null !== $this->idleInstanceCuller ? $this->idleInstanceCuller->toArray($noStream) : $this->idleInstanceCuller;
        }

        if (null !== $this->imageAuth) {
            $res['ImageAuth'] = $this->imageAuth;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceShutdownTimer) {
            $res['InstanceShutdownTimer'] = null !== $this->instanceShutdownTimer ? $this->instanceShutdownTimer->toArray($noStream) : $this->instanceShutdownTimer;
        }

        if (null !== $this->instanceSnapshotList) {
            if (\is_array($this->instanceSnapshotList)) {
                $res['InstanceSnapshotList'] = [];
                $n1 = 0;
                foreach ($this->instanceSnapshotList as $item1) {
                    $res['InstanceSnapshotList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceUrl) {
            $res['InstanceUrl'] = $this->instanceUrl;
        }

        if (null !== $this->jupyterlabUrl) {
            $res['JupyterlabUrl'] = $this->jupyterlabUrl;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->latestSnapshot) {
            $res['LatestSnapshot'] = null !== $this->latestSnapshot ? $this->latestSnapshot->toArray($noStream) : $this->latestSnapshot;
        }

        if (null !== $this->oversoldInfo) {
            $res['OversoldInfo'] = $this->oversoldInfo;
        }

        if (null !== $this->oversoldType) {
            $res['OversoldType'] = $this->oversoldType;
        }

        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
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

        if (null !== $this->requestedResource) {
            $res['RequestedResource'] = null !== $this->requestedResource ? $this->requestedResource->toArray($noStream) : $this->requestedResource;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->terminalUrl) {
            $res['TerminalUrl'] = $this->terminalUrl;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->webIDEUrl) {
            $res['WebIDEUrl'] = $this->webIDEUrl;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        if (null !== $this->workspaceSource) {
            $res['WorkspaceSource'] = $this->workspaceSource;
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
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }

        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['AccumulatedRunningTimeInMs'])) {
            $model->accumulatedRunningTimeInMs = $map['AccumulatedRunningTimeInMs'];
        }

        if (isset($map['Affinity'])) {
            $model->affinity = affinity::fromMap($map['Affinity']);
        }

        if (isset($map['CloudDisks'])) {
            if (!empty($map['CloudDisks'])) {
                $model->cloudDisks = [];
                $n1 = 0;
                foreach ($map['CloudDisks'] as $item1) {
                    $model->cloudDisks[$n1++] = cloudDisks::fromMap($item1);
                }
            }
        }

        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }

        if (isset($map['Datasets'])) {
            if (!empty($map['Datasets'])) {
                $model->datasets = [];
                $n1 = 0;
                foreach ($map['Datasets'] as $item1) {
                    $model->datasets[$n1++] = datasets::fromMap($item1);
                }
            }
        }

        if (isset($map['Driver'])) {
            $model->driver = $map['Driver'];
        }

        if (isset($map['DynamicMount'])) {
            $model->dynamicMount = DynamicMount::fromMap($map['DynamicMount']);
        }

        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }

        if (isset($map['EnvironmentVariables'])) {
            if (!empty($map['EnvironmentVariables'])) {
                $model->environmentVariables = [];
                foreach ($map['EnvironmentVariables'] as $key1 => $value1) {
                    $model->environmentVariables[$key1] = $value1;
                }
            }
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['IdleInstanceCuller'])) {
            $model->idleInstanceCuller = idleInstanceCuller::fromMap($map['IdleInstanceCuller']);
        }

        if (isset($map['ImageAuth'])) {
            $model->imageAuth = $map['ImageAuth'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceShutdownTimer'])) {
            $model->instanceShutdownTimer = instanceShutdownTimer::fromMap($map['InstanceShutdownTimer']);
        }

        if (isset($map['InstanceSnapshotList'])) {
            if (!empty($map['InstanceSnapshotList'])) {
                $model->instanceSnapshotList = [];
                $n1 = 0;
                foreach ($map['InstanceSnapshotList'] as $item1) {
                    $model->instanceSnapshotList[$n1++] = instanceSnapshotList::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceUrl'])) {
            $model->instanceUrl = $map['InstanceUrl'];
        }

        if (isset($map['JupyterlabUrl'])) {
            $model->jupyterlabUrl = $map['JupyterlabUrl'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = labels::fromMap($item1);
                }
            }
        }

        if (isset($map['LatestSnapshot'])) {
            $model->latestSnapshot = latestSnapshot::fromMap($map['LatestSnapshot']);
        }

        if (isset($map['OversoldInfo'])) {
            $model->oversoldInfo = $map['OversoldInfo'];
        }

        if (isset($map['OversoldType'])) {
            $model->oversoldType = $map['OversoldType'];
        }

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
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

        if (isset($map['RequestedResource'])) {
            $model->requestedResource = requestedResource::fromMap($map['RequestedResource']);
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TerminalUrl'])) {
            $model->terminalUrl = $map['TerminalUrl'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }

        if (isset($map['WebIDEUrl'])) {
            $model->webIDEUrl = $map['WebIDEUrl'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        if (isset($map['WorkspaceSource'])) {
            $model->workspaceSource = $map['WorkspaceSource'];
        }

        return $model;
    }
}
