<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardHistoryFlowInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class dayUsageList extends Model
{
    /**
     * @var int
     */
    public $day;

    /**
     * @var int
     */
    public $value;
    protected $_name = [
        'day'   => 'Day',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dayUsageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
