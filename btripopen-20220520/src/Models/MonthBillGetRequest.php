<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class MonthBillGetRequest extends Model
{
    /**
     * @var string
     */
    public $billMonth;
    protected $_name = [
        'billMonth' => 'bill_month',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billMonth) {
            $res['bill_month'] = $this->billMonth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MonthBillGetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bill_month'])) {
            $model->billMonth = $map['bill_month'];
        }

        return $model;
    }
}
