<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateImageBuildRequest;

use AlibabaCloud\Dara\Model;

class buildConfig extends Model
{
    /**
     * @var string
     */
    public $buildType;

    /**
     * @var string
     */
    public $dockerfile;

    /**
     * @var mixed[]
     */
    public $registryAuths;
    protected $_name = [
        'buildType' => 'BuildType',
        'dockerfile' => 'Dockerfile',
        'registryAuths' => 'RegistryAuths',
    ];

    public function validate()
    {
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

        if (null !== $this->dockerfile) {
            $res['Dockerfile'] = $this->dockerfile;
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

        if (isset($map['Dockerfile'])) {
            $model->dockerfile = $map['Dockerfile'];
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
