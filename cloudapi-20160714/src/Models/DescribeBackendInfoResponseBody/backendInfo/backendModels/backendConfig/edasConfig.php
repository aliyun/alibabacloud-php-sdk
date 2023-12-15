<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig;

use AlibabaCloud\Tea\Model;

class edasConfig extends Model
{
    /**
     * @var string
     */
    public $edasAppId;

    /**
     * @var string
     */
    public $microserviceNamespace;

    /**
     * @var string
     */
    public $microserviceNamespaceId;

    /**
     * @var string
     */
    public $microserviceNamespaceName;

    /**
     * @var string
     */
    public $mseInstanceId;

    /**
     * @var string
     */
    public $registryType;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'edasAppId'                 => 'EdasAppId',
        'microserviceNamespace'     => 'MicroserviceNamespace',
        'microserviceNamespaceId'   => 'MicroserviceNamespaceId',
        'microserviceNamespaceName' => 'MicroserviceNamespaceName',
        'mseInstanceId'             => 'MseInstanceId',
        'registryType'              => 'RegistryType',
        'serviceName'               => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edasAppId) {
            $res['EdasAppId'] = $this->edasAppId;
        }
        if (null !== $this->microserviceNamespace) {
            $res['MicroserviceNamespace'] = $this->microserviceNamespace;
        }
        if (null !== $this->microserviceNamespaceId) {
            $res['MicroserviceNamespaceId'] = $this->microserviceNamespaceId;
        }
        if (null !== $this->microserviceNamespaceName) {
            $res['MicroserviceNamespaceName'] = $this->microserviceNamespaceName;
        }
        if (null !== $this->mseInstanceId) {
            $res['MseInstanceId'] = $this->mseInstanceId;
        }
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return edasConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdasAppId'])) {
            $model->edasAppId = $map['EdasAppId'];
        }
        if (isset($map['MicroserviceNamespace'])) {
            $model->microserviceNamespace = $map['MicroserviceNamespace'];
        }
        if (isset($map['MicroserviceNamespaceId'])) {
            $model->microserviceNamespaceId = $map['MicroserviceNamespaceId'];
        }
        if (isset($map['MicroserviceNamespaceName'])) {
            $model->microserviceNamespaceName = $map['MicroserviceNamespaceName'];
        }
        if (isset($map['MseInstanceId'])) {
            $model->mseInstanceId = $map['MseInstanceId'];
        }
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
