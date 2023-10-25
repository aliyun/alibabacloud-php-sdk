<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListSpanNamesResponseBody\spanNames;
use AlibabaCloud\Tea\Model;

class ListSpanNamesResponseBody extends Model
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
     * @description The span names.
     *
     * @var spanNames
     */
    public $spanNames;
    protected $_name = [
        'requestId' => 'RequestId',
        'spanNames' => 'SpanNames',
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
        if (null !== $this->spanNames) {
            $res['SpanNames'] = null !== $this->spanNames ? $this->spanNames->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSpanNamesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpanNames'])) {
            $model->spanNames = spanNames::fromMap($map['SpanNames']);
        }

        return $model;
    }
}
