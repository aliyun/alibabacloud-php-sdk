<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701\Models\LingJieApiInvokeQps;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var string
     */
    public $day;

    /**
     * @var string
     */
    public $hour;

    /**
     * @var int
     */
    public $maxQps;
    protected $_name = [
        'day'    => 'Day',
        'hour'   => 'Hour',
        'maxQps' => 'MaxQps',
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
        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }
        if (null !== $this->maxQps) {
            $res['MaxQps'] = $this->maxQps;
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
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }
        if (isset($map['MaxQps'])) {
            $model->maxQps = $map['MaxQps'];
        }

        return $model;
    }
}
