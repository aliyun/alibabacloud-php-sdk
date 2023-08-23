<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserDomainsResponseBody\domains;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserDomainsResponseBody\domains\pageData\sources;
use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @description The type of the workload accelerated by Alibaba Cloud CDN. Valid values:
     *
     *   **web**: images and small files
     *   **download**: large files
     *   **video**: on-demand video and audio streaming
     *
     * @example download
     *
     * @var string
     */
    public $cdnType;

    /**
     * @description The CNAME assigned to the accelerated domain name.
     *
     * @example example.com.w.alikunlun.net
     *
     * @var string
     */
    public $cname;

    /**
     * @description The acceleration region. Valid values:
     *
     *   **domestic**: Chinese mainland
     *   **global**: global
     *   **overseas**: outside the Chinese mainland
     *
     * @example domestic
     *
     * @var string
     */
    public $coverage;

    /**
     * @description The information about Internet Content Provider (ICP) filing.
     *
     * @example filing description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the accelerated domain name.
     *
     * @example 11223344
     *
     * @var int
     */
    public $domainId;

    /**
     * @description The accelerated domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The status of the accelerated domain name. Valid values:
     *
     *   **online**
     *   **offline**
     *   **configuring**
     *   **configure_failed**
     *   **checking**
     *   **check_failed**
     *   **stopping**
     *   **deleting**
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
     * @example 2015-10-28T11:05:52Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the resource group.
     *
     * @example abcd1234abcd1234
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the accelerated domain name is in a sandbox.
     *
     * @example true
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
        'cdnType'         => 'CdnType',
        'cname'           => 'Cname',
        'coverage'        => 'Coverage',
        'description'     => 'Description',
        'domainId'        => 'DomainId',
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
        if (null !== $this->cdnType) {
            $res['CdnType'] = $this->cdnType;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
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
        if (isset($map['CdnType'])) {
            $model->cdnType = $map['CdnType'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
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
