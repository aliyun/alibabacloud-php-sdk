<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByNameResponseBody\traceApps;
use AlibabaCloud\Tea\Model;

class SearchTraceAppByNameResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F7781D4A-2818-41E7-B7BB-79D809E9****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the monitoring task.
     *
     * @var traceApps[]
     */
    public $traceApps;
    protected $_name = [
        'requestId' => 'RequestId',
        'traceApps' => 'TraceApps',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->traceApps) {
            $res['TraceApps'] = [];
            if (null !== $this->traceApps && \is_array($this->traceApps)) {
                $n = 0;
                foreach ($this->traceApps as $item) {
                    $res['TraceApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTraceAppByNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TraceApps'])) {
            if (!empty($map['TraceApps'])) {
                $model->traceApps = [];
                $n = 0;
                foreach ($map['TraceApps'] as $item) {
                    $model->traceApps[$n++] = null !== $item ? traceApps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
