<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryUniqueDeviceStatResponseBody\appDeviceStats;

class QueryUniqueDeviceStatResponseBody extends Model
{
    /**
     * @var appDeviceStats
     */
    public $appDeviceStats;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appDeviceStats' => 'AppDeviceStats',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appDeviceStats) {
            $this->appDeviceStats->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appDeviceStats) {
            $res['AppDeviceStats'] = null !== $this->appDeviceStats ? $this->appDeviceStats->toArray($noStream) : $this->appDeviceStats;
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
        if (isset($map['AppDeviceStats'])) {
            $model->appDeviceStats = appDeviceStats::fromMap($map['AppDeviceStats']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
