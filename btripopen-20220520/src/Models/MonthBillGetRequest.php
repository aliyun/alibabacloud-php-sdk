<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class MonthBillGetRequest extends Model
{
    /**
     * @var string
     */
    public $billBatch;

    /**
     * @var string
     */
    public $billMonth;
    protected $_name = [
        'billBatch' => 'bill_batch',
        'billMonth' => 'bill_month',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billBatch) {
            $res['bill_batch'] = $this->billBatch;
        }

        if (null !== $this->billMonth) {
            $res['bill_month'] = $this->billMonth;
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
        if (isset($map['bill_batch'])) {
            $model->billBatch = $map['bill_batch'];
        }

        if (isset($map['bill_month'])) {
            $model->billMonth = $map['bill_month'];
        }

        return $model;
    }
}
