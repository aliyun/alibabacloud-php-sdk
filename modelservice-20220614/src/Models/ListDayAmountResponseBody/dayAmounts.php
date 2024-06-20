<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614\Models\ListDayAmountResponseBody;

use AlibabaCloud\Tea\Model;

class dayAmounts extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $date;
    protected $_name = [
        'amount' => 'Amount',
        'date'   => 'Date',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dayAmounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        return $model;
    }
}
