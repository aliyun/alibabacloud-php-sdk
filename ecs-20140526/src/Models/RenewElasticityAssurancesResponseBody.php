<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RenewElasticityAssurancesResponseBody\privatePoolOptionsIdSet;

class RenewElasticityAssurancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var privatePoolOptionsIdSet
     */
    public $privatePoolOptionsIdSet;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderId' => 'OrderId',
        'privatePoolOptionsIdSet' => 'PrivatePoolOptionsIdSet',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->privatePoolOptionsIdSet) {
            $this->privatePoolOptionsIdSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->privatePoolOptionsIdSet) {
            $res['PrivatePoolOptionsIdSet'] = null !== $this->privatePoolOptionsIdSet ? $this->privatePoolOptionsIdSet->toArray($noStream) : $this->privatePoolOptionsIdSet;
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
