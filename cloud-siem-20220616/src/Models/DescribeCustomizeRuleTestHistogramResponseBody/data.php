<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleTestHistogramResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 125
     *
     * @var int
     */
    public $count;

    /**
     * @example 1599897188
     *
     * @var int
     */
    public $from;

    /**
     * @example 1599997188
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
     * @return data
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
