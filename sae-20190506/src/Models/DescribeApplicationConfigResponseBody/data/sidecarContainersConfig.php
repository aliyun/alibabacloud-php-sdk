<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\sidecarContainersConfig\configMapMountDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\sidecarContainersConfig\emptyDirDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\sidecarContainersConfig\secretMountDesc;

class sidecarContainersConfig extends Model
{
    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $commandArgs;

    /**
     * @var configMapMountDesc[]
     */
    public $configMapMountDesc;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var emptyDirDesc[]
     */
    public $emptyDirDesc;

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
    public $liveness;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $readiness;

    /**
     * @var secretMountDesc[]
     */
    public $secretMountDesc;
    protected $_name = [
        'acrInstanceId' => 'AcrInstanceId',
        'command' => 'Command',
        'commandArgs' => 'CommandArgs',
        'configMapMountDesc' => 'ConfigMapMountDesc',
        'cpu' => 'Cpu',
        'emptyDirDesc' => 'EmptyDirDesc',
        'envs' => 'Envs',
        'imageUrl' => 'ImageUrl',
        'liveness' => 'Liveness',
        'memory' => 'Memory',
        'name' => 'Name',
        'readiness' => 'Readiness',
        'secretMountDesc' => 'SecretMountDesc',
    ];

    public function validate()
    {
        if (\is_array($this->configMapMountDesc)) {
            Model::validateArray($this->configMapMountDesc);
        }
        if (\is_array($this->emptyDirDesc)) {
            Model::validateArray($this->emptyDirDesc);
        }
        if (\is_array($this->secretMountDesc)) {
            Model::validateArray($this->secretMountDesc);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrInstanceId) {
            $res['AcrInstanceId'] = $this->acrInstanceId;
        }

        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
        }

        if (null !== $this->configMapMountDesc) {
            if (\is_array($this->configMapMountDesc)) {
                $res['ConfigMapMountDesc'] = [];
                $n1 = 0;
                foreach ($this->configMapMountDesc as $item1) {
                    $res['ConfigMapMountDesc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->emptyDirDesc) {
            if (\is_array($this->emptyDirDesc)) {
                $res['EmptyDirDesc'] = [];
                $n1 = 0;
                foreach ($this->emptyDirDesc as $item1) {
                    $res['EmptyDirDesc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->readiness) {
            $res['Readiness'] = $this->readiness;
        }

        if (null !== $this->secretMountDesc) {
            if (\is_array($this->secretMountDesc)) {
                $res['SecretMountDesc'] = [];
                $n1 = 0;
                foreach ($this->secretMountDesc as $item1) {
                    $res['SecretMountDesc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AcrInstanceId'])) {
            $model->acrInstanceId = $map['AcrInstanceId'];
        }

        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['CommandArgs'])) {
            $model->commandArgs = $map['CommandArgs'];
        }

        if (isset($map['ConfigMapMountDesc'])) {
            if (!empty($map['ConfigMapMountDesc'])) {
                $model->configMapMountDesc = [];
                $n1 = 0;
                foreach ($map['ConfigMapMountDesc'] as $item1) {
                    $model->configMapMountDesc[$n1] = configMapMountDesc::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['EmptyDirDesc'])) {
            if (!empty($map['EmptyDirDesc'])) {
                $model->emptyDirDesc = [];
                $n1 = 0;
                foreach ($map['EmptyDirDesc'] as $item1) {
                    $model->emptyDirDesc[$n1] = emptyDirDesc::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Readiness'])) {
            $model->readiness = $map['Readiness'];
        }

        if (isset($map['SecretMountDesc'])) {
            if (!empty($map['SecretMountDesc'])) {
                $model->secretMountDesc = [];
                $n1 = 0;
                foreach ($map['SecretMountDesc'] as $item1) {
                    $model->secretMountDesc[$n1] = secretMountDesc::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
