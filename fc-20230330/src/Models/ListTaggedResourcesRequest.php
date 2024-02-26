<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListTaggedResourcesRequest extends Model
{
    /**
     * @description The number of resources to return.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example MTIzNCNhYmM=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The type of the resource quantity. ALIYUN::FC::FUNCTION indicates functions in Function Compute 3.0. ALIYUN::FC::SERVICE indicates the original service of Function Compute. The default value is ALIYUN::FC:FUNCTION.
     *
     * @example ALIYUN::FC:FUNCTION
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'limit'        => 'limit',
        'nextToken'    => 'nextToken',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaggedResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
