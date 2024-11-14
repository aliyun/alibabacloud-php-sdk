<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventsResponseBody\event;
use AlibabaCloud\Tea\Model;

class DescribeFreeUserEventsResponseBody extends Model
{
    /**
     * @description The security events on which basic detection is performed.
     *
     * @var event[]
     */
    public $event;

    /**
     * @description The request ID.
     *
     * @example 8A2DF88D-90C2-56E9-B8D5-36BB9646791C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'event'     => 'Event',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = [];
            if (null !== $this->event && \is_array($this->event)) {
                $n = 0;
                foreach ($this->event as $item) {
                    $res['Event'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeFreeUserEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Event'])) {
            if (!empty($map['Event'])) {
                $model->event = [];
                $n            = 0;
                foreach ($map['Event'] as $item) {
                    $model->event[$n++] = null !== $item ? event::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
