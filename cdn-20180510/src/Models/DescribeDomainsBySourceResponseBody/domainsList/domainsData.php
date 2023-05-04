<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData\domainInfos;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData\domains;
use AlibabaCloud\Tea\Model;

class domainsData extends Model
{
    /**
     * @description Information about the domain name.
     *
     * @var domainInfos
     */
    public $domainInfos;

    /**
     * @description The domain names that correspond to each origin server.
     *
     * @var domains
     */
    public $domains;

    /**
     * @description The origin server.
     *
     * @example example.com
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'domainInfos' => 'DomainInfos',
        'domains'     => 'Domains',
        'source'      => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainInfos) {
            $res['DomainInfos'] = null !== $this->domainInfos ? $this->domainInfos->toMap() : null;
        }
        if (null !== $this->domains) {
            $res['Domains'] = null !== $this->domains ? $this->domains->toMap() : null;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainsData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainInfos'])) {
            $model->domainInfos = domainInfos::fromMap($map['DomainInfos']);
        }
        if (isset($map['Domains'])) {
            $model->domains = domains::fromMap($map['Domains']);
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
