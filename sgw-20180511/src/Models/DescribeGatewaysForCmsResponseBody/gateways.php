<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysForCmsResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysForCmsResponseBody\gateways\gateway;
use AlibabaCloud\Tea\Model;

class gateways extends Model
{
    /**
     * @var gateway[]
     */
    public $gateway;
    protected $_name = [
        'gateway' => 'Gateway',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gateway) {
            $res['Gateway'] = [];
            if (null !== $this->gateway && \is_array($this->gateway)) {
                $n = 0;
                foreach ($this->gateway as $item) {
                    $res['Gateway'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gateways
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Gateway'])) {
            if (!empty($map['Gateway'])) {
                $model->gateway = [];
                $n              = 0;
                foreach ($map['Gateway'] as $item) {
                    $model->gateway[$n++] = null !== $item ? gateway::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
