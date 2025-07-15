<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainDetailResponseBody;

use AlibabaCloud\Tea\Model;

class domainDetail extends Model
{
    /**
     * @description The name of the certificate.
     *
     * @example liveCert****
     *
     * @var string
     */
    public $certName;

    /**
     * @description The CNAME that is assigned to the domain name. You must add a CNAME record in the system of your Domain Name System (DNS) service provider to map the domain name to the CNAME.
     *
     * >  A time-to-live (TTL) value is specified in the CNAME record of a domain name to indicate how long the CNAME record can be cached on the DNS resolver. If you modify the CNAME record of the domain name, the new settings take effect after the cache expires, which takes about 10 minutes. For more information, see [CNAME resolution](https://help.aliyun.com/document_detail/362010.html).
     *
     * @example learn.developer.aliyundoc.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The description of the domain name.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The streaming domain or ingest domain.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The status of the domain name. Valid values:
     *
     *   **online**: The domain name is enabled.
     *   **offline**: The domain name is disabled.
     *   **configuring**: The domain is being configured.
     *
     * @example online
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description The time when the domain name was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-07-27T06:51:25Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the domain name was last modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-08-07T06:51Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   **liveVideo**: streaming domain
     *   **liveEdge**: ingest domain
     *
     * @example liveVideo
     *
     * @var string
     */
    public $liveDomainType;

    /**
     * @description The ID of the region where the domain name resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2ogvt4nwmi7i
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the SSL certificate is enabled. Valid values:
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
     * @description The public key of the certificate.
     *
     * @example Public Key
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @description The acceleration region. Valid values:
     *
     *   **domestic**: regions in the Chinese mainland.
     *   **overseas**: regions outside the Chinese mainland.
     *   **global**: regions in and outside the Chinese mainland.
     *
     * @example domestic
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'certName' => 'CertName',
        'cname' => 'Cname',
        'description' => 'Description',
        'domainName' => 'DomainName',
        'domainStatus' => 'DomainStatus',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'liveDomainType' => 'LiveDomainType',
        'region' => 'Region',
        'resourceGroupId' => 'ResourceGroupId',
        'SSLProtocol' => 'SSLProtocol',
        'SSLPub' => 'SSLPub',
        'scope' => 'Scope',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
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
        if (null !== $this->liveDomainType) {
            $res['LiveDomainType'] = $this->liveDomainType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
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
        if (isset($map['LiveDomainType'])) {
            $model->liveDomainType = $map['LiveDomainType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
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
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
