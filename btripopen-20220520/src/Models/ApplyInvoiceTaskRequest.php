<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyInvoiceTaskRequest\invoiceTaskList;
use AlibabaCloud\Tea\Model;

class ApplyInvoiceTaskRequest extends Model
{
    /**
     * @example 2022-12-01
     *
     * @var string
     */
    public $billDate;

    /**
     * @var invoiceTaskList[]
     */
    public $invoiceTaskList;
    protected $_name = [
        'billDate'        => 'bill_date',
        'invoiceTaskList' => 'invoice_task_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billDate) {
            $res['bill_date'] = $this->billDate;
        }
        if (null !== $this->invoiceTaskList) {
            $res['invoice_task_list'] = [];
            if (null !== $this->invoiceTaskList && \is_array($this->invoiceTaskList)) {
                $n = 0;
                foreach ($this->invoiceTaskList as $item) {
                    $res['invoice_task_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyInvoiceTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bill_date'])) {
            $model->billDate = $map['bill_date'];
        }
        if (isset($map['invoice_task_list'])) {
            if (!empty($map['invoice_task_list'])) {
                $model->invoiceTaskList = [];
                $n                      = 0;
                foreach ($map['invoice_task_list'] as $item) {
                    $model->invoiceTaskList[$n++] = null !== $item ? invoiceTaskList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
