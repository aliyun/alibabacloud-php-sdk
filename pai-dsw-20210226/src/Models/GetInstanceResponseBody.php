<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceResponseBody extends Model
{
    /**
     * @description 累计运行时间(分钟)
     *
     * @var int
     */
    public $accumulativeRunningTimeInMinutes;

    /**
     * @description ecs规格
     *
     * @var string
     */
    public $ecsSpec;

    /**
     * @description 实例创建时间(GMT)
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 实例修改时间(GMT)
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
     * @description jupyter链接
     *
     * @var string
     */
    public $jupyterlabUrl;

    /**
     * @description nas文件系统ID
     *
     * @var string
     */
    public $nasFileSystemId;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

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
     * @description 被打通VPC配置
     *
     * @var UserVpc
     */
    public $userVpc;

    /**
     * @description web ide链接
     *
     * @var string
     */
    public $webIdeUrl;
    protected $_name = [
        'accumulativeRunningTimeInMinutes' => 'AccumulativeRunningTimeInMinutes',
        'ecsSpec'                          => 'EcsSpec',
        'gmtCreateTime'                    => 'GmtCreateTime',
        'gmtModifiedTime'                  => 'GmtModifiedTime',
        'imageId'                          => 'ImageId',
        'imageUrl'                         => 'ImageUrl',
        'instanceId'                       => 'InstanceId',
        'instanceName'                     => 'InstanceName',
        'instanceShutdownTimer'            => 'InstanceShutdownTimer',
        'instanceStatus'                   => 'InstanceStatus',
        'jupyterlabUrl'                    => 'JupyterlabUrl',
        'nasFileSystemId'                  => 'NasFileSystemId',
        'requestId'                        => 'RequestId',
        'terminalUrl'                      => 'TerminalUrl',
        'userId'                           => 'UserId',
        'userVpc'                          => 'UserVpc',
        'webIdeUrl'                        => 'WebIdeUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accumulativeRunningTimeInMinutes) {
            $res['AccumulativeRunningTimeInMinutes'] = $this->accumulativeRunningTimeInMinutes;
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
        if (null !== $this->jupyterlabUrl) {
            $res['JupyterlabUrl'] = $this->jupyterlabUrl;
        }
        if (null !== $this->nasFileSystemId) {
            $res['NasFileSystemId'] = $this->nasFileSystemId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->terminalUrl) {
            $res['TerminalUrl'] = $this->terminalUrl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }
        if (null !== $this->webIdeUrl) {
            $res['WebIdeUrl'] = $this->webIdeUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccumulativeRunningTimeInMinutes'])) {
            $model->accumulativeRunningTimeInMinutes = $map['AccumulativeRunningTimeInMinutes'];
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
        if (isset($map['JupyterlabUrl'])) {
            $model->jupyterlabUrl = $map['JupyterlabUrl'];
        }
        if (isset($map['NasFileSystemId'])) {
            $model->nasFileSystemId = $map['NasFileSystemId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TerminalUrl'])) {
            $model->terminalUrl = $map['TerminalUrl'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = UserVpc::fromMap($map['UserVpc']);
        }
        if (isset($map['WebIdeUrl'])) {
            $model->webIdeUrl = $map['WebIdeUrl'];
        }

        return $model;
    }
}
