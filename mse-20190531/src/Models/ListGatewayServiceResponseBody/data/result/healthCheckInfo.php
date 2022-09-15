<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class healthCheckInfo extends Model
{
    /**
     * @var bool
     */
    public $check;

    /**
     * @var int[]
     */
    public $expectedStatuses;

    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var string
     */
    public $httpHost;

    /**
     * @var string
     */
    public $httpPath;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'check'              => 'Check',
        'expectedStatuses'   => 'ExpectedStatuses',
        'healthyThreshold'   => 'HealthyThreshold',
        'httpHost'           => 'HttpHost',
        'httpPath'           => 'HttpPath',
        'interval'           => 'Interval',
        'protocol'           => 'Protocol',
        'timeout'            => 'Timeout',
        'unhealthyThreshold' => 'UnhealthyThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->check) {
            $res['Check'] = $this->check;
        }
        if (null !== $this->expectedStatuses) {
            $res['ExpectedStatuses'] = $this->expectedStatuses;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->httpHost) {
            $res['HttpHost'] = $this->httpHost;
        }
        if (null !== $this->httpPath) {
            $res['HttpPath'] = $this->httpPath;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthCheckInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Check'])) {
            $model->check = $map['Check'];
        }
        if (isset($map['ExpectedStatuses'])) {
            if (!empty($map['ExpectedStatuses'])) {
                $model->expectedStatuses = $map['ExpectedStatuses'];
            }
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['HttpHost'])) {
            $model->httpHost = $map['HttpHost'];
        }
        if (isset($map['HttpPath'])) {
            $model->httpPath = $map['HttpPath'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
