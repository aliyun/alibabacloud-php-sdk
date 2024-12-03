<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class CreateDomainRequest extends Model
{
    /**
     * @description CA Certificate Identifier.
     *
     * @example 1ef1da5f-38ed-69b3-****-037781890265
     *
     * @var string
     */
    public $caCertIdentifier;

    /**
     * @description Certificate Unique Identifier.
     *
     * @example 1ef1da5f-38ed-69b3-****-037781890265
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description Set the HTTPS protocol type, whether to enable forced HTTPS redirection.
     *
     * @example false
     *
     * @var bool
     */
    public $forceHttps;

    /**
     * @description HTTP/2 settings.
     *
     * @example Open
     *
     * @var string
     */
    public $http2Option;

    /**
     * @description Domain name.
     *
     * This parameter is required.
     * @example abc.com
     *
     * @var string
     */
    public $name;

    /**
     * @description The protocol type supported by the domain.
     *
     * This parameter is required.
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var TlsCipherSuitesConfig
     */
    public $tlsCipherSuitesConfig;

    /**
     * @description Maximum TLS protocol version, supports up to TLS 1.3.
     *
     * @example TLS1.3
     *
     * @var string
     */
    public $tlsMax;

    /**
     * @description Minimum TLS protocol version, supports down to TLS 1.0.
     *
     * @example TLS1.0
     *
     * @var string
     */
    public $tlsMin;
    protected $_name = [
        'caCertIdentifier'      => 'caCertIdentifier',
        'certIdentifier'        => 'certIdentifier',
        'forceHttps'            => 'forceHttps',
        'http2Option'           => 'http2Option',
        'name'                  => 'name',
        'protocol'              => 'protocol',
        'resourceGroupId'       => 'resourceGroupId',
        'tlsCipherSuitesConfig' => 'tlsCipherSuitesConfig',
        'tlsMax'                => 'tlsMax',
        'tlsMin'                => 'tlsMin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caCertIdentifier) {
            $res['caCertIdentifier'] = $this->caCertIdentifier;
        }
        if (null !== $this->certIdentifier) {
            $res['certIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->forceHttps) {
            $res['forceHttps'] = $this->forceHttps;
        }
        if (null !== $this->http2Option) {
            $res['http2Option'] = $this->http2Option;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tlsCipherSuitesConfig) {
            $res['tlsCipherSuitesConfig'] = null !== $this->tlsCipherSuitesConfig ? $this->tlsCipherSuitesConfig->toMap() : null;
        }
        if (null !== $this->tlsMax) {
            $res['tlsMax'] = $this->tlsMax;
        }
        if (null !== $this->tlsMin) {
            $res['tlsMin'] = $this->tlsMin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['caCertIdentifier'])) {
            $model->caCertIdentifier = $map['caCertIdentifier'];
        }
        if (isset($map['certIdentifier'])) {
            $model->certIdentifier = $map['certIdentifier'];
        }
        if (isset($map['forceHttps'])) {
            $model->forceHttps = $map['forceHttps'];
        }
        if (isset($map['http2Option'])) {
            $model->http2Option = $map['http2Option'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['tlsCipherSuitesConfig'])) {
            $model->tlsCipherSuitesConfig = TlsCipherSuitesConfig::fromMap($map['tlsCipherSuitesConfig']);
        }
        if (isset($map['tlsMax'])) {
            $model->tlsMax = $map['tlsMax'];
        }
        if (isset($map['tlsMin'])) {
            $model->tlsMin = $map['tlsMin'];
        }

        return $model;
    }
}
