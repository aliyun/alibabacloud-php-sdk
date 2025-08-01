<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayDomainResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayDomainResponseBody\data\comment;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayDomainResponseBody\data\tlsCipherSuitesConfig;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the certificate expires.
     *
     * @example 2031-03-30 02:35:12
     *
     * @var string
     */
    public $certBeforeDate;

    /**
     * @description The certificate ID.
     *
     * @example 3452-cn-hangzhou
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The route comment. This parameter is returned only in ingress scenarios.
     *
     * @var comment
     */
    public $comment;

    /**
     * @description The gateway ID.
     *
     * @example 12
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The time when the domain name was created.
     *
     * @example 2031-03-30 02:35:12
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the domain name was updated.
     *
     * @example 2031-03-30 02:35:12
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Indicates whether `HTTP/2` is enabled.
     *
     *   `open`: `HTTP/2` is enabled.
     *   `close`: `HTTP/2` is disabled.
     *   `globalConfig`: Global configurations are used.
     *
     * @example close
     *
     * @var string
     */
    public $http2;

    /**
     * @description The ID of the domain name.
     *
     * @example 243
     *
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isManaged;

    /**
     * @description Indicates whether HTTPS is forcefully used.
     *
     * @example true
     *
     * @var bool
     */
    public $mustHttps;

    /**
     * @description The domain name.
     *
     * @example test.com
     *
     * @var string
     */
    public $name;

    /**
     * @description The protocol.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The state of the domain name. Valid values:
     *
     *   0: unpublished
     *   2: publishing
     *   3: published
     *   4: editing
     *   5: unpublishing
     *   6: unavailable
     *
     * @example 3
     *
     * @var int
     */
    public $status;

    /**
     * @var tlsCipherSuitesConfig
     */
    public $tlsCipherSuitesConfig;

    /**
     * @description The maximum version of Transport Layer Security (TLS).
     *
     * @example TLS 1.3
     *
     * @var string
     */
    public $tlsMax;

    /**
     * @description The minimum version of TLS.
     *
     * @example TLS 1.0
     *
     * @var string
     */
    public $tlsMin;

    /**
     * @description The type of the domain name source. Valid values:
     *
     *   Op: console
     *   Ingress: MSE Ingress
     *
     * @example Op
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'certBeforeDate' => 'CertBeforeDate',
        'certIdentifier' => 'CertIdentifier',
        'comment' => 'Comment',
        'gatewayId' => 'GatewayId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'http2' => 'Http2',
        'id' => 'Id',
        'isManaged' => 'IsManaged',
        'mustHttps' => 'MustHttps',
        'name' => 'Name',
        'protocol' => 'Protocol',
        'status' => 'Status',
        'tlsCipherSuitesConfig' => 'TlsCipherSuitesConfig',
        'tlsMax' => 'TlsMax',
        'tlsMin' => 'TlsMin',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certBeforeDate) {
            $res['CertBeforeDate'] = $this->certBeforeDate;
        }
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->comment) {
            $res['Comment'] = null !== $this->comment ? $this->comment->toMap() : null;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->http2) {
            $res['Http2'] = $this->http2;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isManaged) {
            $res['IsManaged'] = $this->isManaged;
        }
        if (null !== $this->mustHttps) {
            $res['MustHttps'] = $this->mustHttps;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tlsCipherSuitesConfig) {
            $res['TlsCipherSuitesConfig'] = null !== $this->tlsCipherSuitesConfig ? $this->tlsCipherSuitesConfig->toMap() : null;
        }
        if (null !== $this->tlsMax) {
            $res['TlsMax'] = $this->tlsMax;
        }
        if (null !== $this->tlsMin) {
            $res['TlsMin'] = $this->tlsMin;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CertBeforeDate'])) {
            $model->certBeforeDate = $map['CertBeforeDate'];
        }
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['Comment'])) {
            $model->comment = comment::fromMap($map['Comment']);
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Http2'])) {
            $model->http2 = $map['Http2'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsManaged'])) {
            $model->isManaged = $map['IsManaged'];
        }
        if (isset($map['MustHttps'])) {
            $model->mustHttps = $map['MustHttps'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TlsCipherSuitesConfig'])) {
            $model->tlsCipherSuitesConfig = tlsCipherSuitesConfig::fromMap($map['TlsCipherSuitesConfig']);
        }
        if (isset($map['TlsMax'])) {
            $model->tlsMax = $map['TlsMax'];
        }
        if (isset($map['TlsMin'])) {
            $model->tlsMin = $map['TlsMin'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
