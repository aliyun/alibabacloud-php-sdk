<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\configMountDescs;
use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\emptyDirs;
use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\envFroms;
use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\envs;
use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\imageConfig;
use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\localVolumes;
use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\nasMountDescs;
use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\packageConfig;
use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\pvcMountDescs;
use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\slsConfigs;
use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\webContainerConfig;
use AlibabaCloud\Tea\Model;

class AppConfig extends Model
{
    /**
     * @description 启动命令
     *
     * @var string
     */
    public $command;

    /**
     * @description 启动参数
     *
     * @var string[]
     */
    public $commandArgs;

    /**
     * @description 配置项挂载配置
     *
     * @var configMountDescs[]
     */
    public $configMountDescs;

    /**
     * @description 是否尽量多节点部署
     *
     * @var bool
     */
    public $deployAcrossNodes;

    /**
     * @description 是否尽量多可用区部署
     *
     * @var bool
     */
    public $deployAcrossZones;

    /**
     * @description EmptyDir挂载配置
     *
     * @var emptyDirs[]
     */
    public $emptyDirs;

    /**
     * @description 是否开启限流降级
     *
     * @var bool
     */
    public $enableAhas;

    /**
     * @description 环境变量引用
     *
     * @var envFroms[]
     */
    public $envFroms;

    /**
     * @description 环境变量
     *
     * @var envs[]
     */
    public $envs;

    /**
     * @description 镜像配置
     *
     * @var imageConfig
     */
    public $imageConfig;

    /**
     * @description 是否多语言应用
     *
     * @var bool
     */
    public $isMultilingualApp;

    /**
     * @description Java启动参数配置
     *
     * @var string
     */
    public $javaStartUpConfig;

    /**
     * @description CPU限制
     *
     * @var string
     */
    public $limitCpu;

    /**
     * @description 内存限制
     *
     * @var string
     */
    public $limitMem;

    /**
     * @description liveness探针配置
     *
     * @var string
     */
    public $liveness;

    /**
     * @description 本地磁盘挂载配置
     *
     * @var localVolumes[]
     */
    public $localVolumes;

    /**
     * @description NAS实例ID
     *
     * @var string
     */
    public $nasId;

    /**
     * @description NAS挂载配置
     *
     * @var nasMountDescs[]
     */
    public $nasMountDescs;

    /**
     * @description NAS存储类型
     *
     * @var string
     */
    public $nasStorageType;

    /**
     * @description 部署包配置
     *
     * @var packageConfig
     */
    public $packageConfig;

    /**
     * @description postStart挂钩配置
     *
     * @var string
     */
    public $postStart;

    /**
     * @description preStop挂钩配置
     *
     * @var string
     */
    public $preStop;

    /**
     * @description 持久化存储挂载配置
     *
     * @var pvcMountDescs[]
     */
    public $pvcMountDescs;

    /**
     * @description readiness探针配置
     *
     * @var string
     */
    public $readiness;

    /**
     * @description 应用实例数
     *
     * @var int
     */
    public $replicas;

    /**
     * @description CPU需求
     *
     * @var string
     */
    public $requestCpu;

    /**
     * @description 内存需求
     *
     * @var string
     */
    public $requestMem;

    /**
     * @description 运行时类型
     *
     * @var string
     */
    public $runtimeClassName;

    /**
     * @description 日志采集配置
     *
     * @var slsConfigs[]
     */
    public $slsConfigs;

