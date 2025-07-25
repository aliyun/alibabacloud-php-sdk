<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmAddressPoolAddressRequest;

use AlibabaCloud\Tea\Model;

class addresses extends Model
{
    /**
     * @description The ID of the new address. This ID uniquely identifies the address.
     *
     *   If you specify this parameter, the original addresses in the address pool will be deleted and replaced with new addresses.
     *   If you do not specify this parameter, all addresses in the address pool will be deleted and the address pool will be left empty.
     *
     * @example addr-89636516932803**44
     *
     * @var string
     */
    public $addressId;

    /**
     * @description The DNS request sources.
     *
     * @var string[]
     */
    public $requestSource;

    /**
     * @description The sequence number that specifies the priority for returning the new address. A smaller sequence number specifies a higher priority. This setting takes effect for new addresses.
     *
     * @example 1
     *
     * @var int
     */
    public $serialNumber;

    /**
     * @description The weight value of the new address. You can set a different weight value for each address. This way, addresses are returned based on the weight values for Domain Name System (DNS) requests. A weight value must be an integer that ranges from 1 to 100. This setting takes effect for new addresses.
     *
     * @example 1
     *
     * @var int
     */
    public $weightValue;
    protected $_name = [
        'addressId' => 'AddressId',
        'requestSource' => 'RequestSource',
        'serialNumber' => 'SerialNumber',
        'weightValue' => 'WeightValue',
    ];

    public function validate() {}

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
