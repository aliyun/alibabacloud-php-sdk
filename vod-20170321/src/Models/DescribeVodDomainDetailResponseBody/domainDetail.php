<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponseBody\domainDetail\sources;
use AlibabaCloud\Tea\Model;

class domainDetail extends Model
{
    /**
     * @description The name of the certificate. The value of this parameter is returned if HTTPS is enabled.
     *
     * @example testCertName
     *
     * @var string
     */
    public $certName;

    /**
     * @description The CNAME that is assigned to the domain name for CDN. You must add a CNAME record in the system of your Domain Name System (DNS) service provider to map the domain name for CDN to the CNAME.
     *
     * @example example.com.w.alikunlun.net
     *
     * @var string
     */
    public $cname;

    /**
     * @description The description of the domain name for CDN.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The domain name for CDN.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The status of the domain name for CDN. Value values:
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
     * @description The time when the domain name for CDN was added. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-11-27T06:51:26Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The last time when the domain name for CDN was modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-11-27T06:55:26Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Indicates whether the Secure Sockets Layer (SSL) certificate is enabled. Valid values:
     *   **on**: indicates that the SSL certificate is enabled.
     *   **off**: indicates that the SSL certificate is disabled.
     *
     * @example on
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @description The public key of the certificate. The value of this parameter is returned if HTTPS is enabled.
     *
     * @example yourSSLPub
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @description This parameter is applicable to users of level 3 or higher in mainland China and users outside mainland China. Valid values:
     *   **domestic**: mainland China. This is the default value.
     *   **overseas**: outside mainland China.
     *   **global**: regions in and outside mainland China.
     *
     * @example domestic
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

    /**
     * @description The weight of the origin server.
     *
     * @example 1
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'certName'     => 'CertName',
        'cname'        => 'Cname',
        'description'  => 'Description',
        'domainName'   => 'DomainName',
        'domainStatus' => 'DomainStatus',
        'gmtCreated'   => 'GmtCreated',
        'gmtModified'  => 'GmtModified',
        'SSLProtocol'  => 'SSLProtocol',
        'SSLPub'       => 'SSLPub',
        'scope'        => 'Scope',
        'sources'      => 'Sources',
        'weight'       => 'Weight',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }
        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->sources) {
            $res['Sources'] = null !== $this->sources ? $this->sources->toMap() : null;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }
        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
