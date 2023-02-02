<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class routeServices extends Model
{
    /**
     * @description The name of the group to which the service belongs.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The name of the service.
     *
     * @example test-aixue-gray
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace to which the service belongs.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The weight.
     *
     * @example 80
     *
     * @var int
     */
    public $percent;

    /**
     * @description The ID of the service.
     *
     * @example 547
     *
     * @var int
     */
    public $serviceId;

    /**
     * @description The name of the service.
     *
     * @example b-service
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The source type of the service.
     *
     * @example K8S
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The version of the service.
     *
     * @example v1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'groupName'   => 'GroupName',
        'name'        => 'Name',
        'namespace'   => 'Namespace',
        'percent'     => 'Percent',
        'serviceId'   => 'ServiceId',
        'serviceName' => 'ServiceName',
        'sourceType'  => 'SourceType',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeServices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
