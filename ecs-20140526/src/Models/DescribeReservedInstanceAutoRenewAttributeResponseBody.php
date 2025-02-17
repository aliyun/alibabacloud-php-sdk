<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstanceAutoRenewAttributeResponseBody\reservedInstanceRenewAttributes;

class DescribeReservedInstanceAutoRenewAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var reservedInstanceRenewAttributes
     */
    public $reservedInstanceRenewAttributes;
    protected $_name = [
        'requestId'                       => 'RequestId',
        'reservedInstanceRenewAttributes' => 'ReservedInstanceRenewAttributes',
    ];

    public function validate()
    {
        if (null !== $this->reservedInstanceRenewAttributes) {
            $this->reservedInstanceRenewAttributes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->reservedInstanceRenewAttributes) {
            $res['ReservedInstanceRenewAttributes'] = null !== $this->reservedInstanceRenewAttributes ? $this->reservedInstanceRenewAttributes->toArray($noStream) : $this->reservedInstanceRenewAttributes;
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

        if (isset($map['ReservedInstanceRenewAttributes'])) {
            $model->reservedInstanceRenewAttributes = reservedInstanceRenewAttributes::fromMap($map['ReservedInstanceRenewAttributes']);
        }

        return $model;
    }
}
