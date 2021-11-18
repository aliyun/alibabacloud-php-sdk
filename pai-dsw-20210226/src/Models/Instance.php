<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class Instance extends Model
{
    /**
     * @description 运行时间，毫秒数
     *
     * @var int
     */
    public $accumulativeRunningTimeInMillis;

    /**
     * @description 累计运行时间(分钟)
     *
     * @var int
     */
    public $accumulativeRunningTimeInMinutes;

    /**
     * @description 创建者
     *
     * @var string
     */
    public $createUser;

    /**
     * @description 数据集列表
     *
     * @var Dataset[]
     */
    public $datasetList;

    /**
     * @description ecs规格
     *
     * @var string
     */
    public $ecsSpec;

    /**
     * @description 创建时间(GMT)
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 修改时间(GMT)
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description 镜像ID
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 镜像名称
     *
     * @var string
     */
    public $imageName;

    /**
     * @description 镜像类型
     *
     * @var string
     */
    public $imageType;

    /**
     * @description 镜像链接
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 实例名称
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description 定时关机任务
     *
     * @var InstanceShutdownTimer
     */
    public $instanceShutdownTimer;

    /**
     * @description 实例状态
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description dsw实例链接
     *
     * @var string
     */
    public $instanceUrl;

    /**
     * @description 实例版本
     *
     * @var string
     */
    public $instanceVersion;

    /**
     * @description 是否他人可见
     *
     * @var int
     */
    public $isPublic;

    /**
     * @description jupyter链接
     *
     * @var string
     */
    public $jupyterlabUrl;

    /**
     * @description 错误消息
     *
     * @var string
     */
    public $message;

    /**
     * @description nas文件系统ID
     *
     * @var string
     */
    public $nasFileSystemId;

    /**
     * @description 付费类型代码
     *
     * @var int
     */
    public $payType;

    /**
     * @description 付费类型名称
     *
     * @var string
     */
    public $payTypeName;

    /**
     * @description 资源类型名称
     *
     * @var string
     */
    public $resource;

    /**
     * @description 资源类型代码
     *
     * @var int
     */
    public $resourceType;

    /**
     * @description 是否支持定时关机
     *
     * @var bool
     */
    public $shutdownEnabled;

    /**
     * @description 命令行终端链接
     *
     * @var string
     */
    public $terminalUrl;

    /**
     * @description 用户ID
     *
     * @var string
     */
    public $userId;

    /**
     * @description 保存用户镜像列表
     *
     * @var Image[]
     */
    public $userImageList;

    /**
     * @description 被打通VPC配置
     *
     * @var UserVpc
     */
    public $userVpc;

    /**
     * @description webIde链接
     *
     * @var string
     */
    public $webIdeUrl;

    /**
     * @description 工作空间id
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description 工作空间名称
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'accumulativeRunningTimeInMillis'  => 'AccumulativeRunningTimeInMillis',
        'accumulativeRunningTimeInMinutes' => 'AccumulativeRunningTimeInMinutes',
        'createUser'                       => 'CreateUser',
        'datasetList'                      => 'DatasetList',
        'ecsSpec'                          => 'EcsSpec',
        'gmtCreateTime'                    => 'GmtCreateTime',
        'gmtModifiedTime'                  => 'GmtModifiedTime',
        'imageId'                          => 'ImageId',
        'imageName'                        => 'ImageName',
        'imageType'                        => 'ImageType',
        'imageUrl'                         => 'ImageUrl',
        'instanceId'                       => 'InstanceId',
        'instanceName'                     => 'InstanceName',
        'instanceShutdownTimer'            => 'InstanceShutdownTimer',
        'instanceStatus'                   => 'InstanceStatus',
        'instanceUrl'                      => 'InstanceUrl',
        'instanceVersion'                  => 'InstanceVersion',
        'isPublic'                         => 'IsPublic',
        'jupyterlabUrl'                    => 'JupyterlabUrl',
        'message'                          => 'Message',
        'nasFileSystemId'                  => 'NasFileSystemId',
        'payType'                          => 'PayType',
        'payTypeName'                      => 'PayTypeName',
        'resource'                         => 'Resource',
        'resourceType'                     => 'ResourceType',
        'shutdownEnabled'                  => 'ShutdownEnabled',
        'terminalUrl'                      => 'TerminalUrl',
        'userId'                           => 'UserId',
        'userImageList'                    => 'UserImageList',
        'userVpc'                          => 'UserVpc',
        'webIdeUrl'                        => 'WebIdeUrl',
        'workspaceId'                      => 'WorkspaceId',
        'workspaceName'                    => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accumulativeRunningTimeInMillis) {
            $res['AccumulativeRunningTimeInMillis'] = $this->accumulativeRunningTimeInMillis;
        }
        if (null !== $this->accumulativeRunningTimeInMinutes) {
            $res['AccumulativeRunningTimeInMinutes'] = $this->accumulativeRunningTimeInMinutes;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->datasetList) {
            $res['DatasetList'] = [];
            if (null !== $this->datasetList && \is_array($this->datasetList)) {
                $n = 0;
                foreach ($this->datasetList as $item) {
                    $res['DatasetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
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
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceUrl) {
            $res['InstanceUrl'] = $this->instanceUrl;
        }
        if (null !== $this->instanceVersion) {
            $res['InstanceVersion'] = $this->instanceVersion;
        }
        if (null !== $this->isPublic) {
            $res['IsPublic'] = $this->isPublic;
        }
        if (null !== $this->jupyterlabUrl) {
            $res['JupyterlabUrl'] = $this->jupyterlabUrl;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nasFileSystemId) {
            $res['NasFileSystemId'] = $this->nasFileSystemId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->payTypeName) {
            $res['PayTypeName'] = $this->payTypeName;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->shutdownEnabled) {
            $res['ShutdownEnabled'] = $this->shutdownEnabled;
        }
        if (null !== $this->terminalUrl) {
            $res['TerminalUrl'] = $this->terminalUrl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userImageList) {
            $res['UserImageList'] = [];
            if (null !== $this->userImageList && \is_array($this->userImageList)) {
                $n = 0;
                foreach ($this->userImageList as $item) {
                    $res['UserImageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }
        if (null !== $this->webIdeUrl) {
            $res['WebIdeUrl'] = $this->webIdeUrl;
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
     * @return Instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccumulativeRunningTimeInMillis'])) {
            $model->accumulativeRunningTimeInMillis = $map['AccumulativeRunningTimeInMillis'];
        }
        if (isset($map['AccumulativeRunningTimeInMinutes'])) {
            $model->accumulativeRunningTimeInMinutes = $map['AccumulativeRunningTimeInMinutes'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['DatasetList'])) {
            if (!empty($map['DatasetList'])) {
                $model->datasetList = [];
                $n                  = 0;
                foreach ($map['DatasetList'] as $item) {
                    $model->datasetList[$n++] = null !== $item ? Dataset::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
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
            $model->instanceShutdownTimer = InstanceShutdownTimer::fromMap($map['InstanceShutdownTimer']);
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceUrl'])) {
            $model->instanceUrl = $map['InstanceUrl'];
        }
        if (isset($map['InstanceVersion'])) {
            $model->instanceVersion = $map['InstanceVersion'];
        }
        if (isset($map['IsPublic'])) {
            $model->isPublic = $map['IsPublic'];
        }
        if (isset($map['JupyterlabUrl'])) {
            $model->jupyterlabUrl = $map['JupyterlabUrl'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NasFileSystemId'])) {
            $model->nasFileSystemId = $map['NasFileSystemId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PayTypeName'])) {
            $model->payTypeName = $map['PayTypeName'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ShutdownEnabled'])) {
            $model->shutdownEnabled = $map['ShutdownEnabled'];
        }
        if (isset($map['TerminalUrl'])) {
            $model->terminalUrl = $map['TerminalUrl'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserImageList'])) {
            if (!empty($map['UserImageList'])) {
                $model->userImageList = [];
                $n                    = 0;
                foreach ($map['UserImageList'] as $item) {
                    $model->userImageList[$n++] = null !== $item ? Image::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = UserVpc::fromMap($map['UserVpc']);
        }
        if (isset($map['WebIdeUrl'])) {
            $model->webIdeUrl = $map['WebIdeUrl'];
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
