<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\ListAccountEcsQuotasResponseBody\ecsQuotas;
use AlibabaCloud\Tea\Model;

class ListAccountEcsQuotasResponseBody extends Model
{
    /**
     * @var ecsQuotas
     */
    public $ecsQuotas;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ecsQuotas' => 'EcsQuotas',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsQuotas) {
            $res['EcsQuotas'] = null !== $this->ecsQuotas ? $this->ecsQuotas->toMap() : null;
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
     * @return ListAccountEcsQuotasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsQuotas'])) {
            $model->ecsQuotas = ecsQuotas::fromMap($map['EcsQuotas']);
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
