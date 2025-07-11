<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceByCenterPolicyIdResponseBody\resourceModelList;
use AlibabaCloud\Tea\Model;

class DescribeResourceByCenterPolicyIdResponseBody extends Model
{
    /**
     * @description The total number of resources.
     *
     * @example 2
     *
     * @var string
     */
    public $count;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 48174475-5EB2-5F99-A9E9-6F892D645****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resources.
     *
     * @var resourceModelList[]
     */
    public $resourceModelList;
    protected $_name = [
        'count' => 'Count',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'resourceModelList' => 'ResourceModelList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceModelList) {
            $res['ResourceModelList'] = [];
            if (null !== $this->resourceModelList && \is_array($this->resourceModelList)) {
                $n = 0;
                foreach ($this->resourceModelList as $item) {
                    $res['ResourceModelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceByCenterPolicyIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceModelList'])) {
            if (!empty($map['ResourceModelList'])) {
                $model->resourceModelList = [];
                $n = 0;
                foreach ($map['ResourceModelList'] as $item) {
                    $model->resourceModelList[$n++] = null !== $item ? resourceModelList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
