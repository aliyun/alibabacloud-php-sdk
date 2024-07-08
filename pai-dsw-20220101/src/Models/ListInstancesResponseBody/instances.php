<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\affinity;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\cloudDisks;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\datasets;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\idleInstanceCuller;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\instanceShutdownTimer;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\instanceSnapshotList;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\labels;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\latestSnapshot;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\requestedResource;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances\userVpc;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example CPU
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @example 3600000
     *
     * @var int
     */
    public $accumulatedRunningTimeInMs;

    /**
     * @var affinity
     */
    public $affinity;

    /**
     * @example []
     *
     * @var cloudDisks[]
     */
    public $cloudDisks;

    /**
     * @var datasets[]
     */
    public $datasets;

    /**
     * @example 535.54.03
     *
     * @var string
     */
    public $driver;

    /**
     * @example ecs.c6.large
     *
     * @var string
     */
    public $ecsSpec;

    /**
     * @example {userName: "Chris"}
     *
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example {"InstanceId":"dsw-05cefd0be2e5a278","CpuPercentThreshold":20,"GpuPercentThreshold":10,"MaxIdleTimeInMinutes":120,"IdleTimeInMinutes":30}
     *
     * @var idleInstanceCuller
     */
    public $idleInstanceCuller;

    /**
     * @example image-05cefd0be2exxxx
     *
     * @var string
     */
    public $imageId;

    /**
     * @example py36_cpu_tf1.12_ubuntu
     *
     * @var string
     */
    public $imageName;

    /**
     * @example registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example dsw-730xxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example training_data
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var instanceShutdownTimer
     */
    public $instanceShutdownTimer;

    /**
     * @example []
     *
     * @var instanceSnapshotList[]
     */
    public $instanceSnapshotList;

    /**
     * @example https://dsw-cn-shanghai.data.aliyun.com/notebook.htm?instance=39772#/
     *
     * @var string
     */
    public $instanceUrl;

    /**
     * @description Jupyterlab Url。
     *
     * @example https://dsw-gateway-cn-shanghai.aliyun.com/dsw-39772/lab/
     *
     * @var string
     */
    public $jupyterlabUrl;

    /**
     * @example {\\"foo\\": \\"bar\\"}
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @var latestSnapshot
     */
    public $latestSnapshot;

    /**
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example Internal Error
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @example ImagePullBackOff
     *
     * @var string
     */
    public $reasonMessage;

    /**
     * @example {"CPU":"4","Memory":"8Gi","SharedMemory":"4Gi","GPU":"1","GPUType":"Tesla-V100-16G"}
     *
     * @var requestedResource
     */
    public $requestedResource;

    /**
     * @example dsw-123456789
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example resource_group
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example https://dsw-gateway-cn-shanghai.aliyun.com/dsw-39772/tty/
     *
     * @var string
     */
    public $terminalUrl;

    /**
     * @example 1612285282502324
     *
     * @var string
     */
    public $userId;

    /**
     * @example 测试用户
     *
     * @var string
     */
    public $userName;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @description Web IDE url。
     *
     * @example https://dsw-gateway-cn-shanghai.aliyun.com/dsw-39772/ide/
     *
     * @var string
     */
    public $webIDEUrl;

    /**
     * @example 40823
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @example training_data
     *
     * @var string
     */
    public $workspaceName;

    /**
     * @example d-123456789
     *
     * @var string
     */
    public $workspaceSource;
    protected $_name = [
        'acceleratorType'            => 'AcceleratorType',
        'accessibility'              => 'Accessibility',
        'accumulatedRunningTimeInMs' => 'AccumulatedRunningTimeInMs',
        'affinity'                   => 'Affinity',
        'cloudDisks'                 => 'CloudDisks',
        'datasets'                   => 'Datasets',
        'driver'                     => 'Driver',
        'ecsSpec'                    => 'EcsSpec',
        'environmentVariables'       => 'EnvironmentVariables',
        'gmtCreateTime'              => 'GmtCreateTime',
        'gmtModifiedTime'            => 'GmtModifiedTime',
        'idleInstanceCuller'         => 'IdleInstanceCuller',
        'imageId'                    => 'ImageId',
        'imageName'                  => 'ImageName',
        'imageUrl'                   => 'ImageUrl',
        'instanceId'                 => 'InstanceId',
        'instanceName'               => 'InstanceName',
        'instanceShutdownTimer'      => 'InstanceShutdownTimer',
        'instanceSnapshotList'       => 'InstanceSnapshotList',
        'instanceUrl'                => 'InstanceUrl',
        'jupyterlabUrl'              => 'JupyterlabUrl',
        'labels'                     => 'Labels',
        'latestSnapshot'             => 'LatestSnapshot',
        'paymentType'                => 'PaymentType',
        'priority'                   => 'Priority',
        'reasonCode'                 => 'ReasonCode',
        'reasonMessage'              => 'ReasonMessage',
        'requestedResource'          => 'RequestedResource',
        'resourceId'                 => 'ResourceId',
        'resourceName'               => 'ResourceName',
        'status'                     => 'Status',
        'terminalUrl'                => 'TerminalUrl',
        'userId'                     => 'UserId',
        'userName'                   => 'UserName',
        'userVpc'                    => 'UserVpc',
        'webIDEUrl'                  => 'WebIDEUrl',
        'workspaceId'                => 'WorkspaceId',
        'workspaceName'              => 'WorkspaceName',
        'workspaceSource'            => 'WorkspaceSource',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Affinity'] = null !== $this->affinity ? $this->affinity->toMap() : null;
        }
        if (null !== $this->cloudDisks) {
            $res['CloudDisks'] = [];
            if (null !== $this->cloudDisks && \is_array($this->cloudDisks)) {
                $n = 0;
                foreach ($this->cloudDisks as $item) {
                    $res['CloudDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->datasets) {
            $res['Datasets'] = [];
            if (null !== $this->datasets && \is_array($this->datasets)) {
                $n = 0;
                foreach ($this->datasets as $item) {
                    $res['Datasets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->driver) {
            $res['Driver'] = $this->driver;
        }
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }
        if (null !== $this->environmentVariables) {
            $res['EnvironmentVariables'] = $this->environmentVariables;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->idleInstanceCuller) {
            $res['IdleInstanceCuller'] = null !== $this->idleInstanceCuller ? $this->idleInstanceCuller->toMap() : null;
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
            $res['InstanceShutdownTimer'] = null !== $this->instanceShutdownTimer ? $this->instanceShutdownTimer->toMap() : null;
        }
        if (null !== $this->instanceSnapshotList) {
            $res['InstanceSnapshotList'] = [];
            if (null !== $this->instanceSnapshotList && \is_array($this->instanceSnapshotList)) {
                $n = 0;
                foreach ($this->instanceSnapshotList as $item) {
                    $res['InstanceSnapshotList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->latestSnapshot) {
            $res['LatestSnapshot'] = null !== $this->latestSnapshot ? $this->latestSnapshot->toMap() : null;
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
            $res['RequestedResource'] = null !== $this->requestedResource ? $this->requestedResource->toMap() : null;
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
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return instances
     */
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
                $n                 = 0;
                foreach ($map['CloudDisks'] as $item) {
                    $model->cloudDisks[$n++] = null !== $item ? cloudDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Datasets'])) {
            if (!empty($map['Datasets'])) {
                $model->datasets = [];
                $n               = 0;
                foreach ($map['Datasets'] as $item) {
                    $model->datasets[$n++] = null !== $item ? datasets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Driver'])) {
            $model->driver = $map['Driver'];
        }
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }
        if (isset($map['EnvironmentVariables'])) {
            $model->environmentVariables = $map['EnvironmentVariables'];
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
                $n                           = 0;
                foreach ($map['InstanceSnapshotList'] as $item) {
                    $model->instanceSnapshotList[$n++] = null !== $item ? instanceSnapshotList::fromMap($item) : $item;
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
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LatestSnapshot'])) {
            $model->latestSnapshot = latestSnapshot::fromMap($map['LatestSnapshot']);
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
