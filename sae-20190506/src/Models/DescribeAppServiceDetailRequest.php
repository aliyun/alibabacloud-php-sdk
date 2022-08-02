<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppServiceDetailRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $serviceGroup;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $serviceVersion;
    protected $_name = [
        'appId'          => 'AppId',
        'serviceGroup'   => 'ServiceGroup',
        'serviceName'    => 'ServiceName',
        'serviceType'    => 'ServiceType',
        'serviceVersion' => 'ServiceVersion',
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
