<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices\invoiceRoi;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices\items;
use AlibabaCloud\Tea\Model;

class invoices extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $rotateType;

    /**
     * @var invoiceRoi
     */
    public $invoiceRoi;
    protected $_name = [
        'items'      => 'Items',
        'rotateType' => 'RotateType',
        'invoiceRoi' => 'InvoiceRoi',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rotateType) {
            $res['RotateType'] = $this->rotateType;
        }
        if (null !== $this->invoiceRoi) {
            $res['InvoiceRoi'] = null !== $this->invoiceRoi ? $this->invoiceRoi->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invoices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RotateType'])) {
            $model->rotateType = $map['RotateType'];
        }
        if (isset($map['InvoiceRoi'])) {
            $model->invoiceRoi = invoiceRoi::fromMap($map['InvoiceRoi']);
        }

        return $model;
    }
}
