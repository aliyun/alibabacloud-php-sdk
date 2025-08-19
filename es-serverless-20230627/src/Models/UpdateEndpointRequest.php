<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateEndpointRequest\endpointZones;

class UpdateEndpointRequest extends Model
{
    /**
     * @var endpointZones[]
     */
    public $endpointZones;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'endpointZones' => 'endpointZones',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->endpointZones)) {
            Model::validateArray($this->endpointZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointZones) {
            if (\is_array($this->endpointZones)) {
                $res['endpointZones'] = [];
                $n1 = 0;
                foreach ($this->endpointZones as $item1) {
                    $res['endpointZones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['endpointZones'])) {
            if (!empty($map['endpointZones'])) {
                $model->endpointZones = [];
                $n1 = 0;
                foreach ($map['endpointZones'] as $item1) {
                    $model->endpointZones[$n1] = endpointZones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
