<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\SDK\ARMS\V20210422\Models\GetTraceResponseBody\spans;
use AlibabaCloud\Tea\Model;

class GetTraceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var spans[]
     */
    public $spans;
    protected $_name = [
        'requestId' => 'RequestId',
        'spans'     => 'Spans',
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
        if (null !== $this->spans) {
            $res['Spans'] = [];
            if (null !== $this->spans && \is_array($this->spans)) {
                $n = 0;
                foreach ($this->spans as $item) {
                    $res['Spans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTraceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Spans'])) {
            if (!empty($map['Spans'])) {
                $model->spans = [];
                $n            = 0;
                foreach ($map['Spans'] as $item) {
                    $model->spans[$n++] = null !== $item ? spans::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
