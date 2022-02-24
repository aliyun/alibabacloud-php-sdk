<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class Service extends Model
{
    /**
     * @description 服务的请求Token
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description 服务创建账号的UID
     *
     * @var string
     */
    public $callerUid;

    /**
     * @description 每个实例申请的cpu
     *
     * @var int
     */
    public $cpu;

    /**
     * @description 服务的创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 当前运行的模型版本
     *
     * @var int
     */
    public $currentVersion;

    /**
     * @description 每个实例申请的gpu
     *
     * @var int
     */
    public $gpu;

    /**
     * @description 服务的数据镜像
     *
     * @var string
     */
    public $image;

    /**
     * @description 服务的公网endpoint
     *
     * @var string
     */
    public $internetEndpoint;

    /**
     * @description 服务内网endpoint
     *
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @description 服务最新版本号
     *
     * @var int
     */
    public $latestVersion;

    /**
     * @description 每个worker需要的内存大小，单位为M
     *
     * @var int
     */
    public $memory;

    /**
     * @description 服务的摘要信息
     *
     * @var string
     */
    public $message;

    /**
     * @description 服务所在的命名空间
     *
     * @var string
     */
    public $namespace;

    /**
     * @description 服务创建账号的主账号UID
     *
     * @var string
     */
    public $parentUid;

    /**
     * @description 被挂起的服务的实例个数
     *
     * @var int
     */
    public $pendingInstance;

    /**
     * @description 服务的状态信息
     *
     * @var string
     */
    public $reason;

    /**
     * @description 服务所在的区域
     *
     * @var string
     */
    public $region;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 服务所在的资源组
     *
     * @var string
     */
    public $resource;

    /**
     * @description 正在运行的服务的实例个数
     *
     * @var int
     */
    public $runningInstance;

    /**
     * @description 服务的配置信息
     *
     * @var string
     */
    public $serviceConfig;

    /**
     * @description 服务ID
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description 服务的名字
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 服务的状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 服务的所有实例总个数
     *
     * @var int
     */
    public $totalInstance;

    /**
     * @description 服务的更新时间
     *
     * @var string
     */
    public $updatetime;

    /**
     * @description 服务灰度发布的权重值
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'accessToken'      => 'AccessToken',
        'callerUid'        => 'CallerUid',
        'cpu'              => 'Cpu',
        'createTime'       => 'CreateTime',
        'currentVersion'   => 'CurrentVersion',
        'gpu'              => 'Gpu',
        'image'            => 'Image',
        'internetEndpoint' => 'InternetEndpoint',
        'intranetEndpoint' => 'IntranetEndpoint',
        'latestVersion'    => 'LatestVersion',
        'memory'           => 'Memory',
        'message'          => 'Message',
        'namespace'        => 'Namespace',
        'parentUid'        => 'ParentUid',
        'pendingInstance'  => 'PendingInstance',
        'reason'           => 'Reason',
        'region'           => 'Region',
        'requestId'        => 'RequestId',
        'resource'         => 'Resource',
        'runningInstance'  => 'RunningInstance',
        'serviceConfig'    => 'ServiceConfig',
        'serviceId'        => 'ServiceId',
        'serviceName'      => 'ServiceName',
        'status'           => 'Status',
        'totalInstance'    => 'TotalInstance',
        'updatetime'       => 'Updatetime',
        'weight'           => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->internetEndpoint) {
            $res['InternetEndpoint'] = $this->internetEndpoint;
        }
        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->parentUid) {
            $res['ParentUid'] = $this->parentUid;
        }
        if (null !== $this->pendingInstance) {
            $res['PendingInstance'] = $this->pendingInstance;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->runningInstance) {
            $res['RunningInstance'] = $this->runningInstance;
        }
        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = $this->serviceConfig;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalInstance) {
            $res['TotalInstance'] = $this->totalInstance;
        }
        if (null !== $this->updatetime) {
            $res['Updatetime'] = $this->updatetime;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Service
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['InternetEndpoint'])) {
            $model->internetEndpoint = $map['InternetEndpoint'];
        }
        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ParentUid'])) {
            $model->parentUid = $map['ParentUid'];
        }
        if (isset($map['PendingInstance'])) {
            $model->pendingInstance = $map['PendingInstance'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['RunningInstance'])) {
            $model->runningInstance = $map['RunningInstance'];
        }
        if (isset($map['ServiceConfig'])) {
            $model->serviceConfig = $map['ServiceConfig'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalInstance'])) {
            $model->totalInstance = $map['TotalInstance'];
        }
        if (isset($map['Updatetime'])) {
            $model->updatetime = $map['Updatetime'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
