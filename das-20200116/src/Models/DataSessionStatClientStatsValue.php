<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DataSessionStatClientStatsValue extends Model
{
    /**
     * @description The number of clients whose IP addresses are active.
     *
     * @example 0
     *
     * @var int
     */
    public $activeCount;

    /**
     * @description The total number of IP addresses of clients.
     *
     * @example 11
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'activeCount' => 'ActiveCount',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeCount) {
            $res['ActiveCount'] = $this->activeCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataSessionStatClientStatsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveCount'])) {
            $model->activeCount = $map['ActiveCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
