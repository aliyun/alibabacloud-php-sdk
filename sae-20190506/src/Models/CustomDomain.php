<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CustomDomain extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var CertConfig
     */
    public $certConfig;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $keepFullPath;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $namespaceID;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var RouteConfig
     */
    public $routeConfig;

    /**
     * @var string
     */
    public $subdomainCount;

    /**
     * @var TLSConfig
     */
    public $tlsConfig;

    /**
     * @var WAFConfig
     */
    public $wafConfig;
    protected $_name = [
        'accountId'        => 'accountId',
        'apiVersion'       => 'apiVersion',
        'certConfig'       => 'certConfig',
        'createdTime'      => 'createdTime',
        'domainName'       => 'domainName',
        'keepFullPath'     => 'keepFullPath',
        'lastModifiedTime' => 'lastModifiedTime',
        'namespaceID'      => 'namespaceID',
        'protocol'         => 'protocol',
        'requestId'        => 'requestId',
        'routeConfig'      => 'routeConfig',
        'subdomainCount'   => 'subdomainCount',
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
        if (null !== $this->keepFullPath) {
            $res['keepFullPath'] = $this->keepFullPath;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->namespaceID) {
            $res['namespaceID'] = $this->namespaceID;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->routeConfig) {
            $res['routeConfig'] = null !== $this->routeConfig ? $this->routeConfig->toMap() : null;
        }
        if (null !== $this->subdomainCount) {
            $res['subdomainCount'] = $this->subdomainCount;
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
     * @return CustomDomain
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
        if (isset($map['keepFullPath'])) {
            $model->keepFullPath = $map['keepFullPath'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['namespaceID'])) {
            $model->namespaceID = $map['namespaceID'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['routeConfig'])) {
            $model->routeConfig = RouteConfig::fromMap($map['routeConfig']);
        }
        if (isset($map['subdomainCount'])) {
            $model->subdomainCount = $map['subdomainCount'];
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
