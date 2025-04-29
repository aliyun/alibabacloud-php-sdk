<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module;

use AlibabaCloud\Dara\Model;

class flightOrderUserFeeList extends Model
{
    /**
     * @var float
     */
    public $buildFee;

    /**
     * @var float
     */
    public $corpPayAmount;

    /**
     * @var float
     */
    public $oilFee;

    /**
     * @var float
     */
    public $personPayAmount;

    /**
     * @var float
     */
    public $ticketPrice;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'buildFee' => 'build_fee',
        'corpPayAmount' => 'corp_pay_amount',
        'oilFee' => 'oil_fee',
        'personPayAmount' => 'person_pay_amount',
        'ticketPrice' => 'ticket_price',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildFee) {
            $res['build_fee'] = $this->buildFee;
        }

        if (null !== $this->corpPayAmount) {
            $res['corp_pay_amount'] = $this->corpPayAmount;
        }

        if (null !== $this->oilFee) {
            $res['oil_fee'] = $this->oilFee;
        }

        if (null !== $this->personPayAmount) {
            $res['person_pay_amount'] = $this->personPayAmount;
        }

        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
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
        if (isset($map['build_fee'])) {
            $model->buildFee = $map['build_fee'];
        }

        if (isset($map['corp_pay_amount'])) {
            $model->corpPayAmount = $map['corp_pay_amount'];
        }

        if (isset($map['oil_fee'])) {
            $model->oilFee = $map['oil_fee'];
        }

        if (isset($map['person_pay_amount'])) {
            $model->personPayAmount = $map['person_pay_amount'];
        }

        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
