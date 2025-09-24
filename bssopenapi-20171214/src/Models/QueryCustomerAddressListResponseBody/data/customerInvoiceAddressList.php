<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponseBody\data\customerInvoiceAddressList\customerInvoiceAddress;

class customerInvoiceAddressList extends Model
{
    /**
     * @var customerInvoiceAddress[]
     */
    public $customerInvoiceAddress;
    protected $_name = [
        'customerInvoiceAddress' => 'CustomerInvoiceAddress',
    ];

    public function validate()
    {
        if (\is_array($this->customerInvoiceAddress)) {
            Model::validateArray($this->customerInvoiceAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerInvoiceAddress) {
            if (\is_array($this->customerInvoiceAddress)) {
                $res['CustomerInvoiceAddress'] = [];
                $n1 = 0;
                foreach ($this->customerInvoiceAddress as $item1) {
                    $res['CustomerInvoiceAddress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustomerInvoiceAddress'])) {
            if (!empty($map['CustomerInvoiceAddress'])) {
                $model->customerInvoiceAddress = [];
                $n1 = 0;
                foreach ($map['CustomerInvoiceAddress'] as $item1) {
                    $model->customerInvoiceAddress[$n1] = customerInvoiceAddress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
