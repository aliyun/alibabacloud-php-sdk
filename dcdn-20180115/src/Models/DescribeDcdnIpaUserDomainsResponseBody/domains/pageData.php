<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaUserDomainsResponseBody\domains;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaUserDomainsResponseBody\domains\pageData\sources;
use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @description The CNAME assigned to the accelerated domain name.
     *
     * @example example.com.*.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The reason why the accelerated domain name failed the review.
     *
     * @example audit failed
     *
     * @var string
     */
    public $description;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The status of the accelerated domain name. Valid values:
     *
     *   **online**: enabled
     *   **offline**: disabled
     *   **configuring**: configuring
     *   **configure_failed**: configuration failed
     *   **checking**: reviewing
     *   **check_failed:** review failed
     *
     * @example online
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description The time when the accelerated domain name was added to Alibaba Cloud CDN.
     *
     * @example 2015-10-28T09:32:51Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the accelerated domain name was modified.
     *
     * @example 2015-10-28T11:05:52Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the resource group.
     *
     * @example abcd1234abcd****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of HTTPS.
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $SSLProtocol;

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
    protected $_name = [
        'cname'           => 'Cname',
        'description'     => 'Description',
        'domainName'      => 'DomainName',
        'domainStatus'    => 'DomainStatus',
        'gmtCreated'      => 'GmtCreated',
        'gmtModified'     => 'GmtModified',
        'resourceGroupId' => 'ResourceGroupId',
        'SSLProtocol'     => 'SSLProtocol',
        'sandbox'         => 'Sandbox',
        'sources'         => 'Sources',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }
        if (null !== $this->sandbox) {
            $res['Sandbox'] = $this->sandbox;
        }
        if (null !== $this->sources) {
            $res['Sources'] = null !== $this->sources ? $this->sources->toMap() : null;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }
        if (isset($map['Sandbox'])) {
            $model->sandbox = $map['Sandbox'];
        }
        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }

        return $model;
    }
}
