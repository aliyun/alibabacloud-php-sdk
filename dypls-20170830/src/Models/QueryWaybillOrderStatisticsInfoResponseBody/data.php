<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\QueryWaybillOrderStatisticsInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $aliyunpriceAmount;

    /**
     * @var int
     */
    public $cancelCount;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gotCount;

    /**
     * @var int
     */
    public $orderTotal;
    protected $_name = [
        'aliyunpriceAmount' => 'AliyunpriceAmount',
        'cancelCount'       => 'CancelCount',
        'gmtCreate'         => 'GmtCreate',
        'gotCount'          => 'GotCount',
        'orderTotal'        => 'OrderTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunpriceAmount) {
            $res['AliyunpriceAmount'] = $this->aliyunpriceAmount;
        }
        if (null !== $this->cancelCount) {
            $res['CancelCount'] = $this->cancelCount;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gotCount) {
            $res['GotCount'] = $this->gotCount;
        }
        if (null !== $this->orderTotal) {
            $res['OrderTotal'] = $this->orderTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunpriceAmount'])) {
            $model->aliyunpriceAmount = $map['AliyunpriceAmount'];
        }
        if (isset($map['CancelCount'])) {
            $model->cancelCount = $map['CancelCount'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GotCount'])) {
            $model->gotCount = $map['GotCount'];
        }
        if (isset($map['OrderTotal'])) {
            $model->orderTotal = $map['OrderTotal'];
        }

        return $model;
    }
}
