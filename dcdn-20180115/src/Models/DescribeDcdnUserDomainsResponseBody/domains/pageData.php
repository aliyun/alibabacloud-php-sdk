<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsResponseBody\domains;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsResponseBody\domains\pageData\sources;
use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @description The CNAME assigned to the accelerated domain name.
     *
     * @example test.aliyun.com.w.alikunlun.com
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
     * @description The ID of the accelerated domain name.
     *
     * @example 11223344
     *
     * @var int
     */
    public $domainId;

    /**
     * @description The information about the accelerated domain name.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The status of the accelerated domain name.
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
     * @var string
     */
    public $functionType;

    /**
     * @description The time when the accelerated domain name was added to Dynamic Content Delivery Network (DCDN).
     *
     * @example 2015-10-28T11:05:50Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the accelerated domain name was modified.
     *
     * @example 2015-10-28T09:31:59Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmv6jutt**
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
     * @description 场景。支持：
     * - **apiscene**：API加速。
     * - **webservicescene**：网站业务加速。
     * - **staticscene**：视频、图文类加速。
     * - **（空）**：没有场景。
     * @example apiscene
     *
     * @var string
     */
    public $scene;

    /**
     * @description The information about the origin server.
     *
     * @var sources
     */
    public $sources;
    protected $_name = [
        'cname'           => 'Cname',
        'description'     => 'Description',
        'domainId'        => 'DomainId',
        'domainName'      => 'DomainName',
        'domainStatus'    => 'DomainStatus',
        'functionType'    => 'FunctionType',
        'gmtCreated'      => 'GmtCreated',
        'gmtModified'     => 'GmtModified',
        'resourceGroupId' => 'ResourceGroupId',
        'SSLProtocol'     => 'SSLProtocol',
        'sandbox'         => 'Sandbox',
        'scene'           => 'Scene',
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
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
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
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
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
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }

        return $model;
    }
}
