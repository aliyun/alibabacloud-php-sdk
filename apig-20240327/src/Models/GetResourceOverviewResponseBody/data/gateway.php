<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data;

use AlibabaCloud\Tea\Model;

class gateway extends Model
{
    /**
     * @description Number of running gateways.
     *
     * @example 1
     *
     * @var int
     */
    public $runningCount;

    /**
     * @description Number of gateway instances.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'runningCount' => 'runningCount',
        'totalCount' => 'totalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->runningCount) {
            $res['runningCount'] = $this->runningCount;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['runningCount'])) {
            $model->runningCount = $map['runningCount'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
