<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @example 223576-cn-hangzhou
     *
     * @var string
     */
    public $caCertIndentifier;

    /**
     * @example 123576-cn-hangzhou
     *
     * @var string
     */
    public $certIndentifier;

    /**
     * @example test-cert
     *
     * @var string
     */
    public $certName;

    /**
     * @example Console
     *
     * @var string
     */
    public $createFrom;

    /**
     * @example 1719386834548
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example false
     *
     * @var bool
     */
    public $default;

    /**
     * @example d-cq1m3utlhtgvgkv7sitg
     *
     * @var string
     */
    public $domainId;

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
     * @example Alibaba
     *
     * @var string
     */
    public $issuer;

    /**
     * @example abc.com
     *
     * @var string
     */
    public $name;

    /**
     * @example 1719386834548
     *
     * @var int
     */
    public $notAfterTimstamp;

    /**
     * @example 1719386834548
     *
     * @var int
     */
    public $notBeforeTimestamp;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @example aliyun.com
     *
     * @var string
     */
    public $sans;

    /**
     * @example TLS 1.3
     *
     * @var string
     */
    public $tlsMax;

    /**
     * @example TLS 1.0
     *
     * @var string
     */
    public $tlsMin;

    /**
     * @example 1719386834548
     *
     * @var int
     */
    public $updatetimestamp;
    protected $_name = [
        'algorithm'          => 'algorithm',
        'caCertIndentifier'  => 'caCertIndentifier',
        'certIndentifier'    => 'certIndentifier',
        'certName'           => 'certName',
        'createFrom'         => 'createFrom',
        'createTimestamp'    => 'createTimestamp',
        'default'            => 'default',
        'domainId'           => 'domainId',
        'forceHttps'         => 'forceHttps',
        'http2Option'        => 'http2Option',
        'issuer'             => 'issuer',
        'name'               => 'name',
        'notAfterTimstamp'   => 'notAfterTimstamp',
        'notBeforeTimestamp' => 'notBeforeTimestamp',
        'protocol'           => 'protocol',
        'sans'               => 'sans',
        'tlsMax'             => 'tlsMax',
        'tlsMin'             => 'tlsMin',
        'updatetimestamp'    => 'updatetimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['algorithm'] = $this->algorithm;
        }
        if (null !== $this->caCertIndentifier) {
            $res['caCertIndentifier'] = $this->caCertIndentifier;
        }
        if (null !== $this->certIndentifier) {
            $res['certIndentifier'] = $this->certIndentifier;
        }
        if (null !== $this->certName) {
            $res['certName'] = $this->certName;
        }
        if (null !== $this->createFrom) {
            $res['createFrom'] = $this->createFrom;
        }
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->default) {
            $res['default'] = $this->default;
        }
        if (null !== $this->domainId) {
            $res['domainId'] = $this->domainId;
        }
        if (null !== $this->forceHttps) {
            $res['forceHttps'] = $this->forceHttps;
        }
        if (null !== $this->http2Option) {
            $res['http2Option'] = $this->http2Option;
        }
        if (null !== $this->issuer) {
            $res['issuer'] = $this->issuer;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->notAfterTimstamp) {
            $res['notAfterTimstamp'] = $this->notAfterTimstamp;
        }
        if (null !== $this->notBeforeTimestamp) {
            $res['notBeforeTimestamp'] = $this->notBeforeTimestamp;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->sans) {
            $res['sans'] = $this->sans;
        }
        if (null !== $this->tlsMax) {
            $res['tlsMax'] = $this->tlsMax;
        }
        if (null !== $this->tlsMin) {
            $res['tlsMin'] = $this->tlsMin;
        }
        if (null !== $this->updatetimestamp) {
            $res['updatetimestamp'] = $this->updatetimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['algorithm'])) {
            $model->algorithm = $map['algorithm'];
        }
        if (isset($map['caCertIndentifier'])) {
            $model->caCertIndentifier = $map['caCertIndentifier'];
        }
        if (isset($map['certIndentifier'])) {
            $model->certIndentifier = $map['certIndentifier'];
        }
        if (isset($map['certName'])) {
            $model->certName = $map['certName'];
        }
        if (isset($map['createFrom'])) {
            $model->createFrom = $map['createFrom'];
        }
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }
        if (isset($map['default'])) {
            $model->default = $map['default'];
        }
        if (isset($map['domainId'])) {
            $model->domainId = $map['domainId'];
        }
        if (isset($map['forceHttps'])) {
            $model->forceHttps = $map['forceHttps'];
        }
        if (isset($map['http2Option'])) {
            $model->http2Option = $map['http2Option'];
        }
        if (isset($map['issuer'])) {
            $model->issuer = $map['issuer'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['notAfterTimstamp'])) {
            $model->notAfterTimstamp = $map['notAfterTimstamp'];
        }
        if (isset($map['notBeforeTimestamp'])) {
            $model->notBeforeTimestamp = $map['notBeforeTimestamp'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['sans'])) {
            $model->sans = $map['sans'];
        }
        if (isset($map['tlsMax'])) {
            $model->tlsMax = $map['tlsMax'];
        }
        if (isset($map['tlsMin'])) {
            $model->tlsMin = $map['tlsMin'];
        }
        if (isset($map['updatetimestamp'])) {
            $model->updatetimestamp = $map['updatetimestamp'];
        }

        return $model;
    }
}
