<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateImageBuildRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateImageBuildRequest\buildConfig\dataSources;

class buildConfig extends Model
{
    /**
     * @var string
     */
    public $buildType;

    /**
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $dockerfile;

    /**
     * @var string
     */
    public $dockerfilePath;

    /**
     * @var mixed[]
     */
    public $registryAuths;
    protected $_name = [
        'buildType' => 'BuildType',
        'dataSources' => 'DataSources',
        'dockerfile' => 'Dockerfile',
        'dockerfilePath' => 'DockerfilePath',
        'registryAuths' => 'RegistryAuths',
    ];

    public function validate()
    {
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        if (\is_array($this->registryAuths)) {
            Model::validateArray($this->registryAuths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildType) {
            $res['BuildType'] = $this->buildType;
        }

        if (null !== $this->dataSources) {
            if (\is_array($this->dataSources)) {
                $res['DataSources'] = [];
                $n1 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['DataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dockerfile) {
            $res['Dockerfile'] = $this->dockerfile;
        }

        if (null !== $this->dockerfilePath) {
            $res['DockerfilePath'] = $this->dockerfilePath;
        }

        if (null !== $this->registryAuths) {
            if (\is_array($this->registryAuths)) {
                $res['RegistryAuths'] = [];
                foreach ($this->registryAuths as $key1 => $value1) {
                    $res['RegistryAuths'][$key1] = $value1;
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
        if (isset($map['BuildType'])) {
            $model->buildType = $map['BuildType'];
        }

        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n1 = 0;
                foreach ($map['DataSources'] as $item1) {
                    $model->dataSources[$n1] = dataSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Dockerfile'])) {
            $model->dockerfile = $map['Dockerfile'];
        }

        if (isset($map['DockerfilePath'])) {
            $model->dockerfilePath = $map['DockerfilePath'];
        }

        if (isset($map['RegistryAuths'])) {
            if (!empty($map['RegistryAuths'])) {
                $model->registryAuths = [];
                foreach ($map['RegistryAuths'] as $key1 => $value1) {
                    $model->registryAuths[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
