<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAccountSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $domainCount;

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
    public $subDomainCount;

    /**
     * @var int
     */
    public $threatCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'domainCount'    => 'DomainCount',
        'httpCount'      => 'HttpCount',
        'httpsCount'     => 'HttpsCount',
        'subDomainCount' => 'SubDomainCount',
        'threatCount'    => 'ThreatCount',
        'totalCount'     => 'TotalCount',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->httpCount) {
            $res['HttpCount'] = $this->httpCount;
        }
        if (null !== $this->httpsCount) {
            $res['HttpsCount'] = $this->httpsCount;
        }
        if (null !== $this->subDomainCount) {
            $res['SubDomainCount'] = $this->subDomainCount;
        }
        if (null !== $this->threatCount) {
            $res['ThreatCount'] = $this->threatCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['HttpCount'])) {
            $model->httpCount = $map['HttpCount'];
        }
        if (isset($map['HttpsCount'])) {
            $model->httpsCount = $map['HttpsCount'];
        }
        if (isset($map['SubDomainCount'])) {
            $model->subDomainCount = $map['SubDomainCount'];
        }
        if (isset($map['ThreatCount'])) {
            $model->threatCount = $map['ThreatCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
