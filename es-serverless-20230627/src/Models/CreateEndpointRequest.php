<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateEndpointRequest\endpointZones;
use AlibabaCloud\Tea\Model;

class CreateEndpointRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var endpointZones[]
     */
    public $endpointZones;

    /**
     * @example testendpoint
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example vpc-uf664nyle5khp5***
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example VPC
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endpointZones' => 'endpointZones',
        'name'          => 'name',
        'vpcId'         => 'vpcId',
        'type'          => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointZones) {
            $res['endpointZones'] = [];
            if (null !== $this->endpointZones && \is_array($this->endpointZones)) {
                $n = 0;
                foreach ($this->endpointZones as $item) {
                    $res['endpointZones'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CreateEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endpointZones'])) {
            if (!empty($map['endpointZones'])) {
                $model->endpointZones = [];
                $n                    = 0;
                foreach ($map['endpointZones'] as $item) {
                    $model->endpointZones[$n++] = null !== $item ? endpointZones::fromMap($item) : $item;
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
