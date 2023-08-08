<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckResponseBody\vbrHealthChecks;

use AlibabaCloud\Tea\Model;

class vbrHealthCheck extends Model
{
    /**
     * @description The number of probe packets that are sent during the health check.
     *
     * @example cen-6hpdgj7ni6pz1k****
     *
     * @var string
     */
    public $cenId;

    /**
     * @example 2
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @example false
     *
     * @var bool
     */
    public $healthCheckOnly;

    /**
     * @example 172.XX.XX.1
     *
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @description The destination IP address of the health check.
     *
     * @example 192.XX.XX.1
     *
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @description The ID of the request.
     *
     * @example 8
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The source IP address of the health check.
     *
     * @example vbr-bp1kznorjeembsuhl****
     *
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @description The number of entries returned per page.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vbrInstanceRegionId;
    protected $_name = [
        'cenId'               => 'CenId',
        'healthCheckInterval' => 'HealthCheckInterval',
        'healthCheckOnly'     => 'HealthCheckOnly',
        'healthCheckSourceIp' => 'HealthCheckSourceIp',
        'healthCheckTargetIp' => 'HealthCheckTargetIp',
        'healthyThreshold'    => 'HealthyThreshold',
        'vbrInstanceId'       => 'VbrInstanceId',
        'vbrInstanceRegionId' => 'VbrInstanceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckOnly) {
            $res['HealthCheckOnly'] = $this->healthCheckOnly;
        }
        if (null !== $this->healthCheckSourceIp) {
            $res['HealthCheckSourceIp'] = $this->healthCheckSourceIp;
        }
        if (null !== $this->healthCheckTargetIp) {
            $res['HealthCheckTargetIp'] = $this->healthCheckTargetIp;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
        }
        if (null !== $this->vbrInstanceRegionId) {
            $res['VbrInstanceRegionId'] = $this->vbrInstanceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vbrHealthCheck
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckOnly'])) {
            $model->healthCheckOnly = $map['HealthCheckOnly'];
        }
        if (isset($map['HealthCheckSourceIp'])) {
            $model->healthCheckSourceIp = $map['HealthCheckSourceIp'];
        }
        if (isset($map['HealthCheckTargetIp'])) {
            $model->healthCheckTargetIp = $map['HealthCheckTargetIp'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
        }
        if (isset($map['VbrInstanceRegionId'])) {
            $model->vbrInstanceRegionId = $map['VbrInstanceRegionId'];
        }

        return $model;
    }
}
