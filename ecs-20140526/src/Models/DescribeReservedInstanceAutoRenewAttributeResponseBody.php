<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstanceAutoRenewAttributeResponseBody\reservedInstanceRenewAttributes;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reservedInstanceRenewAttributes) {
            $res['ReservedInstanceRenewAttributes'] = null !== $this->reservedInstanceRenewAttributes ? $this->reservedInstanceRenewAttributes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReservedInstanceAutoRenewAttributeResponseBody
     */
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
