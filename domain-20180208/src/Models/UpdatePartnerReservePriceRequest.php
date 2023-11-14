<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class UpdatePartnerReservePriceRequest extends Model
{
    /**
     * @var int
     */
    public $biddingId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $partnerType;

    /**
     * @var float
     */
    public $reservePrice;
    protected $_name = [
        'biddingId'    => 'BiddingId',
        'domainName'   => 'DomainName',
        'partnerType'  => 'PartnerType',
        'reservePrice' => 'ReservePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->biddingId) {
            $res['BiddingId'] = $this->biddingId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->partnerType) {
            $res['PartnerType'] = $this->partnerType;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePartnerReservePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BiddingId'])) {
            $model->biddingId = $map['BiddingId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PartnerType'])) {
            $model->partnerType = $map['PartnerType'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }

        return $model;
    }
}
