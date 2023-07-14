<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesResponseBody\traceInfos;
use AlibabaCloud\Tea\Model;

class SearchTracesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 4C518054-852F-4023-ABC1-4AF95FF7****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the returned traces.
     *
     * @var traceInfos[]
     */
    public $traceInfos;
    protected $_name = [
        'requestId'  => 'RequestId',
        'traceInfos' => 'TraceInfos',
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
        if (null !== $this->traceInfos) {
            $res['TraceInfos'] = [];
            if (null !== $this->traceInfos && \is_array($this->traceInfos)) {
                $n = 0;
                foreach ($this->traceInfos as $item) {
                    $res['TraceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTracesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TraceInfos'])) {
            if (!empty($map['TraceInfos'])) {
                $model->traceInfos = [];
                $n                 = 0;
                foreach ($map['TraceInfos'] as $item) {
                    $model->traceInfos[$n++] = null !== $item ? traceInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
