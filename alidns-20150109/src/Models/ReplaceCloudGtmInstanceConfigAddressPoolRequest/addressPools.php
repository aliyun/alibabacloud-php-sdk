<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmInstanceConfigAddressPoolRequest;

use AlibabaCloud\Tea\Model;

class addressPools extends Model
{
    /**
     * @example pool-89564542105737**12
     *
     * @var string
     */
    public $addressPoolId;

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
        'addressPoolId' => 'AddressPoolId',
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
