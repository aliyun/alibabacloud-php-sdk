<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeIngressGatewaysResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $ingressGateways;
    protected $_name = [
        'requestId'       => 'RequestId',
        'ingressGateways' => 'IngressGateways',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ingressGateways) {
            $res['IngressGateways'] = $this->ingressGateways;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIngressGatewaysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IngressGateways'])) {
            if (!empty($map['IngressGateways'])) {
                $model->ingressGateways = $map['IngressGateways'];
            }
        }

        return $model;
    }
}
