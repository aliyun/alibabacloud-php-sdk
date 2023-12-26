<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckResponseBody\vbrHealthChecks;

use AlibabaCloud\Tea\Model;

class vbrHealthCheck extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-6hpdgj7ni6pz1k****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The description of the health check.
     *
     * @example healthcheck_description
     *
     * @var string
     */
    public $description;

    /**
     * @description The time interval at which probe packets are sent during the health check. Unit: seconds.
     *
     * @example 2
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description Indicates whether probing is enabled. Valid values:
     *
     *   **true**: yes
     *
     * If probing is enabled, the system does not switch to another route when the detected route is not reachable.
     *
     *   **false**: no
     *
     * If probing is disabled and a redundant route is specified, the system switches to the redundant route when the detected route is not reachable.
     * @example false
     *
     * @var bool
     */
    public $healthCheckOnly;

    /**
     * @description The source IP address of the health check.
     *
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
     * @description The number of probe packets that are sent during the health check.
     *
     * @example 8
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The ID of the VBR.
     *
     * @example vbr-bp1kznorjeembsuhl****
     *
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @description The ID of the region where the VBR is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vbrInstanceRegionId;
    protected $_name = [
        'cenId'               => 'CenId',
        'description'         => 'Description',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
