<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\initContainersConfig\configMapMountDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\initContainersConfig\emptyDirDesc;

class initContainersConfig extends Model
{
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
    public $name;
    protected $_name = [
        'command' => 'Command',
        'commandArgs' => 'CommandArgs',
        'configMapMountDesc' => 'ConfigMapMountDesc',
        'emptyDirDesc' => 'EmptyDirDesc',
        'envs' => 'Envs',
        'imageUrl' => 'ImageUrl',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->configMapMountDesc)) {
            Model::validateArray($this->configMapMountDesc);
        }
        if (\is_array($this->emptyDirDesc)) {
            Model::validateArray($this->emptyDirDesc);
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
