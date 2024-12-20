<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\ListDomainsResponseBody\domainInfos;

use AlibabaCloud\Tea\Model;

class domainInfo extends Model
{
    /**
     * @example www.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 10
     *
     * @var int
     */
    public $resolved;

    /**
     * @example 20
     *
     * @var int
     */
    public $resolved6;

    /**
     * @var int
     */
    public $resolvedDoh;

    /**
     * @example 10
     *
     * @var int
     */
    public $resolvedHttps;

    /**
     * @example 20
     *
     * @var int
     */
    public $resolvedHttps6;

    /**
     * @var int
     */
    public $timeModified;
    protected $_name = [
        'domainName'     => 'DomainName',
        'resolved'       => 'Resolved',
        'resolved6'      => 'Resolved6',
        'resolvedDoh'    => 'ResolvedDoh',
        'resolvedHttps'  => 'ResolvedHttps',
        'resolvedHttps6' => 'ResolvedHttps6',
        'timeModified'   => 'TimeModified',
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
        if (null !== $this->resolvedDoh) {
            $res['ResolvedDoh'] = $this->resolvedDoh;
        }
        if (null !== $this->resolvedHttps) {
            $res['ResolvedHttps'] = $this->resolvedHttps;
        }
        if (null !== $this->resolvedHttps6) {
            $res['ResolvedHttps6'] = $this->resolvedHttps6;
        }
        if (null !== $this->timeModified) {
            $res['TimeModified'] = $this->timeModified;
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
        if (isset($map['ResolvedDoh'])) {
            $model->resolvedDoh = $map['ResolvedDoh'];
        }
        if (isset($map['ResolvedHttps'])) {
            $model->resolvedHttps = $map['ResolvedHttps'];
        }
        if (isset($map['ResolvedHttps6'])) {
            $model->resolvedHttps6 = $map['ResolvedHttps6'];
        }
        if (isset($map['TimeModified'])) {
            $model->timeModified = $map['TimeModified'];
        }

        return $model;
    }
}
