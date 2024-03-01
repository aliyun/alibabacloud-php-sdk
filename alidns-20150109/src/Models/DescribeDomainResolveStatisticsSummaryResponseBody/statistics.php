<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainResolveStatisticsSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @description The number of DNS requests.
     *
     * @example 35509014
     *
     * @var string
     */
    public $count;

    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   PUBLIC: hosted public domain name
     *   CACHE: cache-accelerated domain name
     *
     * @example CACHE
     *
     * @var string
     */
    public $domainType;
    protected $_name = [
        'count'      => 'Count',
        'domainName' => 'DomainName',
        'domainType' => 'DomainType',
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

        return $model;
    }
}
