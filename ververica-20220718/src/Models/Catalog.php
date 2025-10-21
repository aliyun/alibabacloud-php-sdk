<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Catalog extends Model
{
    /**
     * @var string[]
     */
    public $extensionConf;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $properties;
    protected $_name = [
        'extensionConf' => 'extensionConf',
        'name' => 'name',
        'properties' => 'properties',
    ];

    public function validate()
    {
        if (\is_array($this->extensionConf)) {
            Model::validateArray($this->extensionConf);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extensionConf) {
            if (\is_array($this->extensionConf)) {
                $res['extensionConf'] = [];
                foreach ($this->extensionConf as $key1 => $value1) {
                    $res['extensionConf'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['properties'][$key1] = $value1;
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
        if (isset($map['extensionConf'])) {
            if (!empty($map['extensionConf'])) {
                $model->extensionConf = [];
                foreach ($map['extensionConf'] as $key1 => $value1) {
                    $model->extensionConf[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                foreach ($map['properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
