<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\actionOnMaintenance\supportedValues;

class actionOnMaintenance extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var supportedValues
     */
    public $supportedValues;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'supportedValues' => 'SupportedValues',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (null !== $this->supportedValues) {
            $this->supportedValues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->supportedValues) {
            $res['SupportedValues'] = null !== $this->supportedValues ? $this->supportedValues->toArray($noStream) : $this->supportedValues;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['SupportedValues'])) {
            $model->supportedValues = supportedValues::fromMap($map['SupportedValues']);
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
