<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute;

class maintenanceAttributes extends Model
{
    /**
     * @var maintenanceAttribute[]
     */
    public $maintenanceAttribute;
    protected $_name = [
        'maintenanceAttribute' => 'MaintenanceAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->maintenanceAttribute)) {
            Model::validateArray($this->maintenanceAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maintenanceAttribute) {
            if (\is_array($this->maintenanceAttribute)) {
                $res['MaintenanceAttribute'] = [];
                $n1                          = 0;
                foreach ($this->maintenanceAttribute as $item1) {
                    $res['MaintenanceAttribute'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MaintenanceAttribute'])) {
            if (!empty($map['MaintenanceAttribute'])) {
                $model->maintenanceAttribute = [];
                $n1                          = 0;
                foreach ($map['MaintenanceAttribute'] as $item1) {
                    $model->maintenanceAttribute[$n1++] = maintenanceAttribute::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
