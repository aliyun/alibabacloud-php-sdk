<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeEndpointsResponseBody\connAddrs;
use AlibabaCloud\Tea\Model;

class DescribeEndpointsResponseBody extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var connAddrs
     */
    public $connAddrs;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'vpcId'     => 'VpcId',
        'requestId' => 'RequestId',
        'connAddrs' => 'ConnAddrs',
        'vSwitchId' => 'VSwitchId',
        'netType'   => 'NetType',
        'engine'    => 'Engine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->connAddrs) {
            $res['ConnAddrs'] = null !== $this->connAddrs ? $this->connAddrs->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEndpointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConnAddrs'])) {
            $model->connAddrs = connAddrs::fromMap($map['ConnAddrs']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
