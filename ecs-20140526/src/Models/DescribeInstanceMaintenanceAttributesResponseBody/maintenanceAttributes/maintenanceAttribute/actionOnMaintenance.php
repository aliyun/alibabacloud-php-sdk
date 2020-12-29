<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\actionOnMaintenance\supportedValues;
use AlibabaCloud\Tea\Model;

class actionOnMaintenance extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var supportedValues
     */
    public $supportedValues;

    /**
     * @var string
     */
    public $defaultValue;
    protected $_name = [
        'value'           => 'Value',
        'supportedValues' => 'SupportedValues',
        'defaultValue'    => 'DefaultValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->supportedValues) {
            $res['SupportedValues'] = null !== $this->supportedValues ? $this->supportedValues->toMap() : null;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actionOnMaintenance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['SupportedValues'])) {
            $model->supportedValues = supportedValues::fromMap($map['SupportedValues']);
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        return $model;
    }
}
