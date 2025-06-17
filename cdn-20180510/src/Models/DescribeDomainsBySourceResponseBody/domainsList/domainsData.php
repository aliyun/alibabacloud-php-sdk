<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData\domainInfos;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData\domains;

class domainsData extends Model
{
    /**
     * @var domainInfos
     */
    public $domainInfos;

    /**
     * @var domains
     */
    public $domains;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'domainInfos' => 'DomainInfos',
        'domains' => 'Domains',
        'source' => 'Source',
    ];

    public function validate()
    {
        if (null !== $this->domainInfos) {
            $this->domainInfos->validate();
        }
        if (null !== $this->domains) {
            $this->domains->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainInfos) {
            $res['DomainInfos'] = null !== $this->domainInfos ? $this->domainInfos->toArray($noStream) : $this->domainInfos;
        }

        if (null !== $this->domains) {
            $res['Domains'] = null !== $this->domains ? $this->domains->toArray($noStream) : $this->domains;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
