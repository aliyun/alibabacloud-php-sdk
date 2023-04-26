<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponseBody\domains;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponseBody\domains\pageData\sources;
use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @description Queries the domain names for CDN within your Alibaba Cloud account. You can filter domain names by name or by state. When you filter domain names by name, a fuzzy match is supported.
     *
     * @example learn.developer.aliyundoc.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The number of entries returned per page.
     *
     * @example The type of the origin server. Valid values:
     *
     *   **ipaddr**: a server that you can access by using an IP address.
     *   **domain**: a server that you can access by using a domain name.
     *   **oss**: an Object Storage Service (OSS) bucket.
     *
     * @var string
     */
    public $description;

    /**
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example online
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description The page number of the returned page.
     *
     * @example 2017-08-29T08:40:53Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example 2017-12-29T09:24:12Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the request.
     *
     * @example normal
     *
     * @var string
     */
    public $sandbox;

    /**
     * @var sources
     */
    public $sources;

    /**
     * @description The key of tag N. Valid values of N: **1** to **20**.
     *
     * If you do not specify this parameter, all tag keys are queried.
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
