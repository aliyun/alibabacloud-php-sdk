<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewaySecretRequest extends Model
{
    /**
     * @var string
     */
    public $cert;

    /**
     * @var string
     */
    public $istioGatewayName;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'cert'             => 'Cert',
        'istioGatewayName' => 'IstioGatewayName',
        'key'              => 'Key',
        'secretName'       => 'SecretName',
        'serviceMeshId'    => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }
        if (null !== $this->istioGatewayName) {
            $res['IstioGatewayName'] = $this->istioGatewayName;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewaySecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }
        if (isset($map['IstioGatewayName'])) {
            $model->istioGatewayName = $map['IstioGatewayName'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
