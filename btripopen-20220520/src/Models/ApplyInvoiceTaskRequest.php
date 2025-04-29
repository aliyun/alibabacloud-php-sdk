<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyInvoiceTaskRequest\invoiceTaskList;

class ApplyInvoiceTaskRequest extends Model
{
    /**
     * @var string
     */
    public $billDate;

    /**
     * @var invoiceTaskList[]
     */
    public $invoiceTaskList;
    protected $_name = [
        'billDate' => 'bill_date',
        'invoiceTaskList' => 'invoice_task_list',
    ];

    public function validate()
    {
        if (\is_array($this->invoiceTaskList)) {
            Model::validateArray($this->invoiceTaskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billDate) {
            $res['bill_date'] = $this->billDate;
        }

        if (null !== $this->invoiceTaskList) {
            if (\is_array($this->invoiceTaskList)) {
                $res['invoice_task_list'] = [];
                $n1 = 0;
                foreach ($this->invoiceTaskList as $item1) {
                    $res['invoice_task_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['bill_date'])) {
            $model->billDate = $map['bill_date'];
        }

        if (isset($map['invoice_task_list'])) {
            if (!empty($map['invoice_task_list'])) {
                $model->invoiceTaskList = [];
                $n1 = 0;
                foreach ($map['invoice_task_list'] as $item1) {
                    $model->invoiceTaskList[$n1++] = invoiceTaskList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
