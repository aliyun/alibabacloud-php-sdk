<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetExampleQueryResponseBody\exampleQuery;
use AlibabaCloud\Tea\Model;

class GetExampleQueryResponseBody extends Model
{
    /**
     * @var exampleQuery
     */
    public $exampleQuery;

    /**
     * @example 36A3D9BE-B607-5993-B546-7E19EF65DC00
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exampleQuery' => 'ExampleQuery',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exampleQuery) {
            $res['ExampleQuery'] = null !== $this->exampleQuery ? $this->exampleQuery->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExampleQueryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExampleQuery'])) {
            $model->exampleQuery = exampleQuery::fromMap($map['ExampleQuery']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
