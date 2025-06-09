<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentInstanceConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var AgentInstanceConfigGrayConfigs[]
     */
    public $grayConfigs;
    protected $_name = [
        'attributes' => 'attributes',
        'config' => 'config',
        'configType' => 'configType',
        'grayConfigs' => 'grayConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        if (\is_array($this->grayConfigs)) {
            Model::validateArray($this->grayConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['attributes'] = [];
                foreach ($this->attributes as $key1 => $value1) {
                    $res['attributes'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        if (null !== $this->grayConfigs) {
            if (\is_array($this->grayConfigs)) {
                $res['grayConfigs'] = [];
                $n1 = 0;
                foreach ($this->grayConfigs as $item1) {
                    $res['grayConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['attributes'])) {
            if (!empty($map['attributes'])) {
                $model->attributes = [];
                foreach ($map['attributes'] as $key1 => $value1) {
                    $model->attributes[$key1] = $value1;
                }
            }
        }

        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        if (isset($map['grayConfigs'])) {
            if (!empty($map['grayConfigs'])) {
                $model->grayConfigs = [];
                $n1 = 0;
                foreach ($map['grayConfigs'] as $item1) {
                    $model->grayConfigs[$n1++] = AgentInstanceConfigGrayConfigs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
