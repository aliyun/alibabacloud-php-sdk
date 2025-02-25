<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetExampleQueryResponseBody\exampleQuery;

class GetExampleQueryResponseBody extends Model
{
    /**
     * @var exampleQuery
     */
    public $exampleQuery;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exampleQuery' => 'ExampleQuery',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->exampleQuery) {
            $this->exampleQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exampleQuery) {
            $res['ExampleQuery'] = null !== $this->exampleQuery ? $this->exampleQuery->toArray($noStream) : $this->exampleQuery;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
