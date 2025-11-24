<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayDomainsResponseBody\gatewaySecretDetails;

class DescribeIstioGatewayDomainsResponseBody extends Model
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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->gatewaySecretDetails)) {
            Model::validateArray($this->gatewaySecretDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewaySecretDetails) {
            if (\is_array($this->gatewaySecretDetails)) {
                $res['GatewaySecretDetails'] = [];
                $n1 = 0;
                foreach ($this->gatewaySecretDetails as $item1) {
                    $res['GatewaySecretDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GatewaySecretDetails'])) {
            if (!empty($map['GatewaySecretDetails'])) {
                $model->gatewaySecretDetails = [];
                $n1 = 0;
                foreach ($map['GatewaySecretDetails'] as $item1) {
                    $model->gatewaySecretDetails[$n1] = gatewaySecretDetails::fromMap($item1);
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
