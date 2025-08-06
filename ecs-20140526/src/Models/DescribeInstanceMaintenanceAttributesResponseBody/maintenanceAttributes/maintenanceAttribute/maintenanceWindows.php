<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\maintenanceWindows\maintenanceWindow;

class maintenanceWindows extends Model
{
    /**
     * @var maintenanceWindow[]
     */
    public $maintenanceWindow;
    protected $_name = [
        'maintenanceWindow' => 'MaintenanceWindow',
    ];

    public function validate()
    {
        if (\is_array($this->maintenanceWindow)) {
            Model::validateArray($this->maintenanceWindow);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maintenanceWindow) {
            if (\is_array($this->maintenanceWindow)) {
                $res['MaintenanceWindow'] = [];
                $n1 = 0;
                foreach ($this->maintenanceWindow as $item1) {
                    $res['MaintenanceWindow'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['MaintenanceWindow'])) {
            if (!empty($map['MaintenanceWindow'])) {
                $model->maintenanceWindow = [];
                $n1 = 0;
                foreach ($map['MaintenanceWindow'] as $item1) {
                    $model->maintenanceWindow[$n1] = maintenanceWindow::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
