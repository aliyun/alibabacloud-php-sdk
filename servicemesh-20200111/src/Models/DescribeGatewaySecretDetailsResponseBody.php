<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGatewaySecretDetailsResponseBody\gatewaySecretDetails;
use AlibabaCloud\Tea\Model;

class DescribeGatewaySecretDetailsResponseBody extends Model
{
    /**
     * @var gatewaySecretDetails[]
     */
    public $gatewaySecretDetails;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gatewaySecretDetails' => 'GatewaySecretDetails',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewaySecretDetails) {
            $res['GatewaySecretDetails'] = [];
            if (null !== $this->gatewaySecretDetails && \is_array($this->gatewaySecretDetails)) {
                $n = 0;
                foreach ($this->gatewaySecretDetails as $item) {
                    $res['GatewaySecretDetails'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeGatewaySecretDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewaySecretDetails'])) {
            if (!empty($map['GatewaySecretDetails'])) {
                $model->gatewaySecretDetails = [];
                $n                           = 0;
                foreach ($map['GatewaySecretDetails'] as $item) {
                    $model->gatewaySecretDetails[$n++] = null !== $item ? gatewaySecretDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
