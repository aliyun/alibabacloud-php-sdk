<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogHistogramResponseBody;

use AlibabaCloud\Tea\Model;

class alertLogHistogramList extends Model
{
    /**
     * @description The number of alert logs.
     *
     * @example 20
     *
     * @var int
     */
    public $count;

    /**
     * @description The start timestamp of the queried alert logs.
     *
     * Unit: seconds.
     * @example 1610074791
     *
     * @var int
     */
    public $from;

    /**
     * @description The end timestamp of the queried alert logs.
     *
     * Unit: seconds.
     * @example 1610074800
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'count' => 'Count',
        'from'  => 'From',
        'to'    => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertLogHistogramList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
