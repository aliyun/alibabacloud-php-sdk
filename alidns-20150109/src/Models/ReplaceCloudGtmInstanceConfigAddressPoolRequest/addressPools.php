<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmInstanceConfigAddressPoolRequest;

use AlibabaCloud\Dara\Model;

class addressPools extends Model
{
    /**
     * @var string
     */
    public $addressPoolId;
    /**
     * @var string[]
     */
    public $requestSource;
    /**
     * @var int
     */
    public $serialNumber;
    /**
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
        if (\is_array($this->requestSource)) {
            Model::validateArray($this->requestSource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }

        if (null !== $this->requestSource) {
            if (\is_array($this->requestSource)) {
                $res['RequestSource'] = [];
                $n1                   = 0;
                foreach ($this->requestSource as $item1) {
                    $res['RequestSource'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        if (null !== $this->weightValue) {
            $res['WeightValue'] = $this->weightValue;
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
        if (isset($map['AddressPoolId'])) {
            $model->addressPoolId = $map['AddressPoolId'];
        }

        if (isset($map['RequestSource'])) {
            if (!empty($map['RequestSource'])) {
                $model->requestSource = [];
                $n1                   = 0;
                foreach ($map['RequestSource'] as $item1) {
                    $model->requestSource[$n1++] = $item1;
                }
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
