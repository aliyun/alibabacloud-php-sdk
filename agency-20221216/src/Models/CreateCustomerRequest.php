<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomerRequest extends Model
{
    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $customerSource;

    /**
     * @var string
     */
    public $customerSubTrade;

    /**
     * @var string
     */
    public $customerTrade;

    /**
     * @var string
     */
    public $nation;
    protected $_name = [
        'customerName' => 'CustomerName',
        'customerSource' => 'CustomerSource',
        'customerSubTrade' => 'CustomerSubTrade',
        'customerTrade' => 'CustomerTrade',
        'nation' => 'Nation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
