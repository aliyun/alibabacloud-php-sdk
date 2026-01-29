<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationCenterServiceInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationCenterServiceInstancesResponseBody\data\serviceInstances;

class data extends Model
{
    /**
     * @var serviceInstances[]
     */
    public $serviceInstances;
    protected $_name = [
        'serviceInstances' => 'ServiceInstances',
    ];

    public function validate()
    {
        if (\is_array($this->serviceInstances)) {
            Model::validateArray($this->serviceInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceInstances) {
            if (\is_array($this->serviceInstances)) {
                $res['ServiceInstances'] = [];
                $n1 = 0;
                foreach ($this->serviceInstances as $item1) {
                    $res['ServiceInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ServiceInstances'])) {
            if (!empty($map['ServiceInstances'])) {
                $model->serviceInstances = [];
                $n1 = 0;
                foreach ($map['ServiceInstances'] as $item1) {
                    $model->serviceInstances[$n1] = serviceInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
