<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeResourceUsageResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class cloudFunction extends Model
{
    /**
     * @var int
     */
    public $compute;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $traffic;
    protected $_name = [
        'compute' => 'Compute',
        'count'   => 'Count',
        'traffic' => 'Traffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compute) {
            $res['Compute'] = $this->compute;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudFunction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Compute'])) {
            $model->compute = $map['Compute'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }

        return $model;
    }
}