    /**
     * @description Tomcat配置
     *
     * @var webContainerConfig
     */
    public $webContainerConfig;
    protected $_name = [
        'command'            => 'Command',
        'commandArgs'        => 'CommandArgs',
        'configMountDescs'   => 'ConfigMountDescs',
        'deployAcrossNodes'  => 'DeployAcrossNodes',
        'deployAcrossZones'  => 'DeployAcrossZones',
        'emptyDirs'          => 'EmptyDirs',
        'enableAhas'         => 'EnableAhas',
        'envFroms'           => 'EnvFroms',
        'envs'               => 'Envs',
        'imageConfig'        => 'ImageConfig',
        'isMultilingualApp'  => 'IsMultilingualApp',
        'javaStartUpConfig'  => 'JavaStartUpConfig',
        'limitCpu'           => 'LimitCpu',
        'limitMem'           => 'LimitMem',
        'liveness'           => 'Liveness',
        'localVolumes'       => 'LocalVolumes',
        'nasId'              => 'NasId',
        'nasMountDescs'      => 'NasMountDescs',
        'nasStorageType'     => 'NasStorageType',
        'packageConfig'      => 'PackageConfig',
        'postStart'          => 'PostStart',
        'preStop'            => 'PreStop',
        'pvcMountDescs'      => 'PvcMountDescs',
        'readiness'          => 'Readiness',
        'replicas'           => 'Replicas',
        'requestCpu'         => 'RequestCpu',
        'requestMem'         => 'RequestMem',
        'runtimeClassName'   => 'RuntimeClassName',
        'slsConfigs'         => 'SlsConfigs',
        'webContainerConfig' => 'WebContainerConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
        }
        if (null !== $this->configMountDescs) {
            $res['ConfigMountDescs'] = [];
            if (null !== $this->configMountDescs && \is_array($this->configMountDescs)) {
                $n = 0;
                foreach ($this->configMountDescs as $item) {
                    $res['ConfigMountDescs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deployAcrossNodes) {
            $res['DeployAcrossNodes'] = $this->deployAcrossNodes;
        }
        if (null !== $this->deployAcrossZones) {
            $res['DeployAcrossZones'] = $this->deployAcrossZones;
        }
        if (null !== $this->emptyDirs) {
            $res['EmptyDirs'] = [];
            if (null !== $this->emptyDirs && \is_array($this->emptyDirs)) {
                $n = 0;
                foreach ($this->emptyDirs as $item) {
                    $res['EmptyDirs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enableAhas) {
            $res['EnableAhas'] = $this->enableAhas;
        }
        if (null !== $this->envFroms) {
            $res['EnvFroms'] = [];
            if (null !== $this->envFroms && \is_array($this->envFroms)) {
                $n = 0;
                foreach ($this->envFroms as $item) {
                    $res['EnvFroms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->envs) {
            $res['Envs'] = [];
            if (null !== $this->envs && \is_array($this->envs)) {
                $n = 0;
                foreach ($this->envs as $item) {
                    $res['Envs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageConfig) {
            $res['ImageConfig'] = null !== $this->imageConfig ? $this->imageConfig->toMap() : null;
        }
        if (null !== $this->isMultilingualApp) {
            $res['IsMultilingualApp'] = $this->isMultilingualApp;
        }
        if (null !== $this->javaStartUpConfig) {
            $res['JavaStartUpConfig'] = $this->javaStartUpConfig;
        }
        if (null !== $this->limitCpu) {
            $res['LimitCpu'] = $this->limitCpu;
        }
        if (null !== $this->limitMem) {
            $res['LimitMem'] = $this->limitMem;
        }
        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }
        if (null !== $this->localVolumes) {
            $res['LocalVolumes'] = [];
            if (null !== $this->localVolumes && \is_array($this->localVolumes)) {
                $n = 0;
                foreach ($this->localVolumes as $item) {
                    $res['LocalVolumes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nasId) {
            $res['NasId'] = $this->nasId;
        }
        if (null !== $this->nasMountDescs) {
            $res['NasMountDescs'] = [];
            if (null !== $this->nasMountDescs && \is_array($this->nasMountDescs)) {
                $n = 0;
                foreach ($this->nasMountDescs as $item) {
                    $res['NasMountDescs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nasStorageType) {
            $res['NasStorageType'] = $this->nasStorageType;
        }
        if (null !== $this->packageConfig) {
            $res['PackageConfig'] = null !== $this->packageConfig ? $this->packageConfig->toMap() : null;
        }
        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }
        if (null !== $this->pvcMountDescs) {
            $res['PvcMountDescs'] = [];
            if (null !== $this->pvcMountDescs && \is_array($this->pvcMountDescs)) {
                $n = 0;
                foreach ($this->pvcMountDescs as $item) {
                    $res['PvcMountDescs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->readiness) {
            $res['Readiness'] = $this->readiness;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->requestCpu) {
            $res['RequestCpu'] = $this->requestCpu;
        }
        if (null !== $this->requestMem) {
            $res['RequestMem'] = $this->requestMem;
        }
        if (null !== $this->runtimeClassName) {
            $res['RuntimeClassName'] = $this->runtimeClassName;
        }
        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = [];
            if (null !== $this->slsConfigs && \is_array($this->slsConfigs)) {
                $n = 0;
                foreach ($this->slsConfigs as $item) {
                    $res['SlsConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->webContainerConfig) {
            $res['WebContainerConfig'] = null !== $this->webContainerConfig ? $this->webContainerConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['CommandArgs'])) {
            if (!empty($map['CommandArgs'])) {
                $model->commandArgs = $map['CommandArgs'];
            }
        }
        if (isset($map['ConfigMountDescs'])) {
            if (!empty($map['ConfigMountDescs'])) {
                $model->configMountDescs = [];
                $n                       = 0;
                foreach ($map['ConfigMountDescs'] as $item) {
                    $model->configMountDescs[$n++] = null !== $item ? configMountDescs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeployAcrossNodes'])) {
            $model->deployAcrossNodes = $map['DeployAcrossNodes'];
        }
        if (isset($map['DeployAcrossZones'])) {
            $model->deployAcrossZones = $map['DeployAcrossZones'];
        }
        if (isset($map['EmptyDirs'])) {
            if (!empty($map['EmptyDirs'])) {
                $model->emptyDirs = [];
                $n                = 0;
                foreach ($map['EmptyDirs'] as $item) {
                    $model->emptyDirs[$n++] = null !== $item ? emptyDirs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnableAhas'])) {
            $model->enableAhas = $map['EnableAhas'];
        }
        if (isset($map['EnvFroms'])) {
            if (!empty($map['EnvFroms'])) {
                $model->envFroms = [];
                $n               = 0;
                foreach ($map['EnvFroms'] as $item) {
                    $model->envFroms[$n++] = null !== $item ? envFroms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Envs'])) {
            if (!empty($map['Envs'])) {
                $model->envs = [];
                $n           = 0;
                foreach ($map['Envs'] as $item) {
                    $model->envs[$n++] = null !== $item ? envs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageConfig'])) {
            $model->imageConfig = imageConfig::fromMap($map['ImageConfig']);
        }
        if (isset($map['IsMultilingualApp'])) {
            $model->isMultilingualApp = $map['IsMultilingualApp'];
        }
        if (isset($map['JavaStartUpConfig'])) {
            $model->javaStartUpConfig = $map['JavaStartUpConfig'];
        }
        if (isset($map['LimitCpu'])) {
            $model->limitCpu = $map['LimitCpu'];
        }
        if (isset($map['LimitMem'])) {
            $model->limitMem = $map['LimitMem'];
        }
        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }
        if (isset($map['LocalVolumes'])) {
            if (!empty($map['LocalVolumes'])) {
                $model->localVolumes = [];
                $n                   = 0;
                foreach ($map['LocalVolumes'] as $item) {
                    $model->localVolumes[$n++] = null !== $item ? localVolumes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NasId'])) {
            $model->nasId = $map['NasId'];
        }
        if (isset($map['NasMountDescs'])) {
            if (!empty($map['NasMountDescs'])) {
                $model->nasMountDescs = [];
                $n                    = 0;
                foreach ($map['NasMountDescs'] as $item) {
                    $model->nasMountDescs[$n++] = null !== $item ? nasMountDescs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NasStorageType'])) {
            $model->nasStorageType = $map['NasStorageType'];
        }
        if (isset($map['PackageConfig'])) {
            $model->packageConfig = packageConfig::fromMap($map['PackageConfig']);
        }
        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }
        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }
        if (isset($map['PvcMountDescs'])) {
            if (!empty($map['PvcMountDescs'])) {
                $model->pvcMountDescs = [];
                $n                    = 0;
                foreach ($map['PvcMountDescs'] as $item) {
                    $model->pvcMountDescs[$n++] = null !== $item ? pvcMountDescs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Readiness'])) {
            $model->readiness = $map['Readiness'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['RequestCpu'])) {
            $model->requestCpu = $map['RequestCpu'];
        }
        if (isset($map['RequestMem'])) {
            $model->requestMem = $map['RequestMem'];
        }
        if (isset($map['RuntimeClassName'])) {
            $model->runtimeClassName = $map['RuntimeClassName'];
        }
        if (isset($map['SlsConfigs'])) {
            if (!empty($map['SlsConfigs'])) {
                $model->slsConfigs = [];
                $n                 = 0;
                foreach ($map['SlsConfigs'] as $item) {
                    $model->slsConfigs[$n++] = null !== $item ? slsConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WebContainerConfig'])) {
            $model->webContainerConfig = webContainerConfig::fromMap($map['WebContainerConfig']);
        }

        return $model;
    }
}
