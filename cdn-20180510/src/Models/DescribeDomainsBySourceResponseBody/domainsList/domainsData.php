<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData\domainInfos;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData\domains;
use AlibabaCloud\Tea\Model;

class domainsData extends Model
{
    /**
     * @var string
     */
    public $source;

    /**
     * @var domainInfos
     */
    public $domainInfos;

    /**
     * @var domains
     */
    public $domains;
    protected $_name = [
        'source'      => 'Source',
        'domainInfos' => 'DomainInfos',
        'domains'     => 'Domains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->domainInfos) {
            $res['DomainInfos'] = null !== $this->domainInfos ? $this->domainInfos->toMap() : null;
        }
        if (null !== $this->domains) {
            $res['Domains'] = null !== $this->domains ? $this->domains->toMap() : null;
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['DomainInfos'])) {
            $model->domainInfos = domainInfos::fromMap($map['DomainInfos']);
        }
        if (isset($map['Domains'])) {
            $model->domains = domains::fromMap($map['Domains']);
        }

        return $model;
    }
}
