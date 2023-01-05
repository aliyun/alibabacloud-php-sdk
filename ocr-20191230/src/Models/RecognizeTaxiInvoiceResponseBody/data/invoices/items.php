<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices\items\itemRoi;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var itemRoi
     */
    public $itemRoi;

    /**
     * @example 86655664
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'itemRoi' => 'ItemRoi',
        'text'    => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemRoi) {
            $res['ItemRoi'] = null !== $this->itemRoi ? $this->itemRoi->toMap() : null;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemRoi'])) {
            $model->itemRoi = itemRoi::fromMap($map['ItemRoi']);
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
