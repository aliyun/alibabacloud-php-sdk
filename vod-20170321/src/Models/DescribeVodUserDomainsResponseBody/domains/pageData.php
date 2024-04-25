<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponseBody\domains;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponseBody\domains\pageData\sources;
use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @description The CNAME that is assigned to the domain name for CDN.
     *
     * @example learn.developer.aliyundoc.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The remarks.
     *
     * @example Zhejiang ICP Filing No. ****
     *
     * @var string
     */
    public $description;

    /**
     * @description The domain name for CDN.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The status of the domain name for CDN. Valid values:
     *
     *   **online**: indicates that the domain name is enabled.
     *   **offline**: indicates that the domain name is disabled.
     *   **configuring**: indicates that the domain name is being configured.
     *   **configure_failed**: indicates that the domain name failed to be configured.
     *   **checking**: indicates that the domain name is under review.
     *   **check_failed**: indicates that the domain name failed the review.
     *
     * @example online
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description The time when the domain name for CDN was added. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-08-29T08:40:53Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The last time when the domain name for CDN was modified. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-12-29T09:24:12Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Indicates whether the accelerated domain name was in a sandbox.
     *
     * @example normal
     *
     * @var string
     */
    public $sandbox;

    /**
     * @description The information about the origin server.
     *
     * @var sources
     */
    public $sources;

    /**
     * @description Indicates whether HTTPS is enabled.
     *
     *   **on**: HTTPS is enabled.
     *   **off**: HTTPS is not eabled.
     *
     * @example on
     *
     * @var string
     */
    public $sslProtocol;
    protected $_name = [
        'cname'        => 'Cname',
        'description'  => 'Description',
        'domainName'   => 'DomainName',
        'domainStatus' => 'DomainStatus',
        'gmtCreated'   => 'GmtCreated',
        'gmtModified'  => 'GmtModified',
        'sandbox'      => 'Sandbox',
        'sources'      => 'Sources',
        'sslProtocol'  => 'SslProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->sandbox) {
            $res['Sandbox'] = $this->sandbox;
        }
        if (null !== $this->sources) {
            $res['Sources'] = null !== $this->sources ? $this->sources->toMap() : null;
        }
        if (null !== $this->sslProtocol) {
            $res['SslProtocol'] = $this->sslProtocol;
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
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Sandbox'])) {
            $model->sandbox = $map['Sandbox'];
        }
        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }
        if (isset($map['SslProtocol'])) {
            $model->sslProtocol = $map['SslProtocol'];
        }

        return $model;
    }
}
