<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\actionOnMaintenance;

use AlibabaCloud\Tea\Model;

class supportedValues extends Model
{
    /**
     * @var string[]
     */
    public $supportedValue;
    protected $_name = [
        'supportedValue' => 'SupportedValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedValue) {
            $res['SupportedValue'] = $this->supportedValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedValue'])) {
            if (!empty($map['SupportedValue'])) {
                $model->supportedValue = $map['SupportedValue'];
            }
        }

        return $model;
    }
}
