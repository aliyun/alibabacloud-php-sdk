<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class QueryBookingDomainInfoResponseBody extends Model
{
    /**
     * @example 1234
     *
     * @var int
     */
    public $auctionId;

    /**
     * @example 1517985730419
     *
     * @var int
     */
    public $bookEndTime;

    /**
     * @example USD
     *
     * @var string
     */
    public $currency;

    /**
     * @example 15
     *
     * @var float
     */
    public $maxBid;

    /**
     * @example 4
     *
     * @var string
     */
    public $partnerType;

    /**
     * @example 234234njhjkhkj
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $snatchNo;

    /**
     * @example 17
     *
     * @var float
     */
    public $transferInPrice;
    protected $_name = [
        'auctionId'       => 'AuctionId',
        'bookEndTime'     => 'BookEndTime',
        'currency'        => 'Currency',
        'maxBid'          => 'MaxBid',
        'partnerType'     => 'PartnerType',
        'requestId'       => 'RequestId',
        'snatchNo'        => 'SnatchNo',
        'transferInPrice' => 'TransferInPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auctionId) {
            $res['AuctionId'] = $this->auctionId;
        }
        if (null !== $this->bookEndTime) {
            $res['BookEndTime'] = $this->bookEndTime;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->maxBid) {
            $res['MaxBid'] = $this->maxBid;
        }
        if (null !== $this->partnerType) {
            $res['PartnerType'] = $this->partnerType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snatchNo) {
            $res['SnatchNo'] = $this->snatchNo;
        }
        if (null !== $this->transferInPrice) {
            $res['TransferInPrice'] = $this->transferInPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryBookingDomainInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuctionId'])) {
            $model->auctionId = $map['AuctionId'];
        }
        if (isset($map['BookEndTime'])) {
            $model->bookEndTime = $map['BookEndTime'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['MaxBid'])) {
            $model->maxBid = $map['MaxBid'];
        }
        if (isset($map['PartnerType'])) {
            $model->partnerType = $map['PartnerType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnatchNo'])) {
            $model->snatchNo = $map['SnatchNo'];
        }
        if (isset($map['TransferInPrice'])) {
            $model->transferInPrice = $map['TransferInPrice'];
        }

        return $model;
    }
}
