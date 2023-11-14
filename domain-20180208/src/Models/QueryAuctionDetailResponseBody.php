<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class QueryAuctionDetailResponseBody extends Model
{
    /**
     * @example 1515961936000
     *
     * @var int
     */
    public $auctionEndTime;

    /**
     * @example 123456
     *
     * @var string
     */
    public $auctionId;

    /**
     * @example 1515961936000
     *
     * @var int
     */
    public $bookEndTime;

    /**
     * @example 4
     *
     * @var string
     */
    public $bookedPartner;

    /**
     * @example RMB
     *
     * @var string
     */
    public $currency;

    /**
     * @example 1515961936000
     *
     * @var int
     */
    public $deliveryTime;

    /**
     * @example test.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 0
     *
     * @var string
     */
    public $domainType;

    /**
     * @example 0
     *
     * @var string
     */
    public $failCode;

    /**
     * @example 100
     *
     * @var float
     */
    public $highBid;

    /**
     * @example abc
     *
     * @var string
     */
    public $highBidder;

    /**
     * @example 110
     *
     * @var float
     */
    public $nextValidBid;

    /**
     * @example 4
     *
     * @var string
     */
    public $partnerType;

    /**
     * @example 1515961936000
     *
     * @var int
     */
    public $payEndTime;

    /**
     * @example 200
     *
     * @var float
     */
    public $payPrice;

    /**
     * @example 1
     *
     * @var string
     */
    public $payStatus;

    /**
     * @example 0
     *
     * @var string
     */
    public $produceStatus;

    /**
     * @example UUID
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $reserveMet;

    /**
     * @var float
     */
    public $reservePrice;

    /**
     * @example 2
     *
     * @var string
     */
    public $status;

    /**
     * @example 50
     *
     * @var float
     */
    public $transferInPrice;

    /**
     * @example 100
     *
     * @var float
     */
    public $yourCurrentBid;

    /**
     * @example 120
     *
     * @var float
     */
    public $yourMaxBid;
    protected $_name = [
        'auctionEndTime'  => 'AuctionEndTime',
        'auctionId'       => 'AuctionId',
        'bookEndTime'     => 'BookEndTime',
        'bookedPartner'   => 'BookedPartner',
        'currency'        => 'Currency',
        'deliveryTime'    => 'DeliveryTime',
        'domainName'      => 'DomainName',
        'domainType'      => 'DomainType',
        'failCode'        => 'FailCode',
        'highBid'         => 'HighBid',
        'highBidder'      => 'HighBidder',
        'nextValidBid'    => 'NextValidBid',
        'partnerType'     => 'PartnerType',
        'payEndTime'      => 'PayEndTime',
        'payPrice'        => 'PayPrice',
        'payStatus'       => 'PayStatus',
        'produceStatus'   => 'ProduceStatus',
        'requestId'       => 'RequestId',
        'reserveMet'      => 'ReserveMet',
        'reservePrice'    => 'ReservePrice',
        'status'          => 'Status',
        'transferInPrice' => 'TransferInPrice',
        'yourCurrentBid'  => 'YourCurrentBid',
        'yourMaxBid'      => 'YourMaxBid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auctionEndTime) {
            $res['AuctionEndTime'] = $this->auctionEndTime;
        }
        if (null !== $this->auctionId) {
            $res['AuctionId'] = $this->auctionId;
        }
        if (null !== $this->bookEndTime) {
            $res['BookEndTime'] = $this->bookEndTime;
        }
        if (null !== $this->bookedPartner) {
            $res['BookedPartner'] = $this->bookedPartner;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->deliveryTime) {
            $res['DeliveryTime'] = $this->deliveryTime;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->failCode) {
            $res['FailCode'] = $this->failCode;
        }
        if (null !== $this->highBid) {
            $res['HighBid'] = $this->highBid;
        }
        if (null !== $this->highBidder) {
            $res['HighBidder'] = $this->highBidder;
        }
        if (null !== $this->nextValidBid) {
            $res['NextValidBid'] = $this->nextValidBid;
        }
        if (null !== $this->partnerType) {
            $res['PartnerType'] = $this->partnerType;
        }
        if (null !== $this->payEndTime) {
            $res['PayEndTime'] = $this->payEndTime;
        }
        if (null !== $this->payPrice) {
            $res['PayPrice'] = $this->payPrice;
        }
        if (null !== $this->payStatus) {
            $res['PayStatus'] = $this->payStatus;
        }
        if (null !== $this->produceStatus) {
            $res['ProduceStatus'] = $this->produceStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reserveMet) {
            $res['ReserveMet'] = $this->reserveMet;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transferInPrice) {
            $res['TransferInPrice'] = $this->transferInPrice;
        }
        if (null !== $this->yourCurrentBid) {
            $res['YourCurrentBid'] = $this->yourCurrentBid;
        }
        if (null !== $this->yourMaxBid) {
            $res['YourMaxBid'] = $this->yourMaxBid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAuctionDetailResponseBody
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
        if (isset($map['BookEndTime'])) {
            $model->bookEndTime = $map['BookEndTime'];
        }
        if (isset($map['BookedPartner'])) {
            $model->bookedPartner = $map['BookedPartner'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DeliveryTime'])) {
            $model->deliveryTime = $map['DeliveryTime'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['FailCode'])) {
            $model->failCode = $map['FailCode'];
        }
        if (isset($map['HighBid'])) {
            $model->highBid = $map['HighBid'];
        }
        if (isset($map['HighBidder'])) {
            $model->highBidder = $map['HighBidder'];
        }
        if (isset($map['NextValidBid'])) {
            $model->nextValidBid = $map['NextValidBid'];
        }
        if (isset($map['PartnerType'])) {
            $model->partnerType = $map['PartnerType'];
        }
        if (isset($map['PayEndTime'])) {
            $model->payEndTime = $map['PayEndTime'];
        }
        if (isset($map['PayPrice'])) {
            $model->payPrice = $map['PayPrice'];
        }
        if (isset($map['PayStatus'])) {
            $model->payStatus = $map['PayStatus'];
        }
        if (isset($map['ProduceStatus'])) {
            $model->produceStatus = $map['ProduceStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReserveMet'])) {
            $model->reserveMet = $map['ReserveMet'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TransferInPrice'])) {
            $model->transferInPrice = $map['TransferInPrice'];
        }
        if (isset($map['YourCurrentBid'])) {
            $model->yourCurrentBid = $map['YourCurrentBid'];
        }
        if (isset($map['YourMaxBid'])) {
            $model->yourMaxBid = $map['YourMaxBid'];
        }

        return $model;
    }
}
