<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInvoiceForIsvResponseBody\result;

use AlibabaCloud\Dara\Model;

class evaluateList extends Model
{
    /**
     * @var bool
     */
    public $agent;

    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $bizTimeStr;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $outBizId;

    /**
     * @var string
     */
    public $realAliyunPk;
    protected $_name = [
        'agent' => 'Agent',
        'amount' => 'Amount',
        'bizTimeStr' => 'BizTimeStr',
        'id' => 'Id',
        'orderType' => 'OrderType',
        'outBizId' => 'OutBizId',
        'realAliyunPk' => 'RealAliyunPk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agent) {
            $res['Agent'] = $this->agent;
        }

        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->bizTimeStr) {
            $res['BizTimeStr'] = $this->bizTimeStr;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }

        if (null !== $this->realAliyunPk) {
            $res['RealAliyunPk'] = $this->realAliyunPk;
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
        if (isset($map['Agent'])) {
            $model->agent = $map['Agent'];
        }

        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['BizTimeStr'])) {
            $model->bizTimeStr = $map['BizTimeStr'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }

        if (isset($map['RealAliyunPk'])) {
            $model->realAliyunPk = $map['RealAliyunPk'];
        }

        return $model;
    }
}
