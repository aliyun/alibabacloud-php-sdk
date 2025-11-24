<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRoutesResponseBody\managementRoutes;

class DescribeIstioGatewayRoutesResponseBody extends Model
{
    /**
     * @var managementRoutes[]
     */
    public $managementRoutes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'managementRoutes' => 'ManagementRoutes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->managementRoutes)) {
            Model::validateArray($this->managementRoutes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->managementRoutes) {
            if (\is_array($this->managementRoutes)) {
                $res['ManagementRoutes'] = [];
                $n1 = 0;
                foreach ($this->managementRoutes as $item1) {
                    $res['ManagementRoutes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ManagementRoutes'])) {
            if (!empty($map['ManagementRoutes'])) {
                $model->managementRoutes = [];
                $n1 = 0;
                foreach ($map['ManagementRoutes'] as $item1) {
                    $model->managementRoutes[$n1] = managementRoutes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
