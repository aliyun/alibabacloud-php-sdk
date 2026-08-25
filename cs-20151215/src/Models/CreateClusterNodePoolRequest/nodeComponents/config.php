<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\nodeComponents;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\nodeComponents\config\envs;

class config extends Model
{
    /**
     * @var mixed[]
     */
    public $customConfig;

    /**
     * @var envs[]
     */
    public $envs;
    protected $_name = [
        'customConfig' => 'custom_config',
        'envs' => 'envs',
    ];

    public function validate()
    {
        if (\is_array($this->customConfig)) {
            Model::validateArray($this->customConfig);
        }
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customConfig) {
            if (\is_array($this->customConfig)) {
                $res['custom_config'] = [];
                foreach ($this->customConfig as $key1 => $value1) {
                    $res['custom_config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['envs'] = [];
                $n1 = 0;
                foreach ($this->envs as $item1) {
                    $res['envs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['custom_config'])) {
            if (!empty($map['custom_config'])) {
                $model->customConfig = [];
                foreach ($map['custom_config'] as $key1 => $value1) {
                    $model->customConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['envs'])) {
            if (!empty($map['envs'])) {
                $model->envs = [];
                $n1 = 0;
                foreach ($map['envs'] as $item1) {
                    $model->envs[$n1] = envs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
