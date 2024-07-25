<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class CreateDomainRequest extends Model
{
    /**
     * @example 194445-cn-hangzhou
     *
     * @var string
     */
    public $caCertIndentifier;

    /**
     * @example 194445-cn-hangzhou
     *
     * @var string
     */
    public $certIndentifier;

    /**
     * @example false
     *
     * @var bool
     */
    public $forceHttps;

    /**
     * @example Open
     *
     * @var string
     */
    public $http2Option;

    /**
     * @description This parameter is required.
     *
     * @example abc.com
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @example TLS1.3
     *
     * @var string
     */
    public $tlsMax;

    /**
     * @example TLS1.0
     *
     * @var string
     */
    public $tlsMin;
    protected $_name = [
        'caCertIndentifier' => 'caCertIndentifier',
        'certIndentifier'   => 'certIndentifier',
        'forceHttps'        => 'forceHttps',
        'http2Option'       => 'http2Option',
        'name'              => 'name',
        'protocol'          => 'protocol',
        'tlsMax'            => 'tlsMax',
        'tlsMin'            => 'tlsMin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caCertIndentifier) {
            $res['caCertIndentifier'] = $this->caCertIndentifier;
        }
        if (null !== $this->certIndentifier) {
            $res['certIndentifier'] = $this->certIndentifier;
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
        if (isset($map['caCertIndentifier'])) {
            $model->caCertIndentifier = $map['caCertIndentifier'];
        }
        if (isset($map['certIndentifier'])) {
            $model->certIndentifier = $map['certIndentifier'];
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
        if (isset($map['tlsMax'])) {
            $model->tlsMax = $map['tlsMax'];
        }
        if (isset($map['tlsMin'])) {
            $model->tlsMin = $map['tlsMin'];
        }

        return $model;
    }
}
