<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackUsageResponse;

use AlibabaCloud\Tea\Model;

class packUsages extends Model
{
    /**
     * @var float
     */
    public $traffic;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'traffic' => 'Traffic',
        'time'    => 'Time',
    ];

    public function validate()
    {
        Model::validateRequired('traffic', $this->traffic, true);
        Model::validateRequired('time', $this->time, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
