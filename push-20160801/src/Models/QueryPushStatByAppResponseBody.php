<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByAppResponseBody\appPushStats;

class QueryPushStatByAppResponseBody extends Model
{
    /**
     * @var appPushStats
     */
    public $appPushStats;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appPushStats' => 'AppPushStats',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appPushStats) {
            $this->appPushStats->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appPushStats) {
            $res['AppPushStats'] = null !== $this->appPushStats ? $this->appPushStats->toArray($noStream) : $this->appPushStats;
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
        if (isset($map['AppPushStats'])) {
            $model->appPushStats = appPushStats::fromMap($map['AppPushStats']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
