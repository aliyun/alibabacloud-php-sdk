<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceRelationsResponseBody\resourceRelations;
use AlibabaCloud\Tea\Model;

class ListAggregateResourceRelationsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 7A25F9DE-4C8B-5AD3-A241-FFF5A259E5A1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result of the relationship.
     *
     * @var resourceRelations
     */
    public $resourceRelations;
    protected $_name = [
        'requestId'         => 'RequestId',
        'resourceRelations' => 'ResourceRelations',
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
        if (null !== $this->resourceRelations) {
            $res['ResourceRelations'] = null !== $this->resourceRelations ? $this->resourceRelations->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateResourceRelationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceRelations'])) {
            $model->resourceRelations = resourceRelations::fromMap($map['ResourceRelations']);
        }

        return $model;
    }
}
