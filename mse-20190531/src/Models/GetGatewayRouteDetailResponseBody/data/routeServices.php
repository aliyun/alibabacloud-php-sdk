<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class routeServices extends Model
{
    /**
     * @description The type of the protocol.
     *
     * @example DUBBO
     *
     * @var string
     */
    public $agreementType;

    /**
     * @description The name of the group to which the service belongs.
     *
     * @example api
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The name of the service.
     *
     * @example dubbo4
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace.
     *
     * @example acs_ecs_dashboard
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
     * @example 782
     *
     * @var int
     */
    public $serviceId;

    /**
     * @description The name of the service.
     *
     * @example xkc-crm
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The service port number.
     *
     * @example 20880
     *
     * @var int
     */
    public $servicePort;

    /**
     * @description The source type of the service.
     *
     * @example MSE
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
        'agreementType' => 'AgreementType',
        'groupName'     => 'GroupName',
        'name'          => 'Name',
        'namespace'     => 'Namespace',
        'percent'       => 'Percent',
        'serviceId'     => 'ServiceId',
        'serviceName'   => 'ServiceName',
        'servicePort'   => 'ServicePort',
        'sourceType'    => 'SourceType',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementType) {
            $res['AgreementType'] = $this->agreementType;
        }
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
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
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
        if (isset($map['AgreementType'])) {
            $model->agreementType = $map['AgreementType'];
        }
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
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
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
