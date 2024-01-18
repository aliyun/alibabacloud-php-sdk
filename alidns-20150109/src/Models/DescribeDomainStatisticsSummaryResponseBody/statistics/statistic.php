<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsSummaryResponseBody\statistics;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @description The number of queries.
     *
     * @example 35509014
     *
     * @var int
     */
    public $count;

    /**
     * @description The domain name.
     *
     * @example ali-gslb.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @var string
     */
    public $resolveAnalysisStatus;
    protected $_name = [
        'count'                 => 'Count',
        'domainName'            => 'DomainName',
        'domainType'            => 'DomainType',
        'resolveAnalysisStatus' => 'resolveAnalysisStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->resolveAnalysisStatus) {
            $res['resolveAnalysisStatus'] = $this->resolveAnalysisStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['resolveAnalysisStatus'])) {
            $model->resolveAnalysisStatus = $map['resolveAnalysisStatus'];
        }

        return $model;
    }
}
