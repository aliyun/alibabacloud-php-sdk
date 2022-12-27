<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel\sourceModels;
use AlibabaCloud\Tea\Model;

class getDomainDetailModel extends Model
{
    /**
     * @description The workload type of the accelerated domain name. Valid values:
     *
     *   **web**: images and small files.
     *   **download**: large files.
     *   **video**: on-demand video and audio streaming.
     *
     * @example web
     *
     * @var string
     */
    public $cdnType;

    /**
     * @description The Canonical Name (CNAME) that is assigned to the accelerated domain name. You must add a CNAME record in the system of your DNS service provider to map the accelerated domain name to the CNAME.
     *
     * @example example.com.w.kunlunle.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The remarks of the accelerated domain name.
     *
     * @example The live domain
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
     *   **online**: The domain name is enabled.
     *   **offline**: The domain is disabled.
     *   **configuring**: The domain is being configured.
     *   **configure_failed**: The domain failed to be configured.
     *   **checking**: The domain name is under review.
     *   **check_failed**: The domain name failed the review.
     *
     * @example online
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description The time when the accelerated domain name was added to Alibaba Cloud CDN.
     *
     * @example 2015-06-25T03:30:50Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The last time when the accelerated domain name was modified.
     *
     * @example 2017-06-25T03:30:50Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The CNAME for which HTTPS is enabled.
     *
     * @example example.com.w.kunlunle.com
     *
     * @var string
     */
    public $httpsCname;

    /**
     * @description The ID of the resource group.
     *
     * @example abcd1234abcd1234
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The accelerated region.
     *
     * @example domestic
     *
     * @var string
     */
    public $scope;

    /**
     * @description Specifies whether to enable the Security Socket Layer (SSL) certificate. Valid values:
     *
     *   **on**: enables the SSL certificate.
     *   **off**: disables the SSL certificate.
     *
     * @example on
     *
     * @var string
     */
    public $serverCertificateStatus;

    /**
     * @description The information about the origin server.
     *
     * @var sourceModels
     */
    public $sourceModels;
    protected $_name = [
        'cdnType'                 => 'CdnType',
        'cname'                   => 'Cname',
        'description'             => 'Description',
        'domainName'              => 'DomainName',
        'domainStatus'            => 'DomainStatus',
        'gmtCreated'              => 'GmtCreated',
        'gmtModified'             => 'GmtModified',
        'httpsCname'              => 'HttpsCname',
        'resourceGroupId'         => 'ResourceGroupId',
        'scope'                   => 'Scope',
        'serverCertificateStatus' => 'ServerCertificateStatus',
        'sourceModels'            => 'SourceModels',
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
        if (null !== $this->httpsCname) {
            $res['HttpsCname'] = $this->httpsCname;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->serverCertificateStatus) {
            $res['ServerCertificateStatus'] = $this->serverCertificateStatus;
        }
        if (null !== $this->sourceModels) {
            $res['SourceModels'] = null !== $this->sourceModels ? $this->sourceModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return getDomainDetailModel
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
        if (isset($map['HttpsCname'])) {
            $model->httpsCname = $map['HttpsCname'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['ServerCertificateStatus'])) {
            $model->serverCertificateStatus = $map['ServerCertificateStatus'];
        }
        if (isset($map['SourceModels'])) {
            $model->sourceModels = sourceModels::fromMap($map['SourceModels']);
        }

        return $model;
    }
}
