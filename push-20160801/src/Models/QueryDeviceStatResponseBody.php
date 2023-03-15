<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceStatResponseBody\appDeviceStats;
use AlibabaCloud\Tea\Model;

class QueryDeviceStatResponseBody extends Model
{
    /**
     * @var appDeviceStats
     */
    public $appDeviceStats;

    /**
     * @example 9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appDeviceStats' => 'AppDeviceStats',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appDeviceStats) {
            $res['AppDeviceStats'] = null !== $this->appDeviceStats ? $this->appDeviceStats->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDeviceStatResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppDeviceStats'])) {
            $model->appDeviceStats = appDeviceStats::fromMap($map['AppDeviceStats']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
