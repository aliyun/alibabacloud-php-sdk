<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponseBody\slbSubDomains;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponseBody\slbSubDomains\slbSubDomain\lineAlgorithms;
use AlibabaCloud\Tea\Model;

class slbSubDomain extends Model
{
    /**
     * @var lineAlgorithms
     */
    public $lineAlgorithms;

    /**
     * @description Indicates whether weighted round-robin is enabled for the subdomain.
     *
     * @example true
     *
     * @var bool
     */
    public $open;

    /**
     * @description The number of DNS records added for the subdomain.
     *
     * @example 3
     *
     * @var int
     */
    public $recordCount;

    /**
     * @description The subdomain.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $subDomain;

    /**
     * @description The type of the DNS record that supports weighted round-robin. Valid values: A, AAAA, and CNAME.
     *
     * @example A
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'lineAlgorithms' => 'LineAlgorithms',
        'open'           => 'Open',
        'recordCount'    => 'RecordCount',
        'subDomain'      => 'SubDomain',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineAlgorithms) {
            $res['LineAlgorithms'] = null !== $this->lineAlgorithms ? $this->lineAlgorithms->toMap() : null;
        }
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slbSubDomain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineAlgorithms'])) {
            $model->lineAlgorithms = lineAlgorithms::fromMap($map['LineAlgorithms']);
        }
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
