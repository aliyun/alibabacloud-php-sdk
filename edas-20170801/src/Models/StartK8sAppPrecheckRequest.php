<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class StartK8sAppPrecheckRequest extends Model
{
    /**
     * @var string
     */
    public $annotations;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $componentIds;

    /**
     * @var string
     */
    public $configMountDescs;

    /**
     * @var string
     */
    public $emptyDirs;

    /**
     * @var string
     */
    public $envFroms;

    /**
     * @var string
     */
    public $envs;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $javaStartUpConfig;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var int
     */
    public $limitEphemeralStorage;

    /**
     * @var int
     */
    public $limitMem;

    /**
     * @var int
     */
    public $limitmCpu;

    /**
     * @var string
     */
    public $localVolume;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $packageUrl;

    /**
     * @var string
     */
    public $pvcMountDescs;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var int
     */
    public $requestsEphemeralStorage;

    /**
     * @var int
     */
    public $requestsMem;

    /**
     * @var int
     */
    public $requestsmCpu;
    protected $_name = [
        'annotations' => 'Annotations',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'componentIds' => 'ComponentIds',
        'configMountDescs' => 'ConfigMountDescs',
        'emptyDirs' => 'EmptyDirs',
        'envFroms' => 'EnvFroms',
        'envs' => 'Envs',
        'imageUrl' => 'ImageUrl',
        'javaStartUpConfig' => 'JavaStartUpConfig',
        'labels' => 'Labels',
        'limitEphemeralStorage' => 'LimitEphemeralStorage',
        'limitMem' => 'LimitMem',
        'limitmCpu' => 'LimitmCpu',
        'localVolume' => 'LocalVolume',
        'namespace' => 'Namespace',
        'packageUrl' => 'PackageUrl',
        'pvcMountDescs' => 'PvcMountDescs',
        'regionId' => 'RegionId',
        'replicas' => 'Replicas',
        'requestsEphemeralStorage' => 'RequestsEphemeralStorage',
        'requestsMem' => 'RequestsMem',
        'requestsmCpu' => 'RequestsmCpu',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->componentIds) {
            $res['ComponentIds'] = $this->componentIds;
        }

        if (null !== $this->configMountDescs) {
            $res['ConfigMountDescs'] = $this->configMountDescs;
        }

        if (null !== $this->emptyDirs) {
            $res['EmptyDirs'] = $this->emptyDirs;
        }

        if (null !== $this->envFroms) {
            $res['EnvFroms'] = $this->envFroms;
        }

        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->javaStartUpConfig) {
            $res['JavaStartUpConfig'] = $this->javaStartUpConfig;
        }

        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        if (null !== $this->limitEphemeralStorage) {
            $res['LimitEphemeralStorage'] = $this->limitEphemeralStorage;
        }

        if (null !== $this->limitMem) {
            $res['LimitMem'] = $this->limitMem;
        }

        if (null !== $this->limitmCpu) {
            $res['LimitmCpu'] = $this->limitmCpu;
        }

        if (null !== $this->localVolume) {
            $res['LocalVolume'] = $this->localVolume;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }

        if (null !== $this->pvcMountDescs) {
            $res['PvcMountDescs'] = $this->pvcMountDescs;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->requestsEphemeralStorage) {
            $res['RequestsEphemeralStorage'] = $this->requestsEphemeralStorage;
        }

        if (null !== $this->requestsMem) {
            $res['RequestsMem'] = $this->requestsMem;
        }

        if (null !== $this->requestsmCpu) {
            $res['RequestsmCpu'] = $this->requestsmCpu;
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
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ComponentIds'])) {
            $model->componentIds = $map['ComponentIds'];
        }

        if (isset($map['ConfigMountDescs'])) {
            $model->configMountDescs = $map['ConfigMountDescs'];
        }

        if (isset($map['EmptyDirs'])) {
            $model->emptyDirs = $map['EmptyDirs'];
        }

        if (isset($map['EnvFroms'])) {
            $model->envFroms = $map['EnvFroms'];
        }

        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['JavaStartUpConfig'])) {
            $model->javaStartUpConfig = $map['JavaStartUpConfig'];
        }

        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        if (isset($map['LimitEphemeralStorage'])) {
            $model->limitEphemeralStorage = $map['LimitEphemeralStorage'];
        }

        if (isset($map['LimitMem'])) {
            $model->limitMem = $map['LimitMem'];
        }

        if (isset($map['LimitmCpu'])) {
            $model->limitmCpu = $map['LimitmCpu'];
        }

        if (isset($map['LocalVolume'])) {
            $model->localVolume = $map['LocalVolume'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }

        if (isset($map['PvcMountDescs'])) {
            $model->pvcMountDescs = $map['PvcMountDescs'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['RequestsEphemeralStorage'])) {
            $model->requestsEphemeralStorage = $map['RequestsEphemeralStorage'];
        }

        if (isset($map['RequestsMem'])) {
            $model->requestsMem = $map['RequestsMem'];
        }

        if (isset($map['RequestsmCpu'])) {
            $model->requestsmCpu = $map['RequestsmCpu'];
        }

        return $model;
    }
}
