<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;
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

class AppConfig extends Model
{
    /**
     * @var string
     */
    public $command;

    /**
     * @var string[]
     */
    public $commandArgs;

    /**
     * @var configMountDescs[]
     */
    public $configMountDescs;

    /**
     * @var bool
     */
    public $deployAcrossNodes;

    /**
     * @var bool
     */
    public $deployAcrossZones;

    /**
     * @var emptyDirs[]
     */
    public $emptyDirs;

    /**
     * @var bool
     */
    public $enableAhas;

    /**
     * @var envFroms[]
     */
    public $envFroms;

    /**
     * @var envs[]
     */
    public $envs;

    /**
     * @var imageConfig
     */
    public $imageConfig;

    /**
     * @var bool
     */
    public $isMultilingualApp;

    /**
     * @var string
     */
    public $javaStartUpConfig;

    /**
     * @var string
     */
    public $limitCpu;

    /**
     * @var string
     */
    public $limitMem;

    /**
     * @var string
     */
    public $liveness;

    /**
     * @var localVolumes[]
     */
    public $localVolumes;

    /**
     * @var string
     */
    public $nasId;

    /**
     * @var nasMountDescs[]
     */
    public $nasMountDescs;

    /**
     * @var string
     */
    public $nasStorageType;

    /**
     * @var packageConfig
     */
    public $packageConfig;

    /**
     * @var string
     */
    public $postStart;

    /**
     * @var string
     */
    public $preStop;

    /**
     * @var pvcMountDescs[]
     */
    public $pvcMountDescs;

    /**
     * @var string
     */
    public $readiness;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var string
     */
    public $requestCpu;

    /**
     * @var string
     */
    public $requestMem;

    /**
     * @var string
     */
    public $runtimeClassName;

    /**
     * @var slsConfigs[]
     */
    public $slsConfigs;

    /**
     * @var webContainerConfig
     */
    public $webContainerConfig;
    protected $_name = [
        'command' => 'Command',
        'commandArgs' => 'CommandArgs',
        'configMountDescs' => 'ConfigMountDescs',
        'deployAcrossNodes' => 'DeployAcrossNodes',
        'deployAcrossZones' => 'DeployAcrossZones',
        'emptyDirs' => 'EmptyDirs',
        'enableAhas' => 'EnableAhas',
        'envFroms' => 'EnvFroms',
        'envs' => 'Envs',
        'imageConfig' => 'ImageConfig',
        'isMultilingualApp' => 'IsMultilingualApp',
        'javaStartUpConfig' => 'JavaStartUpConfig',
        'limitCpu' => 'LimitCpu',
        'limitMem' => 'LimitMem',
        'liveness' => 'Liveness',
        'localVolumes' => 'LocalVolumes',
        'nasId' => 'NasId',
        'nasMountDescs' => 'NasMountDescs',
        'nasStorageType' => 'NasStorageType',
        'packageConfig' => 'PackageConfig',
        'postStart' => 'PostStart',
        'preStop' => 'PreStop',
        'pvcMountDescs' => 'PvcMountDescs',
        'readiness' => 'Readiness',
        'replicas' => 'Replicas',
        'requestCpu' => 'RequestCpu',
        'requestMem' => 'RequestMem',
        'runtimeClassName' => 'RuntimeClassName',
        'slsConfigs' => 'SlsConfigs',
        'webContainerConfig' => 'WebContainerConfig',
    ];

