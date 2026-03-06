<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppCommoditySpecificationsV2ForPartnerResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModuleDataComponentsValue;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModuleDataPropertiesValue;

class data extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var ModuleDataComponentsValue[]
     */
    public $components;

    /**
     * @var string
     */
    public $name;

    /**
     * @var ModuleDataPropertiesValue[]
     */
    public $properties;
    protected $_name = [
        'code' => 'Code',
        'components' => 'Components',
        'name' => 'Name',
        'properties' => 'Properties',
    ];

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
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

        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['Components'] = [];
                foreach ($this->components as $key1 => $value1) {
                    $res['Components'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                foreach ($map['Components'] as $key1 => $value1) {
                    $model->components[$key1] = ModuleDataComponentsValue::fromMap($value1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = ModuleDataPropertiesValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
