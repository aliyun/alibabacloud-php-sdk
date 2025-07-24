<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class GetServiceRequest extends Model
{
    /**
     * @description Region Id.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service ID.
     *
     * @example service-0e6fca6a51a544xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The service instance id.
     *
     * @example si-b58c874912fc4294****
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description The service name.
     *
     * @example Wordpress
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The service version.
     *
     * @example 1.0
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description Whether to disclose service details.
     *
     * @var string[]
     */
    public $showDetails;
    protected $_name = [
        'regionId' => 'RegionId',
        'serviceId' => 'ServiceId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'serviceName' => 'ServiceName',
        'serviceVersion' => 'ServiceVersion',
        'showDetails' => 'ShowDetails',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->showDetails) {
            $res['ShowDetails'] = $this->showDetails;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['ShowDetails'])) {
            if (!empty($map['ShowDetails'])) {
                $model->showDetails = $map['ShowDetails'];
            }
        }

        return $model;
    }
}
