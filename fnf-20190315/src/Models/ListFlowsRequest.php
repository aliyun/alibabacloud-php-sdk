<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ListFlowsRequest extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $limit;
    protected $_name = [
        'requestId' => 'RequestId',
        'nextToken' => 'NextToken',
        'limit'     => 'Limit',
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
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        return $model;
    }
}
