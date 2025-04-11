<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckResponseBody\vbrHealthChecks;

use AlibabaCloud\Dara\Model;

class vbrHealthCheck extends Model
{
    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var bool
     */
    public $healthCheckOnly;

    /**
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @var string
     */
    public $vbrInstanceRegionId;
    protected $_name = [
        'cenId' => 'CenId',
        'description' => 'Description',
        'healthCheckInterval' => 'HealthCheckInterval',
        'healthCheckOnly' => 'HealthCheckOnly',
        'healthCheckSourceIp' => 'HealthCheckSourceIp',
        'healthCheckTargetIp' => 'HealthCheckTargetIp',
        'healthyThreshold' => 'HealthyThreshold',
        'vbrInstanceId' => 'VbrInstanceId',
        'vbrInstanceRegionId' => 'VbrInstanceRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
