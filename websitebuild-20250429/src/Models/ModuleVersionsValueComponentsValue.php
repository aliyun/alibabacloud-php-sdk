<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModuleVersionsValueComponentsValue\instanceProperty;

class ModuleVersionsValueComponentsValue extends Model
{
    /**
     * @var string
     */
    public $componentCode;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var instanceProperty[]
     */
    public $instanceProperty;

    /**
     * @var ModuleVersionsValueComponentsValuePropertiesValue[]
     */
    public $properties;

    /**
     * @var int
     */
    public $moduleAttrStatus;
    protected $_name = [
        'componentCode' => 'ComponentCode',
        'componentName' => 'ComponentName',
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
        if (null !== $this->componentCode) {
            $res['ComponentCode'] = $this->componentCode;
        }

        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
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
        if (isset($map['ComponentCode'])) {
            $model->componentCode = $map['ComponentCode'];
        }

        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
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
                    $model->properties[$key1] = ModuleVersionsValueComponentsValuePropertiesValue::fromMap($value1);
                }
            }
        }

        if (isset($map['ModuleAttrStatus'])) {
            $model->moduleAttrStatus = $map['ModuleAttrStatus'];
        }

        return $model;
    }
}
