<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ApplyInvoiceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $invoiceApplyId;
    protected $_name = [
        'invoiceApplyId' => 'InvoiceApplyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invoiceApplyId) {
            $res['InvoiceApplyId'] = $this->invoiceApplyId;
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
        if (isset($map['InvoiceApplyId'])) {
            $model->invoiceApplyId = $map['InvoiceApplyId'];
        }

        return $model;
    }
}
