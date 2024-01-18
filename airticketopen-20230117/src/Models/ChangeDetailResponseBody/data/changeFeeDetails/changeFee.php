<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailResponseBody\data\changeFeeDetails;

use AlibabaCloud\Tea\Model;

class changeFee extends Model
{
    /**
     * @example 50
     *
     * @var float
     */
    public $serviceFee;

    /**
     * @example 20
     *
     * @var float
     */
    public $taxFee;

    /**
     * @example 30
     *
     * @var float
     */
    public $upgradeFee;
    protected $_name = [
        'serviceFee' => 'service_fee',
        'taxFee'     => 'tax_fee',
        'upgradeFee' => 'upgrade_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
        }
        if (null !== $this->taxFee) {
            $res['tax_fee'] = $this->taxFee;
        }
        if (null !== $this->upgradeFee) {
            $res['upgrade_fee'] = $this->upgradeFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeFee
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }
        if (isset($map['tax_fee'])) {
            $model->taxFee = $map['tax_fee'];
        }
        if (isset($map['upgrade_fee'])) {
            $model->upgradeFee = $map['upgrade_fee'];
        }

        return $model;
    }
}
