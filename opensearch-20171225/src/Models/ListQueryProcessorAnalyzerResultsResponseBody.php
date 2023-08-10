<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListQueryProcessorAnalyzerResultsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 98724351-D6B2-5D8A-B089-7FFD1821A7E9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The data returned.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $result;
    protected $_name = [
        'requestId' => 'RequestId',
        'result'    => 'result',
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
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQueryProcessorAnalyzerResultsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        return $model;
    }
}
