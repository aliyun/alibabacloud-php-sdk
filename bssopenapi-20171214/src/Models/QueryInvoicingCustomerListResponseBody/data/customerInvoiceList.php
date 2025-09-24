<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponseBody\data\customerInvoiceList\customerInvoice;

class customerInvoiceList extends Model
{
    /**
     * @var customerInvoice[]
     */
    public $customerInvoice;
    protected $_name = [
        'customerInvoice' => 'CustomerInvoice',
    ];

    public function validate()
    {
        if (\is_array($this->customerInvoice)) {
            Model::validateArray($this->customerInvoice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerInvoice) {
            if (\is_array($this->customerInvoice)) {
                $res['CustomerInvoice'] = [];
                $n1 = 0;
                foreach ($this->customerInvoice as $item1) {
                    $res['CustomerInvoice'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustomerInvoice'])) {
            if (!empty($map['CustomerInvoice'])) {
                $model->customerInvoice = [];
                $n1 = 0;
                foreach ($map['CustomerInvoice'] as $item1) {
                    $model->customerInvoice[$n1] = customerInvoice::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
