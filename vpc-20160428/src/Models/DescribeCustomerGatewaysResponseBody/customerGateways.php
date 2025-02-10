<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewaysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewaysResponseBody\customerGateways\customerGateway;

class customerGateways extends Model
{
    /**
     * @var customerGateway[]
     */
    public $customerGateway;
    protected $_name = [
        'customerGateway' => 'CustomerGateway',
    ];

    public function validate()
    {
        if (\is_array($this->customerGateway)) {
            Model::validateArray($this->customerGateway);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerGateway) {
            if (\is_array($this->customerGateway)) {
                $res['CustomerGateway'] = [];
                $n1                     = 0;
                foreach ($this->customerGateway as $item1) {
                    $res['CustomerGateway'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustomerGateway'])) {
            if (!empty($map['CustomerGateway'])) {
                $model->customerGateway = [];
                $n1                     = 0;
                foreach ($map['CustomerGateway'] as $item1) {
                    $model->customerGateway[$n1++] = customerGateway::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
