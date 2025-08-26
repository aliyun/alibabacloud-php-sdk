<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices\invoiceRoi;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices\items;

class invoices extends Model
{
    /**
     * @var invoiceRoi
     */
    public $invoiceRoi;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $rotateType;
    protected $_name = [
        'invoiceRoi' => 'InvoiceRoi',
        'items' => 'Items',
        'rotateType' => 'RotateType',
    ];

    public function validate()
    {
        if (null !== $this->invoiceRoi) {
            $this->invoiceRoi->validate();
        }
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invoiceRoi) {
            $res['InvoiceRoi'] = null !== $this->invoiceRoi ? $this->invoiceRoi->toArray($noStream) : $this->invoiceRoi;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rotateType) {
            $res['RotateType'] = $this->rotateType;
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
        if (isset($map['InvoiceRoi'])) {
            $model->invoiceRoi = invoiceRoi::fromMap($map['InvoiceRoi']);
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RotateType'])) {
            $model->rotateType = $map['RotateType'];
        }

        return $model;
    }
}
