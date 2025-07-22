<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class QueryExportAuctionDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $auctionEndTime;

    /**
     * @var string
     */
    public $auctionId;

    /**
     * @var string
     */
    public $auctionStatus;

    /**
     * @var string
     */
    public $bookEndTime;

    /**
     * @var string
     */
    public $buyerStatus;

    /**
     * @var float
     */
    public $currentPrice;

    /**
     * @var float
     */
    public $increasePrice;

    /**
     * @var float
     */
    public $myPrice;

    /**
     * @var float
     */
    public $myProxyPrice;

    /**
     * @var float
     */
    public $othersMaxProxyPrice;

    /**
     * @var float
     */
    public $proxyPrice;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'auctionEndTime' => 'AuctionEndTime',
        'auctionId' => 'AuctionId',
        'auctionStatus' => 'AuctionStatus',
        'bookEndTime' => 'BookEndTime',
        'buyerStatus' => 'BuyerStatus',
        'currentPrice' => 'CurrentPrice',
        'increasePrice' => 'IncreasePrice',
        'myPrice' => 'MyPrice',
        'myProxyPrice' => 'MyProxyPrice',
        'othersMaxProxyPrice' => 'OthersMaxProxyPrice',
        'proxyPrice' => 'ProxyPrice',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->auctionEndTime) {
            $res['AuctionEndTime'] = $this->auctionEndTime;
        }
        if (null !== $this->auctionId) {
            $res['AuctionId'] = $this->auctionId;
        }
        if (null !== $this->auctionStatus) {
            $res['AuctionStatus'] = $this->auctionStatus;
        }
        if (null !== $this->bookEndTime) {
            $res['BookEndTime'] = $this->bookEndTime;
        }
        if (null !== $this->buyerStatus) {
            $res['BuyerStatus'] = $this->buyerStatus;
        }
        if (null !== $this->currentPrice) {
            $res['CurrentPrice'] = $this->currentPrice;
        }
        if (null !== $this->increasePrice) {
            $res['IncreasePrice'] = $this->increasePrice;
        }
        if (null !== $this->myPrice) {
            $res['MyPrice'] = $this->myPrice;
        }
        if (null !== $this->myProxyPrice) {
            $res['MyProxyPrice'] = $this->myProxyPrice;
        }
        if (null !== $this->othersMaxProxyPrice) {
            $res['OthersMaxProxyPrice'] = $this->othersMaxProxyPrice;
        }
        if (null !== $this->proxyPrice) {
            $res['ProxyPrice'] = $this->proxyPrice;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryExportAuctionDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuctionEndTime'])) {
            $model->auctionEndTime = $map['AuctionEndTime'];
        }
        if (isset($map['AuctionId'])) {
            $model->auctionId = $map['AuctionId'];
        }
        if (isset($map['AuctionStatus'])) {
            $model->auctionStatus = $map['AuctionStatus'];
        }
        if (isset($map['BookEndTime'])) {
            $model->bookEndTime = $map['BookEndTime'];
        }
        if (isset($map['BuyerStatus'])) {
            $model->buyerStatus = $map['BuyerStatus'];
        }
        if (isset($map['CurrentPrice'])) {
            $model->currentPrice = $map['CurrentPrice'];
        }
        if (isset($map['IncreasePrice'])) {
            $model->increasePrice = $map['IncreasePrice'];
        }
        if (isset($map['MyPrice'])) {
            $model->myPrice = $map['MyPrice'];
        }
        if (isset($map['MyProxyPrice'])) {
            $model->myProxyPrice = $map['MyProxyPrice'];
        }
        if (isset($map['OthersMaxProxyPrice'])) {
            $model->othersMaxProxyPrice = $map['OthersMaxProxyPrice'];
        }
        if (isset($map['ProxyPrice'])) {
            $model->proxyPrice = $map['ProxyPrice'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
