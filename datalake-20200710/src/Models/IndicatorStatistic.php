<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class IndicatorStatistic extends Model
{
    /**
     * @var int
     */
    public $data;

    /**
     * @var string
     */
    public $date;
    protected $_name = [
        'data' => 'Data',
        'date' => 'Date',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IndicatorStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        return $model;
    }
}
