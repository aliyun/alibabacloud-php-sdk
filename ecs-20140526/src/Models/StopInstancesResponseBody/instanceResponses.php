<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstancesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstancesResponseBody\instanceResponses\instanceResponse;
use AlibabaCloud\Tea\Model;

class instanceResponses extends Model
{
    /**
     * @var instanceResponse[]
     */
    public $instanceResponse;
    protected $_name = [
        'instanceResponse' => 'InstanceResponse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceResponse) {
            $res['InstanceResponse'] = [];
            if (null !== $this->instanceResponse && \is_array($this->instanceResponse)) {
                $n = 0;
                foreach ($this->instanceResponse as $item) {
                    $res['InstanceResponse'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceResponses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceResponse'])) {
            if (!empty($map['InstanceResponse'])) {
                $model->instanceResponse = [];
                $n                       = 0;
                foreach ($map['InstanceResponse'] as $item) {
                    $model->instanceResponse[$n++] = null !== $item ? instanceResponse::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
