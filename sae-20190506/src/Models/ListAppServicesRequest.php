<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListAppServicesRequest extends Model
{
    /**
     * @description The ID of the application. You must specify only one of the following parameters: vpcId, namespace ID, and application ID.
     *
     * @example 017f39b8-dfa4-4e16-a84b-1dcee4b1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the MSE Nacos instance. This parameter is required when the registry type is set to MSE Nacos.
     *
     * @example mse-cn-sco3r0u****
     *
     * @var string
     */
    public $nacosInstanceId;

    /**
     * @description The ID of the MSE Nacos namespace. This parameter is required when the registry type is set to MSE Nacos.
     *
     * @example mse-test
     *
     * @var string
     */
    public $nacosNamespaceId;

    /**
     * @description The ID of the namespace. You must specify only one of the following parameters: VPC ID, namespace ID, and application ID.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The registry type. Valid values:
     *
     *   **0**: SAE Nacos
     *   **1**: SAE built-in Nacos
     *   **2** :MSE Nacos
     *   **9**: SAE Kubernetes service
     *
     * @example 0
     *
     * @var string
     */
    public $registryType;

    /**
     * @description The service type. Valid values:
     *
     *   **dubbo**
     *   **springCloud**
     *   **hsf**
     *   **k8sService**
     *
     * @example springCloud
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The unique identifier of the VPC. You must specify only one of the following parameters: VPC ID, namespace ID, and application ID.
     *
     * @example vpc-2ze0i263cnn311nvj****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'appId' => 'AppId',
        'nacosInstanceId' => 'NacosInstanceId',
        'nacosNamespaceId' => 'NacosNamespaceId',
        'namespaceId' => 'NamespaceId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'registryType' => 'RegistryType',
        'serviceType' => 'ServiceType',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->nacosInstanceId) {
            $res['NacosInstanceId'] = $this->nacosInstanceId;
        }
        if (null !== $this->nacosNamespaceId) {
            $res['NacosNamespaceId'] = $this->nacosNamespaceId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['NacosInstanceId'])) {
            $model->nacosInstanceId = $map['NacosInstanceId'];
        }
        if (isset($map['NacosNamespaceId'])) {
            $model->nacosNamespaceId = $map['NacosNamespaceId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
