<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByMsgResponseBody\pushStats;

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
        if (null !== $this->pushStats) {
            $this->pushStats->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushStats) {
            $res['PushStats'] = null !== $this->pushStats ? $this->pushStats->toArray($noStream) : $this->pushStats;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
