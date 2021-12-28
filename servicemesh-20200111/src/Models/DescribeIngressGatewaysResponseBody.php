<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeIngressGatewaysResponseBody extends Model
{
    /**
     * @var mixed[][]
     */
    public $ingressGateways;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ingressGateways' => 'IngressGateways',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ingressGateways) {
            $res['IngressGateways'] = $this->ingressGateways;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IngressGateways'])) {
            if (!empty($map['IngressGateways'])) {
                $model->ingressGateways = $map['IngressGateways'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
