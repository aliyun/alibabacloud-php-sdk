<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomerRequest extends Model
{
    /**
     * @description Customer\"s name.
     *
     * @example DoorBell Marketing
     *
     * @var string
     */
    public $customerName;

    /**
     * @description The source/channel that allow client to connected with us. Please enumerate with Customer Source.
     *
     * @example website
     *
     * @var string
     */
    public $customerSource;

    /**
     * @description The sub-industry that Customer\"s business belongs to. Please enumerate with Customer Trade.
     *
     * @example 0101
     *
     * @var string
     */
    public $customerSubTrade;

    /**
     * @description The industry that Customer\"s business belongs to. Please enumerate with Customer Trade.
     *
     * @example 01
     *
     * @var string
     */
    public $customerTrade;

    /**
     * @description The region that Customer choose to launch the Cloud Service. Please use ListCountries to confirm the valid region list for current UID.
     *
     * @example AR
     *
     * @var string
     */
    public $nation;
    protected $_name = [
        'customerName'     => 'CustomerName',
        'customerSource'   => 'CustomerSource',
        'customerSubTrade' => 'CustomerSubTrade',
        'customerTrade'    => 'CustomerTrade',
        'nation'           => 'Nation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerName) {
            $res['CustomerName'] = $this->customerName;
        }
        if (null !== $this->customerSource) {
            $res['CustomerSource'] = $this->customerSource;
        }
        if (null !== $this->customerSubTrade) {
            $res['CustomerSubTrade'] = $this->customerSubTrade;
        }
        if (null !== $this->customerTrade) {
            $res['CustomerTrade'] = $this->customerTrade;
        }
        if (null !== $this->nation) {
            $res['Nation'] = $this->nation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerName'])) {
            $model->customerName = $map['CustomerName'];
        }
        if (isset($map['CustomerSource'])) {
            $model->customerSource = $map['CustomerSource'];
        }
        if (isset($map['CustomerSubTrade'])) {
            $model->customerSubTrade = $map['CustomerSubTrade'];
        }
        if (isset($map['CustomerTrade'])) {
            $model->customerTrade = $map['CustomerTrade'];
        }
        if (isset($map['Nation'])) {
            $model->nation = $map['Nation'];
        }

        return $model;
    }
}
