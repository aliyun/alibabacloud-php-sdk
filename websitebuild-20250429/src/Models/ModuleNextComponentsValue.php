<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModuleNextComponentsValue\instanceProperty;

class ModuleNextComponentsValue extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;

    /**
     * @var instanceProperty[]
     */
    public $instanceProperty;

    /**
     * @var ModuleNextComponentsValuePropertiesValue[]
     */
    public $properties;

    /**
     * @var int
     */
    public $moduleAttrStatus;
    protected $_name = [
        'code' => 'Code',
        'name' => 'Name',
        'instanceProperty' => 'InstanceProperty',
        'properties' => 'Properties',
        'moduleAttrStatus' => 'ModuleAttrStatus',
    ];

    public function validate()
    {
        if (\is_array($this->instanceProperty)) {
            Model::validateArray($this->instanceProperty);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->instanceProperty) {
            if (\is_array($this->instanceProperty)) {
                $res['InstanceProperty'] = [];
                $n1 = 0;
                foreach ($this->instanceProperty as $item1) {
                    $res['InstanceProperty'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->moduleAttrStatus) {
            $res['ModuleAttrStatus'] = $this->moduleAttrStatus;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['InstanceProperty'])) {
            if (!empty($map['InstanceProperty'])) {
                $model->instanceProperty = [];
                $n1 = 0;
                foreach ($map['InstanceProperty'] as $item1) {
                    $model->instanceProperty[$n1] = instanceProperty::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = ModuleNextComponentsValuePropertiesValue::fromMap($value1);
                }
            }
        }

        if (isset($map['ModuleAttrStatus'])) {
            $model->moduleAttrStatus = $map['ModuleAttrStatus'];
        }

        return $model;
    }
}
