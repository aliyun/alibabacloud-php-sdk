<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\ListDomainsResponseBody\domainInfos;

use AlibabaCloud\Tea\Model;

class domainInfo extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $resolved;

    /**
     * @var int
     */
    public $resolved6;

    /**
     * @var int
     */
    public $resolvedHttps;

    /**
     * @var int
     */
    public $resolvedHttps6;
    protected $_name = [
        'domainName'     => 'DomainName',
        'resolved'       => 'Resolved',
        'resolved6'      => 'Resolved6',
        'resolvedHttps'  => 'ResolvedHttps',
        'resolvedHttps6' => 'ResolvedHttps6',
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
        if (null !== $this->resolved) {
            $res['Resolved'] = $this->resolved;
        }
        if (null !== $this->resolved6) {
            $res['Resolved6'] = $this->resolved6;
        }
        if (null !== $this->resolvedHttps) {
            $res['ResolvedHttps'] = $this->resolvedHttps;
        }
        if (null !== $this->resolvedHttps6) {
            $res['ResolvedHttps6'] = $this->resolvedHttps6;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Resolved'])) {
            $model->resolved = $map['Resolved'];
        }
        if (isset($map['Resolved6'])) {
            $model->resolved6 = $map['Resolved6'];
        }
        if (isset($map['ResolvedHttps'])) {
            $model->resolvedHttps = $map['ResolvedHttps'];
        }
        if (isset($map['ResolvedHttps6'])) {
            $model->resolvedHttps6 = $map['ResolvedHttps6'];
        }

        return $model;
    }
}
