<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohDomainStatisticsSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $httpCount;

    /**
     * @var int
     */
    public $httpsCount;

    /**
     * @var int
     */
    public $ipCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $v4HttpCount;

    /**
     * @var int
     */
    public $v4HttpsCount;

    /**
     * @var int
     */
    public $v6HttpCount;

    /**
     * @var int
     */
    public $v6HttpsCount;
    protected $_name = [
        'domainName'   => 'DomainName',
        'httpCount'    => 'HttpCount',
        'httpsCount'   => 'HttpsCount',
        'ipCount'      => 'IpCount',
        'totalCount'   => 'TotalCount',
        'v4HttpCount'  => 'V4HttpCount',
        'v4HttpsCount' => 'V4HttpsCount',
        'v6HttpCount'  => 'V6HttpCount',
        'v6HttpsCount' => 'V6HttpsCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->httpCount) {
            $res['HttpCount'] = $this->httpCount;
        }
        if (null !== $this->httpsCount) {
            $res['HttpsCount'] = $this->httpsCount;
        }
        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->v4HttpCount) {
            $res['V4HttpCount'] = $this->v4HttpCount;
        }
        if (null !== $this->v4HttpsCount) {
            $res['V4HttpsCount'] = $this->v4HttpsCount;
        }
        if (null !== $this->v6HttpCount) {
            $res['V6HttpCount'] = $this->v6HttpCount;
        }
        if (null !== $this->v6HttpsCount) {
            $res['V6HttpsCount'] = $this->v6HttpsCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['HttpCount'])) {
            $model->httpCount = $map['HttpCount'];
        }
        if (isset($map['HttpsCount'])) {
            $model->httpsCount = $map['HttpsCount'];
        }
        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['V4HttpCount'])) {
            $model->v4HttpCount = $map['V4HttpCount'];
        }
        if (isset($map['V4HttpsCount'])) {
            $model->v4HttpsCount = $map['V4HttpsCount'];
        }
        if (isset($map['V6HttpCount'])) {
            $model->v6HttpCount = $map['V6HttpCount'];
        }
        if (isset($map['V6HttpsCount'])) {
            $model->v6HttpsCount = $map['V6HttpsCount'];
        }

        return $model;
    }
}
