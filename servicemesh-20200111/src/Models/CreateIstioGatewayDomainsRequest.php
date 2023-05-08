<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateIstioGatewayDomainsRequest extends Model
{
    /**
     * @description The name of the secret that contains the Transport Layer Security (TLS) certificate and certificate authority (CA) certificate.
     *
     * @example bookinfo-secret
     *
     * @var string
     */
    public $credential;

    /**
     * @description Specifies whether to forcibly use TLS to protect connection security.
     *
     *   `true`: forcibly uses TLS to protect connection security.
     *   `false`: does not forcibly use TLS to protect connection security.
     *
     * @example true
     *
     * @var bool
     */
    public $forceHttps;

    /**
     * @description The domain names of the one or more hosts that are exposed by the ASM gateway. Separate multiple domain names with commas (,).
     *
     * @example example.com,demo.com
     *
     * @var string
     */
    public $hosts;

    /**
     * @description The name of the ASM gateway.
     *
     * @example ingressgateway
     *
     * @var string
     */
    public $istioGatewayName;

    /**
     * @description The maximum number of ASM gateways to query.
     *
     * @example 10
     *
     * @var string
     */
    public $limit;

    /**
     * @description The name of the namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The port that is provided by the ASM gateway.
     *
     * @example 443
     *
     * @var int
     */
    public $number;

    /**
     * @description The name of the port.
     *
     * @example http-demo
     *
     * @var string
     */
    public $portName;

    /**
     * @description The type of the protocol. Valid values: `HTTP`, `HTTPS`, `GRPC`, `HTTP2`, `MONGO`, `TCP`, and `TLS`.
     *
     * @example HTTPS
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The ID of the ASM instance.
     *
     * @example c08ba3fd1e6484b0f8cc1ad8fe10d****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'credential'       => 'Credential',
        'forceHttps'       => 'ForceHttps',
        'hosts'            => 'Hosts',
        'istioGatewayName' => 'IstioGatewayName',
        'limit'            => 'Limit',
        'namespace'        => 'Namespace',
        'number'           => 'Number',
        'portName'         => 'PortName',
        'protocol'         => 'Protocol',
        'serviceMeshId'    => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credential) {
            $res['Credential'] = $this->credential;
        }
        if (null !== $this->forceHttps) {
            $res['ForceHttps'] = $this->forceHttps;
        }
        if (null !== $this->hosts) {
            $res['Hosts'] = $this->hosts;
        }
        if (null !== $this->istioGatewayName) {
            $res['IstioGatewayName'] = $this->istioGatewayName;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIstioGatewayDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Credential'])) {
            $model->credential = $map['Credential'];
        }
        if (isset($map['ForceHttps'])) {
            $model->forceHttps = $map['ForceHttps'];
        }
        if (isset($map['Hosts'])) {
            $model->hosts = $map['Hosts'];
        }
        if (isset($map['IstioGatewayName'])) {
            $model->istioGatewayName = $map['IstioGatewayName'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
