<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightModifyOrderList;

use AlibabaCloud\Tea\Model;

class passengerFee extends Model
{
    /**
     * @var int
     */
    public $modifyHandFee;

    /**
     * @var int
     */
    public $modifyUpgradeFee;

    /**
     * @var int
     */
    public $taxGap;

    /**
     * @example 01332
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'modifyHandFee'    => 'modify_hand_fee',
        'modifyUpgradeFee' => 'modify_upgrade_fee',
        'taxGap'           => 'tax_gap',
        'userId'           => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyHandFee) {
            $res['modify_hand_fee'] = $this->modifyHandFee;
        }
        if (null !== $this->modifyUpgradeFee) {
            $res['modify_upgrade_fee'] = $this->modifyUpgradeFee;
        }
        if (null !== $this->taxGap) {
            $res['tax_gap'] = $this->taxGap;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passengerFee
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['modify_hand_fee'])) {
            $model->modifyHandFee = $map['modify_hand_fee'];
        }
        if (isset($map['modify_upgrade_fee'])) {
            $model->modifyUpgradeFee = $map['modify_upgrade_fee'];
        }
        if (isset($map['tax_gap'])) {
            $model->taxGap = $map['tax_gap'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
