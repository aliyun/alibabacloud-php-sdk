<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeEndpointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeEndpointsResponseBody\data\endpoints;

class data extends Model
{
    /**
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @var string
     */
    public $instanceNetworkType;
    protected $_name = [
        'endpoints' => 'Endpoints',
        'instanceNetworkType' => 'InstanceNetworkType',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['Endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['Endpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
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
        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n1 = 0;
                foreach ($map['Endpoints'] as $item1) {
                    $model->endpoints[$n1] = endpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }

        return $model;
    }
}
