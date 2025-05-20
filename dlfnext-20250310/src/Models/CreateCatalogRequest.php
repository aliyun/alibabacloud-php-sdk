<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class CreateCatalogRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $optimizationConfig;

    /**
     * @var string[]
     */
    public $options;
    protected $_name = [
        'name' => 'name',
        'optimizationConfig' => 'optimizationConfig',
        'options' => 'options',
    ];

    public function validate()
    {
        if (\is_array($this->optimizationConfig)) {
            Model::validateArray($this->optimizationConfig);
        }
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->optimizationConfig) {
            if (\is_array($this->optimizationConfig)) {
                $res['optimizationConfig'] = [];
                foreach ($this->optimizationConfig as $key1 => $value1) {
                    $res['optimizationConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['options'][$key1] = $value1;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['optimizationConfig'])) {
            if (!empty($map['optimizationConfig'])) {
                $model->optimizationConfig = [];
                foreach ($map['optimizationConfig'] as $key1 => $value1) {
                    $model->optimizationConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                foreach ($map['options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
