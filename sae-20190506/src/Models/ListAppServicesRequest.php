<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListAppServicesRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $nacosInstanceId;

    /**
     * @var string
     */
    public $nacosNamespaceId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $registryType;

    /**
     * @var string
     */
    public $serviceType;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
