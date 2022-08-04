<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo\endpoints;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo\vpcInfo;
use AlibabaCloud\Tea\Model;

class networkInfo extends Model
{
    /**
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @var vpcInfo
     */
    public $vpcInfo;
    protected $_name = [
        'endpoints' => 'endpoints',
        'vpcInfo'   => 'vpcInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoints) {
            $res['endpoints'] = [];
            if (null !== $this->endpoints && \is_array($this->endpoints)) {
                $n = 0;
                foreach ($this->endpoints as $item) {
                    $res['endpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcInfo) {
            $res['vpcInfo'] = null !== $this->vpcInfo ? $this->vpcInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endpoints'])) {
            if (!empty($map['endpoints'])) {
                $model->endpoints = [];
                $n                = 0;
                foreach ($map['endpoints'] as $item) {
                    $model->endpoints[$n++] = null !== $item ? endpoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['vpcInfo'])) {
            $model->vpcInfo = vpcInfo::fromMap($map['vpcInfo']);
        }

        return $model;
    }
}
