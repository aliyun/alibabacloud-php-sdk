<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponseBody\data\customerInvoiceList;

class data extends Model
{
    /**
     * @var customerInvoiceList
     */
    public $customerInvoiceList;
    protected $_name = [
        'customerInvoiceList' => 'CustomerInvoiceList',
    ];

    public function validate()
    {
        if (null !== $this->customerInvoiceList) {
            $this->customerInvoiceList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerInvoiceList) {
            $res['CustomerInvoiceList'] = null !== $this->customerInvoiceList ? $this->customerInvoiceList->toArray($noStream) : $this->customerInvoiceList;
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
        if (isset($map['CustomerInvoiceList'])) {
            $model->customerInvoiceList = customerInvoiceList::fromMap($map['CustomerInvoiceList']);
        }

        return $model;
    }
}
