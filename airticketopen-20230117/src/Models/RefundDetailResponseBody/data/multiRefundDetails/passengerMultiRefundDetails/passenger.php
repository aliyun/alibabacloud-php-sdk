<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\multiRefundDetails\passengerMultiRefundDetails;

use AlibabaCloud\Tea\Model;

class passenger extends Model
{
    /**
     * @description credential number
     *
     * @example 411***********4411
     *
     * @var string
     */
    public $document;

    /**
     * @description first name
     *
     * @example SAN
     *
     * @var string
     */
    public $firstName;

    /**
     * @description last name
     *
     * @example ZHANG
     *
     * @var string
     */
    public $lastName;
    protected $_name = [
        'document'  => 'document',
        'firstName' => 'first_name',
        'lastName'  => 'last_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->document) {
            $res['document'] = $this->document;
        }
        if (null !== $this->firstName) {
            $res['first_name'] = $this->firstName;
        }
        if (null !== $this->lastName) {
            $res['last_name'] = $this->lastName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passenger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['document'])) {
            $model->document = $map['document'];
        }
        if (isset($map['first_name'])) {
            $model->firstName = $map['first_name'];
        }
        if (isset($map['last_name'])) {
            $model->lastName = $map['last_name'];
        }

        return $model;
    }
}
