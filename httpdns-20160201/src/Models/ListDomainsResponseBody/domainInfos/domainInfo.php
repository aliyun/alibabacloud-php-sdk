<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\ListDomainsResponseBody\domainInfos;

use AlibabaCloud\Dara\Model;

class domainInfo extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $resolveHttpAes;

    /**
     * @var int
     */
    public $resolveHttpsAes;

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
    public $resolvedDoh;

    /**
     * @var int
     */
    public $resolvedHttps;

    /**
     * @var int
     */
    public $resolvedHttps6;

    /**
     * @var int
     */
    public $timeModified;
    protected $_name = [
        'domainName' => 'DomainName',
        'resolveHttpAes' => 'ResolveHttpAes',
        'resolveHttpsAes' => 'ResolveHttpsAes',
        'resolved' => 'Resolved',
        'resolved6' => 'Resolved6',
        'resolvedDoh' => 'ResolvedDoh',
        'resolvedHttps' => 'ResolvedHttps',
        'resolvedHttps6' => 'ResolvedHttps6',
        'timeModified' => 'TimeModified',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->resolveHttpAes) {
            $res['ResolveHttpAes'] = $this->resolveHttpAes;
        }

        if (null !== $this->resolveHttpsAes) {
            $res['ResolveHttpsAes'] = $this->resolveHttpsAes;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['ResolveHttpAes'])) {
            $model->resolveHttpAes = $map['ResolveHttpAes'];
        }

        if (isset($map['ResolveHttpsAes'])) {
            $model->resolveHttpsAes = $map['ResolveHttpsAes'];
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