    public function validate()
    {
        if (\is_array($this->commandArgs)) {
            Model::validateArray($this->commandArgs);
        }
        if (\is_array($this->configMountDescs)) {
            Model::validateArray($this->configMountDescs);
        }
        if (\is_array($this->emptyDirs)) {
            Model::validateArray($this->emptyDirs);
        }
        if (\is_array($this->envFroms)) {
            Model::validateArray($this->envFroms);
        }
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        if (null !== $this->imageConfig) {
            $this->imageConfig->validate();
        }
        if (\is_array($this->localVolumes)) {
            Model::validateArray($this->localVolumes);
        }
        if (\is_array($this->nasMountDescs)) {
            Model::validateArray($this->nasMountDescs);
        }
        if (null !== $this->packageConfig) {
            $this->packageConfig->validate();
        }
        if (\is_array($this->pvcMountDescs)) {
            Model::validateArray($this->pvcMountDescs);
        }
        if (\is_array($this->slsConfigs)) {
            Model::validateArray($this->slsConfigs);
        }
        if (null !== $this->webContainerConfig) {
            $this->webContainerConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->commandArgs) {
            if (\is_array($this->commandArgs)) {
                $res['CommandArgs'] = [];
                $n1 = 0;
                foreach ($this->commandArgs as $item1) {
                    $res['CommandArgs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->configMountDescs) {
            if (\is_array($this->configMountDescs)) {
                $res['ConfigMountDescs'] = [];
                $n1 = 0;
                foreach ($this->configMountDescs as $item1) {
                    $res['ConfigMountDescs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->emptyDirs)) {
                $res['EmptyDirs'] = [];
                $n1 = 0;
                foreach ($this->emptyDirs as $item1) {
                    $res['EmptyDirs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableAhas) {
            $res['EnableAhas'] = $this->enableAhas;
        }

        if (null !== $this->envFroms) {
            if (\is_array($this->envFroms)) {
                $res['EnvFroms'] = [];
                $n1 = 0;
                foreach ($this->envFroms as $item1) {
                    $res['EnvFroms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['Envs'] = [];
                $n1 = 0;
                foreach ($this->envs as $item1) {
                    $res['Envs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageConfig) {
            $res['ImageConfig'] = null !== $this->imageConfig ? $this->imageConfig->toArray($noStream) : $this->imageConfig;
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
            if (\is_array($this->localVolumes)) {
                $res['LocalVolumes'] = [];
                $n1 = 0;
                foreach ($this->localVolumes as $item1) {
                    $res['LocalVolumes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nasId) {
            $res['NasId'] = $this->nasId;
        }

        if (null !== $this->nasMountDescs) {
            if (\is_array($this->nasMountDescs)) {
                $res['NasMountDescs'] = [];
                $n1 = 0;
                foreach ($this->nasMountDescs as $item1) {
                    $res['NasMountDescs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nasStorageType) {
            $res['NasStorageType'] = $this->nasStorageType;
        }

        if (null !== $this->packageConfig) {
            $res['PackageConfig'] = null !== $this->packageConfig ? $this->packageConfig->toArray($noStream) : $this->packageConfig;
        }

        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }

        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }

        if (null !== $this->pvcMountDescs) {
            if (\is_array($this->pvcMountDescs)) {
                $res['PvcMountDescs'] = [];
                $n1 = 0;
                foreach ($this->pvcMountDescs as $item1) {
                    $res['PvcMountDescs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->slsConfigs)) {
                $res['SlsConfigs'] = [];
                $n1 = 0;
                foreach ($this->slsConfigs as $item1) {
                    $res['SlsConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->webContainerConfig) {
            $res['WebContainerConfig'] = null !== $this->webContainerConfig ? $this->webContainerConfig->toArray($noStream) : $this->webContainerConfig;
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
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['CommandArgs'])) {
            if (!empty($map['CommandArgs'])) {
                $model->commandArgs = [];
                $n1 = 0;
                foreach ($map['CommandArgs'] as $item1) {
                    $model->commandArgs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ConfigMountDescs'])) {
            if (!empty($map['ConfigMountDescs'])) {
                $model->configMountDescs = [];
                $n1 = 0;
                foreach ($map['ConfigMountDescs'] as $item1) {
                    $model->configMountDescs[$n1] = configMountDescs::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['EmptyDirs'] as $item1) {
                    $model->emptyDirs[$n1] = emptyDirs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableAhas'])) {
            $model->enableAhas = $map['EnableAhas'];
        }

        if (isset($map['EnvFroms'])) {
            if (!empty($map['EnvFroms'])) {
                $model->envFroms = [];
                $n1 = 0;
                foreach ($map['EnvFroms'] as $item1) {
                    $model->envFroms[$n1] = envFroms::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Envs'])) {
            if (!empty($map['Envs'])) {
                $model->envs = [];
                $n1 = 0;
                foreach ($map['Envs'] as $item1) {
                    $model->envs[$n1] = envs::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['LocalVolumes'] as $item1) {
                    $model->localVolumes[$n1] = localVolumes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NasId'])) {
            $model->nasId = $map['NasId'];
        }

        if (isset($map['NasMountDescs'])) {
            if (!empty($map['NasMountDescs'])) {
                $model->nasMountDescs = [];
                $n1 = 0;
                foreach ($map['NasMountDescs'] as $item1) {
                    $model->nasMountDescs[$n1] = nasMountDescs::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['PvcMountDescs'] as $item1) {
                    $model->pvcMountDescs[$n1] = pvcMountDescs::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['SlsConfigs'] as $item1) {
                    $model->slsConfigs[$n1] = slsConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WebContainerConfig'])) {
            $model->webContainerConfig = webContainerConfig::fromMap($map['WebContainerConfig']);
        }

        return $model;
    }
}
