<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class GenerateAlgorithmCustomizationScriptRequest extends Model
{
    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var mixed[]
     */
    public $moduleFieldTypes;
    protected $_name = [
        'deployMode' => 'DeployMode',
        'instanceId' => 'InstanceId',
        'moduleFieldTypes' => 'ModuleFieldTypes',
    ];

    public function validate()
    {
        if (\is_array($this->moduleFieldTypes)) {
            Model::validateArray($this->moduleFieldTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->moduleFieldTypes) {
            if (\is_array($this->moduleFieldTypes)) {
                $res['ModuleFieldTypes'] = [];
                foreach ($this->moduleFieldTypes as $key1 => $value1) {
                    $res['ModuleFieldTypes'][$key1] = $value1;
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
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ModuleFieldTypes'])) {
            if (!empty($map['ModuleFieldTypes'])) {
                $model->moduleFieldTypes = [];
                foreach ($map['ModuleFieldTypes'] as $key1 => $value1) {
                    $model->moduleFieldTypes[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
