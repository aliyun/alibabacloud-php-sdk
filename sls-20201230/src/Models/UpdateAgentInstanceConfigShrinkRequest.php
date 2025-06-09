<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class UpdateAgentInstanceConfigShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attributesShrink;

    /**
     * @var string
     */
    public $config;

    /**
     * @var AgentInstanceConfigGrayConfigs[]
     */
    public $grayConfigs;
    protected $_name = [
        'attributesShrink' => 'attributes',
        'config' => 'config',
        'grayConfigs' => 'grayConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->grayConfigs)) {
            Model::validateArray($this->grayConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributesShrink) {
            $res['attributes'] = $this->attributesShrink;
        }

        if (null !== $this->config) {
            $res['config'] = $this->config;
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
            $model->attributesShrink = $map['attributes'];
        }

        if (isset($map['config'])) {
            $model->config = $map['config'];
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
