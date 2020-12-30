<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByMsgResponseBody\pushStats;
use AlibabaCloud\Tea\Model;

class QueryPushStatByMsgResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pushStats
     */
    public $pushStats;
    protected $_name = [
        'requestId' => 'RequestId',
        'pushStats' => 'PushStats',
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
        if (null !== $this->pushStats) {
            $res['PushStats'] = null !== $this->pushStats ? $this->pushStats->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPushStatByMsgResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PushStats'])) {
            $model->pushStats = pushStats::fromMap($map['PushStats']);
        }

        return $model;
    }
}
