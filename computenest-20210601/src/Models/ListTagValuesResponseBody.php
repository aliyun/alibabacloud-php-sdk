<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class ListTagValuesResponseBody extends Model
{
    /**
     * @example AAAAAVz7BQqj2xtiNSC3d3RAD38=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 0631D623-D917-1C2D-ACD6-5B3B19XXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'values'    => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagValuesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
