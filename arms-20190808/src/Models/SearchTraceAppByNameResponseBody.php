<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByNameResponseBody\traceApps;
use AlibabaCloud\Tea\Model;

class SearchTraceAppByNameResponseBody extends Model
{
    /**
     * @var traceApps[]
     */
    public $traceApps;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'traceApps' => 'TraceApps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traceApps) {
            $res['TraceApps'] = [];
            if (null !== $this->traceApps && \is_array($this->traceApps)) {
                $n = 0;
                foreach ($this->traceApps as $item) {
                    $res['TraceApps'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return SearchTraceAppByNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TraceApps'])) {
            if (!empty($map['TraceApps'])) {
                $model->traceApps = [];
                $n                = 0;
                foreach ($map['TraceApps'] as $item) {
                    $model->traceApps[$n++] = null !== $item ? traceApps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
