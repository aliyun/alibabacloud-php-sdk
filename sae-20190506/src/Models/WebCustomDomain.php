<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class WebCustomDomain extends Model
{
    /**
     * @example 2023-03-30T08:02:19Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example appxxxxx
     *
     * @var string
     */
    public $defaultForwardingAppName;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2023-03-30T08:02:19Z
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @var RouteConfig
     */
    public $routeConfig;

    /**
     * @var WebCertConfig
     */
    public $webCertConfig;

    /**
     * @var WebTLSConfig
     */
    public $webTLSConfig;

    /**
     * @var WebWAFConfig
     */
    public $webWAFConfig;

    /**
     * @example 123xxxxxx
     *
     * @var string
     */
    public $accountId;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'defaultForwardingAppName' => 'DefaultForwardingAppName',
        'domainName' => 'DomainName',
        'lastModifiedTime' => 'LastModifiedTime',
        'namespaceId' => 'NamespaceId',
        'protocol' => 'Protocol',
        'routeConfig' => 'RouteConfig',
        'webCertConfig' => 'WebCertConfig',
        'webTLSConfig' => 'WebTLSConfig',
        'webWAFConfig' => 'WebWAFConfig',
        'accountId' => 'accountId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->defaultForwardingAppName) {
            $res['DefaultForwardingAppName'] = $this->defaultForwardingAppName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->routeConfig) {
            $res['RouteConfig'] = null !== $this->routeConfig ? $this->routeConfig->toMap() : null;
        }
        if (null !== $this->webCertConfig) {
            $res['WebCertConfig'] = null !== $this->webCertConfig ? $this->webCertConfig->toMap() : null;
        }
        if (null !== $this->webTLSConfig) {
            $res['WebTLSConfig'] = null !== $this->webTLSConfig ? $this->webTLSConfig->toMap() : null;
        }
        if (null !== $this->webWAFConfig) {
            $res['WebWAFConfig'] = null !== $this->webWAFConfig ? $this->webWAFConfig->toMap() : null;
        }
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebCustomDomain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DefaultForwardingAppName'])) {
            $model->defaultForwardingAppName = $map['DefaultForwardingAppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RouteConfig'])) {
            $model->routeConfig = RouteConfig::fromMap($map['RouteConfig']);
        }
        if (isset($map['WebCertConfig'])) {
            $model->webCertConfig = WebCertConfig::fromMap($map['WebCertConfig']);
        }
        if (isset($map['WebTLSConfig'])) {
            $model->webTLSConfig = WebTLSConfig::fromMap($map['WebTLSConfig']);
        }
        if (isset($map['WebWAFConfig'])) {
            $model->webWAFConfig = WebWAFConfig::fromMap($map['WebWAFConfig']);
        }
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        return $model;
    }
}
