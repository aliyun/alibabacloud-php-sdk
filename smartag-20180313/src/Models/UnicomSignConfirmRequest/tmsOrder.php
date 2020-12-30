<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\UnicomSignConfirmRequest;

use AlibabaCloud\Tea\Model;

class tmsOrder extends Model
{
    /**
     * @var string
     */
    public $signingTime;

    /**
     * @var string
     */
    public $tradeId;

    /**
     * @var string
     */
    public $tmsOrderCode;

    /**
     * @var string
     */
    public $tmsCode;
    protected $_name = [
        'signingTime'  => 'SigningTime',
        'tradeId'      => 'TradeId',
        'tmsOrderCode' => 'TmsOrderCode',
        'tmsCode'      => 'TmsCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signingTime) {
            $res['SigningTime'] = $this->signingTime;
        }
        if (null !== $this->tradeId) {
            $res['TradeId'] = $this->tradeId;
        }
        if (null !== $this->tmsOrderCode) {
            $res['TmsOrderCode'] = $this->tmsOrderCode;
        }
        if (null !== $this->tmsCode) {
            $res['TmsCode'] = $this->tmsCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tmsOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SigningTime'])) {
            $model->signingTime = $map['SigningTime'];
        }
        if (isset($map['TradeId'])) {
            $model->tradeId = $map['TradeId'];
        }
        if (isset($map['TmsOrderCode'])) {
            $model->tmsOrderCode = $map['TmsOrderCode'];
        }
        if (isset($map['TmsCode'])) {
            $model->tmsCode = $map['TmsCode'];
        }

        return $model;
    }
}
