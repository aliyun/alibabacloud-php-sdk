<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\Service\instanceCountInResource;
use AlibabaCloud\SDK\Eas\V20210701\Models\Service\labels;
use AlibabaCloud\Tea\Model;

class Service extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $appConfig;

    /**
     * @var string
     */
    public $appSpecName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var bool
     */
    public $autoscalerEnabled;

    /**
     * @var string
     */
    public $callerUid;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $cronscalerEnabled;

    /**
     * @var int
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $extraData;

    /**
     * @var int
     */
    public $GPUCorePercentage;

    /**
     * @var int
     */
    public $GPUMemory;

    /**
     * @var string
     */
    public $gateway;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var string
     */
    public $image;

    /**
     * @var instanceCountInResource
     */
    public $instanceCountInResource;

    /**
     * @var string
     */
    public $internetEndpoint;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var int
     */
    public $latestVersion;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $parentUid;

    /**
     * @var int
     */
    public $pendingInstance;

    /**
     * @var string
     */
    public $quotaId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceAlias;

    /**
     * @var bool
     */
    public $resourceBurstable;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $roleAttrs;

    /**
     * @var int
     */
    public $runningInstance;

    /**
     * @var string
     */
    public $safetyLock;

    /**
     * @var string
     */
    public $secondaryInternetEndpoint;

    /**
     * @var string
     */
    public $secondaryIntranetEndpoint;

    /**
     * @var string
     */
    public $serviceConfig;

    /**
     * @var string
     */
    public $serviceGroup;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceUid;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalInstance;

    /**
     * @var string
     */
    public $trafficState;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'appConfig' => 'AppConfig',
        'appSpecName' => 'AppSpecName',
        'appType' => 'AppType',
        'appVersion' => 'AppVersion',
        'autoscalerEnabled' => 'AutoscalerEnabled',
        'callerUid' => 'CallerUid',
        'cpu' => 'Cpu',
        'createTime' => 'CreateTime',
        'cronscalerEnabled' => 'CronscalerEnabled',
        'currentVersion' => 'CurrentVersion',
        'extraData' => 'ExtraData',
        'GPUCorePercentage' => 'GPUCorePercentage',
        'GPUMemory' => 'GPUMemory',
        'gateway' => 'Gateway',
        'gpu' => 'Gpu',
        'image' => 'Image',
        'instanceCountInResource' => 'InstanceCountInResource',
        'internetEndpoint' => 'InternetEndpoint',
        'intranetEndpoint' => 'IntranetEndpoint',
        'labels' => 'Labels',
        'latestVersion' => 'LatestVersion',
        'memory' => 'Memory',
        'message' => 'Message',
        'namespace' => 'Namespace',
        'parentUid' => 'ParentUid',
        'pendingInstance' => 'PendingInstance',
        'quotaId' => 'QuotaId',
        'reason' => 'Reason',
        'region' => 'Region',
        'requestId' => 'RequestId',
        'resource' => 'Resource',
        'resourceAlias' => 'ResourceAlias',
        'resourceBurstable' => 'ResourceBurstable',
        'role' => 'Role',
        'roleAttrs' => 'RoleAttrs',
        'runningInstance' => 'RunningInstance',
        'safetyLock' => 'SafetyLock',
        'secondaryInternetEndpoint' => 'SecondaryInternetEndpoint',
        'secondaryIntranetEndpoint' => 'SecondaryIntranetEndpoint',
        'serviceConfig' => 'ServiceConfig',
        'serviceGroup' => 'ServiceGroup',
        'serviceId' => 'ServiceId',
        'serviceName' => 'ServiceName',
        'serviceUid' => 'ServiceUid',
        'source' => 'Source',
        'status' => 'Status',
        'totalInstance' => 'TotalInstance',
        'trafficState' => 'TrafficState',
        'updateTime' => 'UpdateTime',
        'weight' => 'Weight',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->appConfig) {
            $res['AppConfig'] = $this->appConfig;
        }
        if (null !== $this->appSpecName) {
            $res['AppSpecName'] = $this->appSpecName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->autoscalerEnabled) {
            $res['AutoscalerEnabled'] = $this->autoscalerEnabled;
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
        if (null !== $this->cronscalerEnabled) {
            $res['CronscalerEnabled'] = $this->cronscalerEnabled;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->GPUCorePercentage) {
            $res['GPUCorePercentage'] = $this->GPUCorePercentage;
        }
        if (null !== $this->GPUMemory) {
            $res['GPUMemory'] = $this->GPUMemory;
        }
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->instanceCountInResource) {
            $res['InstanceCountInResource'] = null !== $this->instanceCountInResource ? $this->instanceCountInResource->toMap() : null;
        }
        if (null !== $this->internetEndpoint) {
            $res['InternetEndpoint'] = $this->internetEndpoint;
        }
        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
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
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
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
        if (null !== $this->resourceAlias) {
            $res['ResourceAlias'] = $this->resourceAlias;
        }
        if (null !== $this->resourceBurstable) {
            $res['ResourceBurstable'] = $this->resourceBurstable;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->roleAttrs) {
            $res['RoleAttrs'] = $this->roleAttrs;
        }
        if (null !== $this->runningInstance) {
            $res['RunningInstance'] = $this->runningInstance;
        }
        if (null !== $this->safetyLock) {
            $res['SafetyLock'] = $this->safetyLock;
        }
        if (null !== $this->secondaryInternetEndpoint) {
            $res['SecondaryInternetEndpoint'] = $this->secondaryInternetEndpoint;
        }
        if (null !== $this->secondaryIntranetEndpoint) {
            $res['SecondaryIntranetEndpoint'] = $this->secondaryIntranetEndpoint;
        }
        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = $this->serviceConfig;
        }
        if (null !== $this->serviceGroup) {
            $res['ServiceGroup'] = $this->serviceGroup;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceUid) {
            $res['ServiceUid'] = $this->serviceUid;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalInstance) {
            $res['TotalInstance'] = $this->totalInstance;
        }
        if (null !== $this->trafficState) {
            $res['TrafficState'] = $this->trafficState;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppConfig'])) {
            $model->appConfig = $map['AppConfig'];
        }
        if (isset($map['AppSpecName'])) {
            $model->appSpecName = $map['AppSpecName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['AutoscalerEnabled'])) {
            $model->autoscalerEnabled = $map['AutoscalerEnabled'];
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
        if (isset($map['CronscalerEnabled'])) {
            $model->cronscalerEnabled = $map['CronscalerEnabled'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['GPUCorePercentage'])) {
            $model->GPUCorePercentage = $map['GPUCorePercentage'];
        }
        if (isset($map['GPUMemory'])) {
            $model->GPUMemory = $map['GPUMemory'];
        }
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['InstanceCountInResource'])) {
            $model->instanceCountInResource = instanceCountInResource::fromMap($map['InstanceCountInResource']);
        }
        if (isset($map['InternetEndpoint'])) {
            $model->internetEndpoint = $map['InternetEndpoint'];
        }
        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
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
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
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
        if (isset($map['ResourceAlias'])) {
            $model->resourceAlias = $map['ResourceAlias'];
        }
        if (isset($map['ResourceBurstable'])) {
            $model->resourceBurstable = $map['ResourceBurstable'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['RoleAttrs'])) {
            $model->roleAttrs = $map['RoleAttrs'];
        }
        if (isset($map['RunningInstance'])) {
            $model->runningInstance = $map['RunningInstance'];
        }
        if (isset($map['SafetyLock'])) {
            $model->safetyLock = $map['SafetyLock'];
        }
        if (isset($map['SecondaryInternetEndpoint'])) {
            $model->secondaryInternetEndpoint = $map['SecondaryInternetEndpoint'];
        }
        if (isset($map['SecondaryIntranetEndpoint'])) {
            $model->secondaryIntranetEndpoint = $map['SecondaryIntranetEndpoint'];
        }
        if (isset($map['ServiceConfig'])) {
            $model->serviceConfig = $map['ServiceConfig'];
        }
        if (isset($map['ServiceGroup'])) {
            $model->serviceGroup = $map['ServiceGroup'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceUid'])) {
            $model->serviceUid = $map['ServiceUid'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalInstance'])) {
            $model->totalInstance = $map['TotalInstance'];
        }
        if (isset($map['TrafficState'])) {
            $model->trafficState = $map['TrafficState'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
