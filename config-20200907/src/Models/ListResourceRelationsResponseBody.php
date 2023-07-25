<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceRelationsResponseBody\resourceRelations;
use AlibabaCloud\Tea\Model;

class ListResourceRelationsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 6525F8DE-5A8B-5AD3-A241-BBF5A259E5B2
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
     * @return ListResourceRelationsResponseBody
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
