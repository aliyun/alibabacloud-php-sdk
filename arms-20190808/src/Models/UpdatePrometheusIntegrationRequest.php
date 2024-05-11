<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrometheusIntegrationRequest extends Model
{
    /**
     * @description The ID of the Prometheus instance. Only a Prometheus instance for Container Service or a Prometheus instance for ECS is supported.
     *
     * This parameter is required.
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The exporter ID.
     *
     * @example 2893
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The type of the integration.
     *
     * This parameter is required.
     * @example kafka, mysql, redis, snmp, emr, nubela, and tidb
     *
     * @var string
     */
    public $integrationType;

    /**
     * @description The configurations of the exporter. The value is a JSON string.
     *
     * This parameter is required.
     * @example {
     * }
     * @var string
     */
    public $param;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'instanceId'      => 'InstanceId',
        'integrationType' => 'IntegrationType',
        'param'           => 'Param',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrometheusIntegrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
