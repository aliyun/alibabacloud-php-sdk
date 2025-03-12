<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\RenewElasticityAssurancesResponseBody\privatePoolOptionsIdSet;
use AlibabaCloud\Tea\Model;

class RenewElasticityAssurancesResponseBody extends Model
{
    /**
     * @description The ID of the renewal order.
     *
     * @example 182372800****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The IDs of the elasticity assurances.
     *
     * @var privatePoolOptionsIdSet
     */
    public $privatePoolOptionsIdSet;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderId'                 => 'OrderId',
        'privatePoolOptionsIdSet' => 'PrivatePoolOptionsIdSet',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->privatePoolOptionsIdSet) {
            $res['PrivatePoolOptionsIdSet'] = null !== $this->privatePoolOptionsIdSet ? $this->privatePoolOptionsIdSet->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewElasticityAssurancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PrivatePoolOptionsIdSet'])) {
            $model->privatePoolOptionsIdSet = privatePoolOptionsIdSet::fromMap($map['PrivatePoolOptionsIdSet']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
