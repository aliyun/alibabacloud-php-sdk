<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class CreateSecondRankResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example ABCDEFGH
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the fine sort expression.
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
     * @return CreateSecondRankResponseBody
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
