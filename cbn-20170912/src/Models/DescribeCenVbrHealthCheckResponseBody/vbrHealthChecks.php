<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckResponseBody;

use AlibabaCloud\Tea\Model;

class vbrHealthChecks extends Model
{
    /**
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @var string
     */
    public $vbrInstanceRegionId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var string
     */
    public $healthCheckSourceIp;
    protected $_name = [
        'healthCheckTargetIp' => 'HealthCheckTargetIp',
        'vbrInstanceId'       => 'VbrInstanceId',
        'vbrInstanceRegionId' => 'VbrInstanceRegionId',
        'cenId'               => 'CenId',
        'healthyThreshold'    => 'HealthyThreshold',
        'healthCheckInterval' => 'HealthCheckInterval',
        'healthCheckSourceIp' => 'HealthCheckSourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckTargetIp) {
            $res['HealthCheckTargetIp'] = $this->healthCheckTargetIp;
        }
        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
        }
        if (null !== $this->vbrInstanceRegionId) {
            $res['VbrInstanceRegionId'] = $this->vbrInstanceRegionId;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckSourceIp) {
            $res['HealthCheckSourceIp'] = $this->healthCheckSourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vbrHealthChecks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckTargetIp'])) {
            $model->healthCheckTargetIp = $map['HealthCheckTargetIp'];
        }
        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
        }
        if (isset($map['VbrInstanceRegionId'])) {
            $model->vbrInstanceRegionId = $map['VbrInstanceRegionId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckSourceIp'])) {
            $model->healthCheckSourceIp = $map['HealthCheckSourceIp'];
        }

        return $model;
    }
}
