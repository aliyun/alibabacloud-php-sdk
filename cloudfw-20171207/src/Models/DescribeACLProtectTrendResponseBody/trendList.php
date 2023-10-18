<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeACLProtectTrendResponseBody;

use AlibabaCloud\Tea\Model;

class trendList extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $protectCnt;

    /**
     * @example 1697299200
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'protectCnt' => 'ProtectCnt',
        'time'       => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protectCnt) {
            $res['ProtectCnt'] = $this->protectCnt;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trendList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProtectCnt'])) {
            $model->protectCnt = $map['ProtectCnt'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
