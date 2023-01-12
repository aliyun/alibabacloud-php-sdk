<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefreshSettlementOrderAccountResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 15******65
     *
     * @var string
     */
    public $accountNo;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $result;

    /**
     * @example TEST000000
     *
     * @var string
     */
    public $settleNo;
    protected $_name = [
        'accountNo' => 'AccountNo',
        'message'   => 'Message',
        'result'    => 'Result',
        'settleNo'  => 'SettleNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->settleNo) {
            $res['SettleNo'] = $this->settleNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['SettleNo'])) {
            $model->settleNo = $map['SettleNo'];
        }

        return $model;
    }
}
