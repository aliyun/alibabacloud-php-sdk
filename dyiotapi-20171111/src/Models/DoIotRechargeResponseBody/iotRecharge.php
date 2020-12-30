<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotRechargeResponseBody;

use AlibabaCloud\Tea\Model;

class iotRecharge extends Model
{
    /**
     * @var string
     */
    public $orderNo;

    /**
     * @var string
     */
    public $doneCode;

    /**
     * @var string
     */
    public $orderResult;
    protected $_name = [
        'orderNo'     => 'OrderNo',
        'doneCode'    => 'DoneCode',
        'orderResult' => 'OrderResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderNo) {
            $res['OrderNo'] = $this->orderNo;
        }
        if (null !== $this->doneCode) {
            $res['DoneCode'] = $this->doneCode;
        }
        if (null !== $this->orderResult) {
            $res['OrderResult'] = $this->orderResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return iotRecharge
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderNo'])) {
            $model->orderNo = $map['OrderNo'];
        }
        if (isset($map['DoneCode'])) {
            $model->doneCode = $map['DoneCode'];
        }
        if (isset($map['OrderResult'])) {
            $model->orderResult = $map['OrderResult'];
        }

        return $model;
    }
}
