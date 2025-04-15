<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class WebCustomDomain extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $defaultForwardingAppName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $namespaceId;

    /**
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

    public function validate()
    {
        if (null !== $this->routeConfig) {
            $this->routeConfig->validate();
        }
        if (null !== $this->webCertConfig) {
            $this->webCertConfig->validate();
        }
        if (null !== $this->webTLSConfig) {
            $this->webTLSConfig->validate();
        }
        if (null !== $this->webWAFConfig) {
            $this->webWAFConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['RouteConfig'] = null !== $this->routeConfig ? $this->routeConfig->toArray($noStream) : $this->routeConfig;
        }

        if (null !== $this->webCertConfig) {
            $res['WebCertConfig'] = null !== $this->webCertConfig ? $this->webCertConfig->toArray($noStream) : $this->webCertConfig;
        }

        if (null !== $this->webTLSConfig) {
            $res['WebTLSConfig'] = null !== $this->webTLSConfig ? $this->webTLSConfig->toArray($noStream) : $this->webTLSConfig;
        }

        if (null !== $this->webWAFConfig) {
            $res['WebWAFConfig'] = null !== $this->webWAFConfig ? $this->webWAFConfig->toArray($noStream) : $this->webWAFConfig;
        }

        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
