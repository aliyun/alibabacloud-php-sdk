<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceRelationsResponseBody\resourceRelations;

class ListAggregateResourceRelationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var resourceRelations
     */
    public $resourceRelations;
    protected $_name = [
        'requestId'         => 'RequestId',
        'resourceRelations' => 'ResourceRelations',
    ];

    public function validate()
    {
        if (null !== $this->resourceRelations) {
            $this->resourceRelations->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceRelations) {
            $res['ResourceRelations'] = null !== $this->resourceRelations ? $this->resourceRelations->toArray($noStream) : $this->resourceRelations;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
