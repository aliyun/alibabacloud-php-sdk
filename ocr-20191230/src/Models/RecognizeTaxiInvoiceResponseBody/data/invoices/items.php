<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices\items\itemRoi;

class items extends Model
{
    /**
     * @var itemRoi
     */
    public $itemRoi;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'itemRoi' => 'ItemRoi',
        'text' => 'Text',
    ];

    public function validate()
    {
        if (null !== $this->itemRoi) {
            $this->itemRoi->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemRoi) {
            $res['ItemRoi'] = null !== $this->itemRoi ? $this->itemRoi->toArray($noStream) : $this->itemRoi;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['ItemRoi'])) {
            $model->itemRoi = itemRoi::fromMap($map['ItemRoi']);
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
