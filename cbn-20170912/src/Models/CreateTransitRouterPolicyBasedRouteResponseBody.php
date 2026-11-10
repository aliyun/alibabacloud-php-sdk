<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class CreateTransitRouterPolicyBasedRouteResponseBody extends Model
{
    /**
     * @var string
     */
    public $policyBasedRouteId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyBasedRouteId' => 'PolicyBasedRouteId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyBasedRouteId) {
            $res['PolicyBasedRouteId'] = $this->policyBasedRouteId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PolicyBasedRouteId'])) {
            $model->policyBasedRouteId = $map['PolicyBasedRouteId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
