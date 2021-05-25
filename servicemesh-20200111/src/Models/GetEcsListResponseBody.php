<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetEcsListResponseBody\ecsInstances;
use AlibabaCloud\Tea\Model;

class GetEcsListResponseBody extends Model
{
    /**
     * @var ecsInstances[]
     */
    public $ecsInstances;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ecsInstances' => 'EcsInstances',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsInstances) {
            $res['EcsInstances'] = [];
            if (null !== $this->ecsInstances && \is_array($this->ecsInstances)) {
                $n = 0;
                foreach ($this->ecsInstances as $item) {
                    $res['EcsInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEcsListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsInstances'])) {
            if (!empty($map['EcsInstances'])) {
                $model->ecsInstances = [];
                $n                   = 0;
                foreach ($map['EcsInstances'] as $item) {
                    $model->ecsInstances[$n++] = null !== $item ? ecsInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
