<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomDomainResponseBody extends Model
{
    /**
     * @description The ID of your Alibaba Cloud account.
     *
     * @example 1986114****4305
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The version of the API.
     *
     * @example 2016-08-15
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @description The configurations of the HTTPS certificate.
     *
     * @var CertConfig
     */
    public $certConfig;

    /**
     * @description The time when the custom domain name was created.
     *
     * @example 2020-07-27T08:02:19Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The time when the domain name was last modified.
     *
     * @example 2020-07-27T08:02:19Z
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @description The protocol type that is supported by the custom domain name.
     *
     *   **HTTP**: Only HTTP is supported.
     *   **HTTPS**: Only HTTPS is supported.
     *   **HTTP,HTTPS**: HTTP and HTTPS are supported.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The route table that maps the paths to functions when the functions are invoked by using the custom domain name.
     *
     * @var RouteConfig
     */
    public $routeConfig;

    /**
     * @description The Transport Layer Security (TLS) configuration.
     *
     * @var TLSConfig
     */
    public $tlsConfig;

    /**
     * @description The Web Application Firewall (WAF) configuration.
     *
     * @var WAFConfig
     */
    public $wafConfig;
    protected $_name = [
        'accountId'        => 'accountId',
        'apiVersion'       => 'apiVersion',
        'certConfig'       => 'certConfig',
        'createdTime'      => 'createdTime',
        'domainName'       => 'domainName',
        'lastModifiedTime' => 'lastModifiedTime',
        'protocol'         => 'protocol',
        'routeConfig'      => 'routeConfig',
        'tlsConfig'        => 'tlsConfig',
        'wafConfig'        => 'wafConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->apiVersion) {
            $res['apiVersion'] = $this->apiVersion;
        }
        if (null !== $this->certConfig) {
            $res['certConfig'] = null !== $this->certConfig ? $this->certConfig->toMap() : null;
        }
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->routeConfig) {
            $res['routeConfig'] = null !== $this->routeConfig ? $this->routeConfig->toMap() : null;
        }
        if (null !== $this->tlsConfig) {
            $res['tlsConfig'] = null !== $this->tlsConfig ? $this->tlsConfig->toMap() : null;
        }
        if (null !== $this->wafConfig) {
            $res['wafConfig'] = null !== $this->wafConfig ? $this->wafConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['apiVersion'])) {
            $model->apiVersion = $map['apiVersion'];
        }
        if (isset($map['certConfig'])) {
            $model->certConfig = CertConfig::fromMap($map['certConfig']);
        }
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['routeConfig'])) {
            $model->routeConfig = RouteConfig::fromMap($map['routeConfig']);
        }
        if (isset($map['tlsConfig'])) {
            $model->tlsConfig = TLSConfig::fromMap($map['tlsConfig']);
        }
        if (isset($map['wafConfig'])) {
            $model->wafConfig = WAFConfig::fromMap($map['wafConfig']);
        }

        return $model;
    }
}
