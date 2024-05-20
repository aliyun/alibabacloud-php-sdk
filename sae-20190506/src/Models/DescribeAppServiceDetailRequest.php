<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppServiceDetailRequest extends Model
{
    /**
     * @description 6dcc8c9e-d3da-478a-a066-86dcf820\\*\\*\\*\\*
     *
     * This parameter is required.
     * @example 6dcc8c9e-d3da-478a-a066-86dcf820****
     *
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
     * @description springCloud
     *
     * @example springCloud
     *
     * @var string
     */
    public $serviceGroup;

    /**
     * @description edas.service.provider
     *
     * @example edas.service.provider
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description springCloud
     *
     * @example springCloud
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description 1.0.0
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $serviceVersion;
    protected $_name = [
        'appId'            => 'AppId',
        'nacosInstanceId'  => 'NacosInstanceId',
        'nacosNamespaceId' => 'NacosNamespaceId',
        'serviceGroup'     => 'ServiceGroup',
        'serviceName'      => 'ServiceName',
        'serviceType'      => 'ServiceType',
        'serviceVersion'   => 'ServiceVersion',
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
        if (null !== $this->serviceGroup) {
            $res['ServiceGroup'] = $this->serviceGroup;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppServiceDetailRequest
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
        if (isset($map['ServiceGroup'])) {
            $model->serviceGroup = $map['ServiceGroup'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        return $model;
    }
}
