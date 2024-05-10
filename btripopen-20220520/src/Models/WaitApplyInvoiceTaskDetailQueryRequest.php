<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class WaitApplyInvoiceTaskDetailQueryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2022-12-01
     *
     * @var string
     */
    public $billDate;
    protected $_name = [
        'billDate' => 'bill_date',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WaitApplyInvoiceTaskDetailQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bill_date'])) {
            $model->billDate = $map['bill_date'];
        }

        return $model;
    }
}
