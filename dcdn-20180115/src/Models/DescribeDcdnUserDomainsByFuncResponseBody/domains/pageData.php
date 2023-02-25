<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsByFuncResponseBody\domains;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsByFuncResponseBody\domains\pageData\sources;
use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @description The CNAME assigned to the accelerated domain name.
     *
     * @example example.com.w.alikunlun.net
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
     *   **check_failed**: failed the review
     *
     * @example configure_failed
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description The time when the accelerated domain name was added.
     *
     * @example 2015-10-28T09:32:51Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the accelerated domain name was modified.
     *
     * @example 2015-10-28T11:05:50Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmyuji4b6r4**
     *
     * @var string
     */
    public $resourceGroupId;

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
     * @description Indicates whether HTTPS is enabled. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $sslProtocol;
    protected $_name = [
        'cname'           => 'Cname',
        'description'     => 'Description',
        'domainName'      => 'DomainName',
        'domainStatus'    => 'DomainStatus',
        'gmtCreated'      => 'GmtCreated',
        'gmtModified'     => 'GmtModified',
        'resourceGroupId' => 'ResourceGroupId',
        'sandbox'         => 'Sandbox',
        'sources'         => 'Sources',
        'sslProtocol'     => 'SslProtocol',
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
