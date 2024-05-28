<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmAddressPoolAddressRequest;

use AlibabaCloud\Tea\Model;

class addresses extends Model
{
    /**
     * @example addr-89636516932803**44
     *
     * @var string
     */
    public $addressId;

    /**
     * @var string[]
     */
    public $requestSource;

    /**
     * @example 1
     *
     * @var int
     */
    public $serialNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $weightValue;
    protected $_name = [
        'addressId'     => 'AddressId',
        'requestSource' => 'RequestSource',
        'serialNumber'  => 'SerialNumber',
        'weightValue'   => 'WeightValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }
        if (null !== $this->requestSource) {
            $res['RequestSource'] = $this->requestSource;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->weightValue) {
            $res['WeightValue'] = $this->weightValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }
        if (isset($map['RequestSource'])) {
            if (!empty($map['RequestSource'])) {
                $model->requestSource = $map['RequestSource'];
            }
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['WeightValue'])) {
            $model->weightValue = $map['WeightValue'];
        }

        return $model;
    }
}
