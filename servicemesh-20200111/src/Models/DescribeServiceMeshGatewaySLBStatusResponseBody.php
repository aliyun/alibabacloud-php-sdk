<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceMeshGatewaySLBStatusResponseBody extends Model
{
    /**
     * @var GatewaySLBValue[]
     */
    public $gatewaySLB;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gatewaySLB' => 'GatewaySLB',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewaySLB) {
            $res['GatewaySLB'] = [];
            if (null !== $this->gatewaySLB && \is_array($this->gatewaySLB)) {
                foreach ($this->gatewaySLB as $key => $val) {
                    $res['GatewaySLB'][$key] = null !== $val ? $val->toMap() : $val;
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
     * @return DescribeServiceMeshGatewaySLBStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewaySLB'])) {
            $model->gatewaySLB = $map['GatewaySLB'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
