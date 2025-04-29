<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ApplyInvoiceTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $billDate;

    /**
     * @var string
     */
    public $invoiceTaskListShrink;
    protected $_name = [
        'billDate' => 'bill_date',
        'invoiceTaskListShrink' => 'invoice_task_list',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billDate) {
            $res['bill_date'] = $this->billDate;
        }

        if (null !== $this->invoiceTaskListShrink) {
            $res['invoice_task_list'] = $this->invoiceTaskListShrink;
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
        if (isset($map['bill_date'])) {
            $model->billDate = $map['bill_date'];
        }

        if (isset($map['invoice_task_list'])) {
            $model->invoiceTaskListShrink = $map['invoice_task_list'];
        }

        return $model;
    }
}
