<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListAppServicesRequest extends Model
{
    /**
     * @example 017f39b8-dfa4-4e16-a84b-1dcee4b1****
     *
     * @var string
     */
    public $appId;

    /**
     * @example mse-cn-sco3r0u****
     *
     * @var string
     */
    public $nacosInstanceId;

    /**
     * @example mse-test
     *
     * @var string
     */
    public $nacosNamespaceId;

    /**
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 0
     *
     * @var string
     */
    public $registryType;

    /**
     * @example springCloud
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example vpc-2ze0i263cnn311nvj****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'appId'            => 'AppId',
        'nacosInstanceId'  => 'NacosInstanceId',
        'nacosNamespaceId' => 'NacosNamespaceId',
        'namespaceId'      => 'NamespaceId',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'registryType'     => 'RegistryType',
        'serviceType'      => 'ServiceType',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

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
