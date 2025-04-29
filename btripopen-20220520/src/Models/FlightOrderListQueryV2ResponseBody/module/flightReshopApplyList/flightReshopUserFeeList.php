<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightReshopApplyList;

use AlibabaCloud\Dara\Model;

class flightReshopUserFeeList extends Model
{
    /**
     * @var float
     */
    public $changeFee;

    /**
     * @var float
     */
    public $reshopCorpAmount;

    /**
     * @var float
     */
    public $reshopPersonAmount;

    /**
     * @var float
     */
    public $upgradeFee;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'changeFee' => 'change_fee',
        'reshopCorpAmount' => 'reshop_corp_amount',
        'reshopPersonAmount' => 'reshop_person_amount',
        'upgradeFee' => 'upgrade_fee',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeFee) {
            $res['change_fee'] = $this->changeFee;
        }

        if (null !== $this->reshopCorpAmount) {
            $res['reshop_corp_amount'] = $this->reshopCorpAmount;
        }

        if (null !== $this->reshopPersonAmount) {
            $res['reshop_person_amount'] = $this->reshopPersonAmount;
        }

        if (null !== $this->upgradeFee) {
            $res['upgrade_fee'] = $this->upgradeFee;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['change_fee'])) {
            $model->changeFee = $map['change_fee'];
        }

        if (isset($map['reshop_corp_amount'])) {
            $model->reshopCorpAmount = $map['reshop_corp_amount'];
        }

        if (isset($map['reshop_person_amount'])) {
            $model->reshopPersonAmount = $map['reshop_person_amount'];
        }

        if (isset($map['upgrade_fee'])) {
            $model->upgradeFee = $map['upgrade_fee'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
