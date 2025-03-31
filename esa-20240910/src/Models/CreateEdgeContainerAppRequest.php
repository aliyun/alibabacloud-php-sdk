<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateEdgeContainerAppRequest extends Model
{
    /**
     * @var int
     */
    public $healthCheckFailTimes;

    /**
     * @var string
     */
    public $healthCheckHost;

    /**
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @var int
     */
    public $healthCheckPort;

    /**
     * @var int
     */
    public $healthCheckSuccTimes;

    /**
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @var string
     */
    public $healthCheckType;

    /**
     * @var string
     */
    public $healthCheckURI;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var int
     */
    public $servicePort;

    /**
     * @var int
     */
    public $targetPort;
    protected $_name = [
        'healthCheckFailTimes' => 'HealthCheckFailTimes',
        'healthCheckHost' => 'HealthCheckHost',
        'healthCheckHttpCode' => 'HealthCheckHttpCode',
        'healthCheckInterval' => 'HealthCheckInterval',
        'healthCheckMethod' => 'HealthCheckMethod',
        'healthCheckPort' => 'HealthCheckPort',
        'healthCheckSuccTimes' => 'HealthCheckSuccTimes',
        'healthCheckTimeout' => 'HealthCheckTimeout',
        'healthCheckType' => 'HealthCheckType',
        'healthCheckURI' => 'HealthCheckURI',
        'name' => 'Name',
        'remarks' => 'Remarks',
        'servicePort' => 'ServicePort',
        'targetPort' => 'TargetPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthCheckFailTimes) {
            $res['HealthCheckFailTimes'] = $this->healthCheckFailTimes;
        }

        if (null !== $this->healthCheckHost) {
            $res['HealthCheckHost'] = $this->healthCheckHost;
        }

        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }

        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }

        if (null !== $this->healthCheckMethod) {
            $res['HealthCheckMethod'] = $this->healthCheckMethod;
        }

        if (null !== $this->healthCheckPort) {
            $res['HealthCheckPort'] = $this->healthCheckPort;
        }

        if (null !== $this->healthCheckSuccTimes) {
            $res['HealthCheckSuccTimes'] = $this->healthCheckSuccTimes;
        }

        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }

        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }

        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }

        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }

        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
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
        if (isset($map['HealthCheckFailTimes'])) {
            $model->healthCheckFailTimes = $map['HealthCheckFailTimes'];
        }

        if (isset($map['HealthCheckHost'])) {
            $model->healthCheckHost = $map['HealthCheckHost'];
        }

        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }

        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }

        if (isset($map['HealthCheckMethod'])) {
            $model->healthCheckMethod = $map['HealthCheckMethod'];
        }

        if (isset($map['HealthCheckPort'])) {
            $model->healthCheckPort = $map['HealthCheckPort'];
        }

        if (isset($map['HealthCheckSuccTimes'])) {
            $model->healthCheckSuccTimes = $map['HealthCheckSuccTimes'];
        }

        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }

        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }

        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }

        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }

        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        return $model;
    }
}
