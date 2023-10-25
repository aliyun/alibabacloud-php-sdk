<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans;
use AlibabaCloud\Tea\Model;

class GetTraceResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1E2B6A4C-6B83-4062-8B6F-AEEC1F******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the trace.
     *
     * @var spans
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
            $res['Spans'] = null !== $this->spans ? $this->spans->toMap() : null;
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
            $model->spans = spans::fromMap($map['Spans']);
        }

        return $model;
    }
}
