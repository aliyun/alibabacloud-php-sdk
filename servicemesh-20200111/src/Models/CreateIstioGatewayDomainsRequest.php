<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateIstioGatewayDomainsRequest extends Model
{
    /**
     * @var string
     */
    public $credential;

    /**
     * @var bool
     */
    public $forceHttps;

    /**
     * @var string
     */
    public $hosts;

    /**
     * @var string
     */
    public $istioGatewayName;

    /**
     * @var string
     */
    public $limit;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $number;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var string
     */
    public $protocol;

    /**
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
