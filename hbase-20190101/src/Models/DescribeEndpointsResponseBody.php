<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeEndpointsResponseBody\connAddrs;
use AlibabaCloud\Tea\Model;

class DescribeEndpointsResponseBody extends Model
{
    /**
     * @var connAddrs
     */
    public $connAddrs;

    /**
     * @example hbaseue
     *
     * @var string
     */
    public $engine;

    /**
     * @example VPC
     *
     * @var string
     */
    public $netType;

    /**
     * @example F072593C-5234-5B56-9F63-3C7A3AD85D66
     *
     * @var string
     */
    public $requestId;

    /**
     * @example vsw-bp1foll427ze3d4ps****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp15s22y1a7sff5gj****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'connAddrs' => 'ConnAddrs',
        'engine'    => 'Engine',
        'netType'   => 'NetType',
        'requestId' => 'RequestId',
        'vSwitchId' => 'VSwitchId',
        'vpcId'     => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connAddrs) {
            $res['ConnAddrs'] = null !== $this->connAddrs ? $this->connAddrs->toMap() : null;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ConnAddrs'])) {
            $model->connAddrs = connAddrs::fromMap($map['ConnAddrs']);
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
