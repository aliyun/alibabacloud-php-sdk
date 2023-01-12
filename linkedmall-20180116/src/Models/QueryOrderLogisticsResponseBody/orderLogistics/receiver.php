<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsResponseBody\orderLogistics;

use AlibabaCloud\Tea\Model;

class receiver extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 185****4801
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 457001
     *
     * @var string
     */
    public $zipCode;
    protected $_name = [
        'address'     => 'Address',
        'name'        => 'Name',
        'phoneNumber' => 'PhoneNumber',
        'zipCode'     => 'ZipCode',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->zipCode) {
            $res['ZipCode'] = $this->zipCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return receiver
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['ZipCode'])) {
            $model->zipCode = $map['ZipCode'];
        }

        return $model;
    }
}
