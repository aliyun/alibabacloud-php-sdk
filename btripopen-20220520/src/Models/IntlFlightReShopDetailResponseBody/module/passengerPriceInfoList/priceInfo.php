<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module\passengerPriceInfoList;

use AlibabaCloud\Dara\Model;

class priceInfo extends Model
{
    /**
     * @var int
     */
    public $handlingAmount;

    /**
     * @var int
     */
    public $taxDiffAmount;

    /**
     * @var int
     */
    public $totalAmount;

    /**
     * @var int
     */
    public $upgradeAmount;
    protected $_name = [
        'handlingAmount' => 'handling_amount',
        'taxDiffAmount' => 'tax_diff_amount',
        'totalAmount' => 'total_amount',
        'upgradeAmount' => 'upgrade_amount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->handlingAmount) {
            $res['handling_amount'] = $this->handlingAmount;
        }

        if (null !== $this->taxDiffAmount) {
            $res['tax_diff_amount'] = $this->taxDiffAmount;
        }

        if (null !== $this->totalAmount) {
            $res['total_amount'] = $this->totalAmount;
        }

        if (null !== $this->upgradeAmount) {
            $res['upgrade_amount'] = $this->upgradeAmount;
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
        if (isset($map['handling_amount'])) {
            $model->handlingAmount = $map['handling_amount'];
        }

        if (isset($map['tax_diff_amount'])) {
            $model->taxDiffAmount = $map['tax_diff_amount'];
        }

        if (isset($map['total_amount'])) {
            $model->totalAmount = $map['total_amount'];
        }

        if (isset($map['upgrade_amount'])) {
            $model->upgradeAmount = $map['upgrade_amount'];
        }

        return $model;
    }
}
