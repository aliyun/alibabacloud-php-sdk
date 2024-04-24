<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ListTagValuesResponseBody extends Model
{
    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example caeba0bbb2be03f84eb48b699f0*****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 705114BB-EAEF-5CC4-8837-F1D4****BB5B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tag values.
     *
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
