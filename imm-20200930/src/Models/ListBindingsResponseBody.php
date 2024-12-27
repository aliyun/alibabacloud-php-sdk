<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListBindingsResponseBody extends Model
{
    /**
     * @description The bindings between the dataset and OSS buckets.
     *
     * @var Binding[]
     */
    public $bindings;

    /**
     * @description *   The pagination token that is used in the next request to retrieve a new page of results if the total number of results exceeds the value of the MaxResults parameter.
     *   The next request returns remaining results starting from the position marked by the NextToken parameter value.
     *   This parameter has a non-empty value only when not all bindings are returned.
     *
     * @example immtest:dataset001:examplebucket01
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example EFDFD356-C928-4A36-951A-6EB5A592****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bindings'  => 'Bindings',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindings) {
            $res['Bindings'] = [];
            if (null !== $this->bindings && \is_array($this->bindings)) {
                $n = 0;
                foreach ($this->bindings as $item) {
                    $res['Bindings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBindingsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bindings'])) {
            if (!empty($map['Bindings'])) {
                $model->bindings = [];
                $n               = 0;
                foreach ($map['Bindings'] as $item) {
                    $model->bindings[$n++] = null !== $item ? Binding::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
