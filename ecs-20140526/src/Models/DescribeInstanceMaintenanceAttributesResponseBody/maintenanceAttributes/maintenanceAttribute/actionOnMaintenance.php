<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\actionOnMaintenance\supportedValues;
use AlibabaCloud\Tea\Model;

class actionOnMaintenance extends Model
{
    /**
     * @description The default maintenance action.
     *
     * @example AutoRecover
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The supported maintenance actions.
     *
     * @var supportedValues
     */
    public $supportedValues;

    /**
     * @description The current maintenance action. Valid values:
     *
     *   Stop: stops the instance.
     *   AutoRecover: automatically recovers the instance.
     *   AutoRedeploy: redeploys the instance, which may damage the data disks attached to the instance.
     *
     * @example Stop
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'defaultValue'    => 'DefaultValue',
        'supportedValues' => 'SupportedValues',
        'value'           => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->supportedValues) {
            $res['SupportedValues'] = null !== $this->supportedValues ? $this->supportedValues->toMap() : null;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
