<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class DescribeNodeTypeResponseBody extends Model
{
    /**
     * @var int
     */
    public $eniHighDenseQuantity;

    /**
     * @var int
     */
    public $eniIpv6AddressQuantity;

    /**
     * @var int
     */
    public $eniPrivateIpAddressQuantity;

    /**
     * @var int
     */
    public $eniQuantity;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eniHighDenseQuantity' => 'EniHighDenseQuantity',
        'eniIpv6AddressQuantity' => 'EniIpv6AddressQuantity',
        'eniPrivateIpAddressQuantity' => 'EniPrivateIpAddressQuantity',
        'eniQuantity' => 'EniQuantity',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eniHighDenseQuantity) {
            $res['EniHighDenseQuantity'] = $this->eniHighDenseQuantity;
        }

        if (null !== $this->eniIpv6AddressQuantity) {
            $res['EniIpv6AddressQuantity'] = $this->eniIpv6AddressQuantity;
        }

        if (null !== $this->eniPrivateIpAddressQuantity) {
            $res['EniPrivateIpAddressQuantity'] = $this->eniPrivateIpAddressQuantity;
        }

        if (null !== $this->eniQuantity) {
            $res['EniQuantity'] = $this->eniQuantity;
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
        if (isset($map['EniHighDenseQuantity'])) {
            $model->eniHighDenseQuantity = $map['EniHighDenseQuantity'];
        }

        if (isset($map['EniIpv6AddressQuantity'])) {
            $model->eniIpv6AddressQuantity = $map['EniIpv6AddressQuantity'];
        }

        if (isset($map['EniPrivateIpAddressQuantity'])) {
            $model->eniPrivateIpAddressQuantity = $map['EniPrivateIpAddressQuantity'];
        }

        if (isset($map['EniQuantity'])) {
            $model->eniQuantity = $map['EniQuantity'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
