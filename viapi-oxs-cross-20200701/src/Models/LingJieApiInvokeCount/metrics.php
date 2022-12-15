<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701\Models\LingJieApiInvokeCount;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $day;

    /**
     * @var string
     */
    public $hour;
    protected $_name = [
        'count' => 'Count',
        'day'   => 'Day',
        'hour'  => 'Hour',
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
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }

        return $model;
    }
}
