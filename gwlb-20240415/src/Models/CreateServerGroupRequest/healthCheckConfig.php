<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\CreateServerGroupRequest;

use AlibabaCloud\Dara\Model;

class healthCheckConfig extends Model
{
    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @var bool
     */
    public $healthCheckEnabled;

    /**
     * @var string[]
     */
    public $healthCheckHttpCode;

    /**
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var string
     */
    public $healthCheckPath;

    /**
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'healthCheckConnectPort' => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckDomain' => 'HealthCheckDomain',
        'healthCheckEnabled' => 'HealthCheckEnabled',
        'healthCheckHttpCode' => 'HealthCheckHttpCode',
        'healthCheckInterval' => 'HealthCheckInterval',
        'healthCheckPath' => 'HealthCheckPath',
        'healthCheckProtocol' => 'HealthCheckProtocol',
        'healthyThreshold' => 'HealthyThreshold',
        'unhealthyThreshold' => 'UnhealthyThreshold',
    ];

    public function validate()
    {
        if (\is_array($this->healthCheckHttpCode)) {
            Model::validateArray($this->healthCheckHttpCode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }

        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }

        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }

        if (null !== $this->healthCheckEnabled) {
            $res['HealthCheckEnabled'] = $this->healthCheckEnabled;
        }

        if (null !== $this->healthCheckHttpCode) {
            if (\is_array($this->healthCheckHttpCode)) {
                $res['HealthCheckHttpCode'] = [];
                $n1 = 0;
                foreach ($this->healthCheckHttpCode as $item1) {
                    $res['HealthCheckHttpCode'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }

        if (null !== $this->healthCheckPath) {
            $res['HealthCheckPath'] = $this->healthCheckPath;
        }

        if (null !== $this->healthCheckProtocol) {
            $res['HealthCheckProtocol'] = $this->healthCheckProtocol;
        }

        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }

        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
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
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }

        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }

        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }

        if (isset($map['HealthCheckEnabled'])) {
            $model->healthCheckEnabled = $map['HealthCheckEnabled'];
        }

        if (isset($map['HealthCheckHttpCode'])) {
            if (!empty($map['HealthCheckHttpCode'])) {
                $model->healthCheckHttpCode = [];
                $n1 = 0;
                foreach ($map['HealthCheckHttpCode'] as $item1) {
                    $model->healthCheckHttpCode[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }

        if (isset($map['HealthCheckPath'])) {
            $model->healthCheckPath = $map['HealthCheckPath'];
        }

        if (isset($map['HealthCheckProtocol'])) {
            $model->healthCheckProtocol = $map['HealthCheckProtocol'];
        }

        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }

        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
