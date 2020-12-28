<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListSpanNamesResponseBody extends Model
{
    /**
     * @var string[]
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
            $res['SpanNames'] = $this->spanNames;
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
            if (!empty($map['SpanNames'])) {
                $model->spanNames = $map['SpanNames'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
