<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByMsgResponseBody\pushStats;
use AlibabaCloud\Tea\Model;

class QueryPushStatByMsgResponseBody extends Model
{
    /**
     * @var pushStats
     */
    public $pushStats;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pushStats' => 'PushStats',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushStats) {
            $res['PushStats'] = null !== $this->pushStats ? $this->pushStats->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PushStats'])) {
            $model->pushStats = pushStats::fromMap($map['PushStats']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
