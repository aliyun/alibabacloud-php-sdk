<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\QueryPendingPushListResponseBody\module;

use AlibabaCloud\Dara\Model;

class pushList extends Model
{
    /**
     * @var int
     */
    public $domainCount;

    /**
     * @var string
     */
    public $domainList;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $outBizId;

    /**
     * @var string
     */
    public $pushNo;

    /**
     * @var string
     */
    public $pushTime;

    /**
     * @var string
     */
    public $sellerRemark;

    /**
     * @var string
     */
    public $tradeMoney;
    protected $_name = [
        'domainCount' => 'DomainCount',
        'domainList' => 'DomainList',
        'expireTime' => 'ExpireTime',
        'outBizId' => 'OutBizId',
        'pushNo' => 'PushNo',
        'pushTime' => 'PushTime',
        'sellerRemark' => 'SellerRemark',
        'tradeMoney' => 'TradeMoney',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }

        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }

        if (null !== $this->pushNo) {
            $res['PushNo'] = $this->pushNo;
        }

        if (null !== $this->pushTime) {
            $res['PushTime'] = $this->pushTime;
        }

        if (null !== $this->sellerRemark) {
            $res['SellerRemark'] = $this->sellerRemark;
        }

        if (null !== $this->tradeMoney) {
            $res['TradeMoney'] = $this->tradeMoney;
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
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }

        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }

        if (isset($map['PushNo'])) {
            $model->pushNo = $map['PushNo'];
        }

        if (isset($map['PushTime'])) {
            $model->pushTime = $map['PushTime'];
        }

        if (isset($map['SellerRemark'])) {
            $model->sellerRemark = $map['SellerRemark'];
        }

        if (isset($map['TradeMoney'])) {
            $model->tradeMoney = $map['TradeMoney'];
        }

        return $model;
    }
}
