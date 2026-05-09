<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceEndpointResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceEndpointResponseBody\data\items\endpoint;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceEndpointResponseBody\data\items\realServer;

class items extends Model
{
    /**
     * @var endpoint
     */
    public $endpoint;

    /**
     * @var realServer[]
     */
    public $realServer;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'realServer' => 'RealServer',
    ];

    public function validate()
    {
        if (null !== $this->endpoint) {
            $this->endpoint->validate();
        }
        if (\is_array($this->realServer)) {
            Model::validateArray($this->realServer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = null !== $this->endpoint ? $this->endpoint->toArray($noStream) : $this->endpoint;
        }

        if (null !== $this->realServer) {
            if (\is_array($this->realServer)) {
                $res['RealServer'] = [];
                $n1 = 0;
                foreach ($this->realServer as $item1) {
                    $res['RealServer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = endpoint::fromMap($map['Endpoint']);
        }

        if (isset($map['RealServer'])) {
            if (!empty($map['RealServer'])) {
                $model->realServer = [];
                $n1 = 0;
                foreach ($map['RealServer'] as $item1) {
                    $model->realServer[$n1] = realServer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
