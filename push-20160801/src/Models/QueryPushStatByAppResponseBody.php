<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByAppResponseBody\appPushStats;
use AlibabaCloud\Tea\Model;

class QueryPushStatByAppResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appPushStats
     */
    public $appPushStats;
    protected $_name = [
        'requestId'    => 'RequestId',
        'appPushStats' => 'AppPushStats',
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
        if (null !== $this->appPushStats) {
            $res['AppPushStats'] = null !== $this->appPushStats ? $this->appPushStats->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPushStatByAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppPushStats'])) {
            $model->appPushStats = appPushStats::fromMap($map['AppPushStats']);
        }

        return $model;
    }
}
