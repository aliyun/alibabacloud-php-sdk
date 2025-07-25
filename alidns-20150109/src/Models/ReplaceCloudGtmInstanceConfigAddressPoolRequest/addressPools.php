<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmInstanceConfigAddressPoolRequest;

use AlibabaCloud\Tea\Model;

class addressPools extends Model
{
    /**
     * @description The ID of the address pool. This ID uniquely identifies the address pool.
     *
     *   If you specify this parameter, the address pools that are associated with the desired instance are removed and the instance is associated with new address pools.
     *   If this parameter is left empty, the address pools that are associated with the desired instance are removed and no address pool is associated with the instance.
     *
     * @example pool-89564542105737**12
     *
     * @var string
     */
    public $addressPoolId;

    /**
     * @description The DNS request sources.
     *
     * @var string[]
     */
    public $requestSource;

    /**
     * @description The sequence number of the new address pool. The address pool with the smallest sequence number is preferentially returned for DNS requests from any source. The sequence number specifies the priority for returning the address pool. A smaller sequence number specifies a higher priority.
     *
     * @example 1
     *
     * @var int
     */
    public $serialNumber;

    /**
     * @description The weight value of the new address pool. You can set a different weight value for each address pool. This way, address pools are returned based on the weight values for Domain Name System (DNS) requests. A weight value must be an integer that ranges from 1 to 100.
     *
     * @example 1
     *
     * @var int
     */
    public $weightValue;
    protected $_name = [
        'addressPoolId' => 'AddressPoolId',
        'requestSource' => 'RequestSource',
        'serialNumber' => 'SerialNumber',
        'weightValue' => 'WeightValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
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
     * @return addressPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressPoolId'])) {
            $model->addressPoolId = $map['AddressPoolId'];
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
