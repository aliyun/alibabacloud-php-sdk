<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateEndpointRequest\endpointZones;

class CreateEndpointRequest extends Model
{
    /**
     * @var endpointZones[]
     */
    public $endpointZones;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'endpointZones' => 'endpointZones',
        'name' => 'name',
        'vpcId' => 'vpcId',
        'type' => 'type',
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
                    $res['endpointZones'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
                    $model->endpointZones[$n1++] = endpointZones::fromMap($item1);
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
