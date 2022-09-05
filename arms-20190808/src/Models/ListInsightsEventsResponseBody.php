<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListInsightsEventsResponseBody\insightsEvents;
use AlibabaCloud\Tea\Model;

class ListInsightsEventsResponseBody extends Model
{
    /**
     * @var insightsEvents[]
     */
    public $insightsEvents;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'insightsEvents' => 'InsightsEvents',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->insightsEvents) {
            $res['InsightsEvents'] = [];
            if (null !== $this->insightsEvents && \is_array($this->insightsEvents)) {
                $n = 0;
                foreach ($this->insightsEvents as $item) {
                    $res['InsightsEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInsightsEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InsightsEvents'])) {
            if (!empty($map['InsightsEvents'])) {
                $model->insightsEvents = [];
                $n                     = 0;
                foreach ($map['InsightsEvents'] as $item) {
                    $model->insightsEvents[$n++] = null !== $item ? insightsEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
