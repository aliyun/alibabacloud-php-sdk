<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRoutesResponseBody\managementRoutes;
use AlibabaCloud\Tea\Model;

class DescribeIstioGatewayRoutesResponseBody extends Model
{
    /**
     * @description The name of the routing rule.
     *
     * @var managementRoutes[]
     */
    public $managementRoutes;

    /**
     * @example 31d3a0f0-07ed-4f6e-9004-1804498c****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'managementRoutes' => 'ManagementRoutes',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->managementRoutes) {
            $res['ManagementRoutes'] = [];
            if (null !== $this->managementRoutes && \is_array($this->managementRoutes)) {
                $n = 0;
                foreach ($this->managementRoutes as $item) {
                    $res['ManagementRoutes'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeIstioGatewayRoutesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManagementRoutes'])) {
            if (!empty($map['ManagementRoutes'])) {
                $model->managementRoutes = [];
                $n                       = 0;
                foreach ($map['ManagementRoutes'] as $item) {
                    $model->managementRoutes[$n++] = null !== $item ? managementRoutes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
