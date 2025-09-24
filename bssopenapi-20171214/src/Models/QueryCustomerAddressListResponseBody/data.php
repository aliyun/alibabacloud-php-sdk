<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponseBody\data\customerInvoiceAddressList;

class data extends Model
{
    /**
     * @var customerInvoiceAddressList
     */
    public $customerInvoiceAddressList;
    protected $_name = [
        'customerInvoiceAddressList' => 'CustomerInvoiceAddressList',
    ];

    public function validate()
    {
        if (null !== $this->customerInvoiceAddressList) {
            $this->customerInvoiceAddressList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerInvoiceAddressList) {
            $res['CustomerInvoiceAddressList'] = null !== $this->customerInvoiceAddressList ? $this->customerInvoiceAddressList->toArray($noStream) : $this->customerInvoiceAddressList;
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
        if (isset($map['CustomerInvoiceAddressList'])) {
            $model->customerInvoiceAddressList = customerInvoiceAddressList::fromMap($map['CustomerInvoiceAddressList']);
        }

        return $model;
    }
}
