<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponseBody\addressPools;
use AlibabaCloud\Tea\Model;

class DescribeCloudGtmAddressReferenceResponseBody extends Model
{
    /**
     * @example 223.5.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @example addr-89564584963974**40
     *
     * @var string
     */
    public $addressId;

    /**
     * @var addressPools
     */
    public $addressPools;

    /**
     * @example Address-1
     *
     * @var string
     */
    public $name;

    /**
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'address'      => 'Address',
        'addressId'    => 'AddressId',
        'addressPools' => 'AddressPools',
        'name'         => 'Name',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }
        if (null !== $this->addressPools) {
            $res['AddressPools'] = null !== $this->addressPools ? $this->addressPools->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudGtmAddressReferenceResponseBody
     */
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
