<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\QueryBidRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 50
     *
     * @var float
     */
    public $bid;

    /**
     * @example 1515961936000
     *
     * @var int
     */
    public $bidTime;

    /**
     * @example abc
     *
     * @var string
     */
    public $bidder;

    /**
     * @example RMB
     *
     * @var string
     */
    public $currency;

    /**
     * @example test.com
     *
     * @var string
     */
    public $domainName;
    protected $_name = [
        'bid'        => 'Bid',
        'bidTime'    => 'BidTime',
        'bidder'     => 'Bidder',
        'currency'   => 'Currency',
        'domainName' => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->bidTime) {
            $res['BidTime'] = $this->bidTime;
        }
        if (null !== $this->bidder) {
            $res['Bidder'] = $this->bidder;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['BidTime'])) {
            $model->bidTime = $map['BidTime'];
        }
        if (isset($map['Bidder'])) {
            $model->bidder = $map['Bidder'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
