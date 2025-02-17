<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\actionOnMaintenance;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->supportedValue)) {
            Model::validateArray($this->supportedValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedValue) {
            if (\is_array($this->supportedValue)) {
                $res['SupportedValue'] = [];
                $n1                    = 0;
                foreach ($this->supportedValue as $item1) {
                    $res['SupportedValue'][$n1++] = $item1;
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
        if (isset($map['SupportedValue'])) {
            if (!empty($map['SupportedValue'])) {
                $model->supportedValue = [];
                $n1                    = 0;
                foreach ($map['SupportedValue'] as $item1) {
                    $model->supportedValue[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
