<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices\invoiceRoi;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices\items;
use AlibabaCloud\Tea\Model;

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
     * @example 0
     *
     * @var int
     */
    public $rotateType;
    protected $_name = [
        'invoiceRoi' => 'InvoiceRoi',
        'items'      => 'Items',
        'rotateType' => 'RotateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invoiceRoi) {
            $res['InvoiceRoi'] = null !== $this->invoiceRoi ? $this->invoiceRoi->toMap() : null;
        }
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
        if (isset($map['InvoiceRoi'])) {
            $model->invoiceRoi = invoiceRoi::fromMap($map['InvoiceRoi']);
        }
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

        return $model;
    }
}
