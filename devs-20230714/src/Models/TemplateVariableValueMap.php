<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class TemplateVariableValueMap extends Model
{
    /**
     * @var mixed[][]
     */
    public $services;

    /**
     * @var mixed[]
     */
    public $shared;
    protected $_name = [
        'services' => 'services',
        'shared' => 'shared',
    ];

    public function validate()
    {
        if (\is_array($this->services)) {
            Model::validateArray($this->services);
        }
        if (\is_array($this->shared)) {
            Model::validateArray($this->shared);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->services) {
            if (\is_array($this->services)) {
                $res['services'] = [];
                foreach ($this->services as $key1 => $value1) {
                    $res['services'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->shared) {
            if (\is_array($this->shared)) {
                $res['shared'] = [];
                foreach ($this->shared as $key1 => $value1) {
                    $res['shared'][$key1] = $value1;
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
        if (isset($map['services'])) {
            if (!empty($map['services'])) {
                $model->services = [];
                foreach ($map['services'] as $key1 => $value1) {
                    $model->services[$key1] = $value1;
                }
            }
        }

        if (isset($map['shared'])) {
            if (!empty($map['shared'])) {
                $model->shared = [];
                foreach ($map['shared'] as $key1 => $value1) {
                    $model->shared[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
