<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceStatResponseBody\appDeviceStats;
use AlibabaCloud\Tea\Model;

class QueryDeviceStatResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appDeviceStats
     */
    public $appDeviceStats;
    protected $_name = [
        'requestId'      => 'RequestId',
        'appDeviceStats' => 'AppDeviceStats',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appDeviceStats) {
            $res['AppDeviceStats'] = null !== $this->appDeviceStats ? $this->appDeviceStats->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppDeviceStats'])) {
            $model->appDeviceStats = appDeviceStats::fromMap($map['AppDeviceStats']);
        }

        return $model;
    }
}
