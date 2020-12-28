<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes;

use AlibabaCloud\Tea\Model;

class actionOnMaintenance extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string[]
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
            $res['SupportedValues'] = $this->supportedValues;
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
            if (!empty($map['SupportedValues'])) {
                $model->supportedValues = $map['SupportedValues'];
            }
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        return $model;
    }
}
