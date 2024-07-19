<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateEndpointRequest\endpointZones;
use AlibabaCloud\Tea\Model;

class UpdateEndpointRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var endpointZones[]
     */
    public $endpointZones;

    /**
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'endpointZones' => 'endpointZones',
        'name'          => 'name',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEndpointRequest
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

        return $model;
    }
}
