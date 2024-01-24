<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRDSPerformanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @description The time point when the value of the monitoring metric was obtained. The value is in the UNIX timestamp format. The time is displayed in UTC. Unit: ms.
     *
     * @example 1603209660000
     *
     * @var int
     */
    public $date;

    /**
     * @description The value of the monitoring metric.
     *
     * @example 0.58
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'date'  => 'Date',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return values
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
