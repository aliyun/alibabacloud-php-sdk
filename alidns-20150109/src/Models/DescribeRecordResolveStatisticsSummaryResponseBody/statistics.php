<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordResolveStatisticsSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @description The number of resolution requests.
     *
     * @example 330
     *
     * @var string
     */
    public $count;

    /**
     * @description The domain name.
     *
     * @example tes.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The type of the domain name. Valid values: PUBLIC and CACHE. PUBLIC indicates an authoritative domain name. CACHE indicates a cache-accelerated domain name.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $domainType;

    /**
     * @description 子域名
     *
     * @example test.example.com
     *
     * @var string
     */
    public $subDomain;
    protected $_name = [
        'count'      => 'Count',
        'domainName' => 'DomainName',
        'domainType' => 'DomainType',
        'subDomain'  => 'SubDomain',
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
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }

        return $model;
    }
}
