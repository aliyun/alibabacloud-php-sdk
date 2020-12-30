<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponseBody\domains;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponseBody\domains\pageData\sources;
use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $sslProtocol;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $sandbox;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $domainStatus;

    /**
     * @var sources
     */
    public $sources;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'gmtCreated'   => 'GmtCreated',
        'sslProtocol'  => 'SslProtocol',
        'description'  => 'Description',
        'sandbox'      => 'Sandbox',
        'cname'        => 'Cname',
        'domainStatus' => 'DomainStatus',
        'sources'      => 'Sources',
        'gmtModified'  => 'GmtModified',
        'domainName'   => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->sslProtocol) {
            $res['SslProtocol'] = $this->sslProtocol;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->sandbox) {
            $res['Sandbox'] = $this->sandbox;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->sources) {
            $res['Sources'] = null !== $this->sources ? $this->sources->toMap() : null;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['SslProtocol'])) {
            $model->sslProtocol = $map['SslProtocol'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Sandbox'])) {
            $model->sandbox = $map['Sandbox'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
