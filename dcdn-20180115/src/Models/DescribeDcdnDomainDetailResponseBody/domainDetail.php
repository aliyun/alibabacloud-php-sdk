<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainDetailResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainDetailResponseBody\domainDetail\sources;
use AlibabaCloud\Tea\Model;

class domainDetail extends Model
{
    /**
     * @description The CNAME that is assigned to the accelerated domain name. You must add the CNAME record to the system of your Domain Name System (DNS) provider to map the accelerated domain name to the CNAME.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The information about the Internet content provider (ICP) filing of the domain name.
     *
     * @example Beijing ICP Filing No. 1703xxxx
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
     *   **online**
     *   **offline**
     *   **configuring**
     *   **configure_failed**
     *   **checking**
     *   **check_failed**
     *
     * @example online
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description The time when the domain name was added.
     *
     * @example 2017-11-27T06:51:26Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the domain name was last modified.
     *
     * @example 2017-11-27T06:51:25Z
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
     * @description Indicates whether the Security Socket Layer (SSL) certificate is enabled. Valid values:
     *
     *   **on**: **enabled**
     *   **off**: **disabled**
     *
     * @example on
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @description The public key of the certificate if HTTPS is enabled.
     *
     * @example xxx
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @var string
     */
    public $scene;

    /**
     * @description The acceleration region. Default value: domestic. Valid values:
     *
     *   **domestic**: Chinese mainland
     *   **overseas**: global (excluding the Chinese mainland)
     *   **global**: global
     *
     * @example overseas
     *
     * @var string
     */
    public $scope;

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
        'SSLPub'          => 'SSLPub',
        'scene'           => 'Scene',
        'scope'           => 'Scope',
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
        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->sources) {
            $res['Sources'] = null !== $this->sources ? $this->sources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainDetail
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
        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }

        return $model;
    }
}
