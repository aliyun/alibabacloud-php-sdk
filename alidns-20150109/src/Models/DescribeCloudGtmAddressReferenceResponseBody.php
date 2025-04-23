<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponseBody\addressPools;

class DescribeCloudGtmAddressReferenceResponseBody extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $addressId;

    /**
     * @var addressPools
     */
    public $addressPools;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'address' => 'Address',
        'addressId' => 'AddressId',
        'addressPools' => 'AddressPools',
        'name' => 'Name',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->addressPools) {
            $this->addressPools->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }

        if (null !== $this->addressPools) {
            $res['AddressPools'] = null !== $this->addressPools ? $this->addressPools->toArray($noStream) : $this->addressPools;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }

        if (isset($map['AddressPools'])) {
            $model->addressPools = addressPools::fromMap($map['AddressPools']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
