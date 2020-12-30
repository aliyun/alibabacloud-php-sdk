<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackUsageResponseBody;

use AlibabaCloud\Tea\Model;

class packUsages extends Model
{
    /**
     * @var int
     */
    public $time;

    /**
     * @var float
     */
    public $traffic;
    protected $_name = [
        'time'    => 'Time',
        'traffic' => 'Traffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packUsages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }

        return $model;
    }
}
