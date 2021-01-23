<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListSpanNamesResponseBody\spanNames;
use AlibabaCloud\Tea\Model;

class ListSpanNamesResponseBody extends Model
{
    /**
     * @var spanNames
     */
    public $spanNames;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'spanNames' => 'SpanNames',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spanNames) {
            $res['SpanNames'] = null !== $this->spanNames ? $this->spanNames->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['SpanNames'])) {
            $model->spanNames = spanNames::fromMap($map['SpanNames']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
