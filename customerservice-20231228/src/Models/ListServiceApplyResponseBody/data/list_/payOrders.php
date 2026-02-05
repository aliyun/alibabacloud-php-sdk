<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class payOrders extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $compassCommodityCode;

    /**
     * @var string
     */
    public $compassCommodityName;

    /**
     * @var string
     */
    public $creatorEmpId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifierEmpId;

    /**
     * @var mixed[]
     */
    public $operate;

    /**
     * @var mixed
     */
    public $orderDetail;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var float
     */
    public $payAmount;

    /**
     * @var string
     */
    public $payTime;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $reneWalUrl;

    /**
     * @var mixed[]
     */
    public $serviceContentMap;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusStr;

    /**
     * @var int
     */
    public $supportDays;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'amount' => 'amount',
        'compassCommodityCode' => 'compassCommodityCode',
        'compassCommodityName' => 'compassCommodityName',
        'creatorEmpId' => 'creatorEmpId',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'modifierEmpId' => 'modifierEmpId',
        'operate' => 'operate',
        'orderDetail' => 'orderDetail',
        'orderId' => 'orderId',
        'originalPrice' => 'originalPrice',
        'payAmount' => 'payAmount',
        'payTime' => 'payTime',
        'productName' => 'productName',
        'reneWalUrl' => 'reneWalUrl',
        'serviceContentMap' => 'serviceContentMap',
        'status' => 'status',
        'statusStr' => 'statusStr',
        'supportDays' => 'supportDays',
        'uid' => 'uid',
        'url' => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->operate)) {
            Model::validateArray($this->operate);
        }
        if (\is_array($this->serviceContentMap)) {
            Model::validateArray($this->serviceContentMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->compassCommodityCode) {
            $res['compassCommodityCode'] = $this->compassCommodityCode;
        }

        if (null !== $this->compassCommodityName) {
            $res['compassCommodityName'] = $this->compassCommodityName;
        }

        if (null !== $this->creatorEmpId) {
            $res['creatorEmpId'] = $this->creatorEmpId;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->modifierEmpId) {
            $res['modifierEmpId'] = $this->modifierEmpId;
        }

        if (null !== $this->operate) {
            if (\is_array($this->operate)) {
                $res['operate'] = [];
                foreach ($this->operate as $key1 => $value1) {
                    $res['operate'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->orderDetail) {
            $res['orderDetail'] = $this->orderDetail;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->originalPrice) {
            $res['originalPrice'] = $this->originalPrice;
        }

        if (null !== $this->payAmount) {
            $res['payAmount'] = $this->payAmount;
        }

        if (null !== $this->payTime) {
            $res['payTime'] = $this->payTime;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->reneWalUrl) {
            $res['reneWalUrl'] = $this->reneWalUrl;
        }

        if (null !== $this->serviceContentMap) {
            if (\is_array($this->serviceContentMap)) {
                $res['serviceContentMap'] = [];
                foreach ($this->serviceContentMap as $key1 => $value1) {
                    $res['serviceContentMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusStr) {
            $res['statusStr'] = $this->statusStr;
        }

        if (null !== $this->supportDays) {
            $res['supportDays'] = $this->supportDays;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['compassCommodityCode'])) {
            $model->compassCommodityCode = $map['compassCommodityCode'];
        }

        if (isset($map['compassCommodityName'])) {
            $model->compassCommodityName = $map['compassCommodityName'];
        }

        if (isset($map['creatorEmpId'])) {
            $model->creatorEmpId = $map['creatorEmpId'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['modifierEmpId'])) {
            $model->modifierEmpId = $map['modifierEmpId'];
        }

        if (isset($map['operate'])) {
            if (!empty($map['operate'])) {
                $model->operate = [];
                foreach ($map['operate'] as $key1 => $value1) {
                    $model->operate[$key1] = $value1;
                }
            }
        }

        if (isset($map['orderDetail'])) {
            $model->orderDetail = $map['orderDetail'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['originalPrice'])) {
            $model->originalPrice = $map['originalPrice'];
        }

        if (isset($map['payAmount'])) {
            $model->payAmount = $map['payAmount'];
        }

        if (isset($map['payTime'])) {
            $model->payTime = $map['payTime'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['reneWalUrl'])) {
            $model->reneWalUrl = $map['reneWalUrl'];
        }

        if (isset($map['serviceContentMap'])) {
            if (!empty($map['serviceContentMap'])) {
                $model->serviceContentMap = [];
                foreach ($map['serviceContentMap'] as $key1 => $value1) {
                    $model->serviceContentMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusStr'])) {
            $model->statusStr = $map['statusStr'];
        }

        if (isset($map['supportDays'])) {
            $model->supportDays = $map['supportDays'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
