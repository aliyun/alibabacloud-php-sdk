<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveInteractionMetricDataResponseBody;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The time when the metric was queried. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1548670257000
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description The value of the metric.
     *
     * @example 66.670000
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'timestamp' => 'Timestamp',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
