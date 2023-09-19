<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayServiceCheckRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example true
     *
     * @var bool
     */
    public $check;

    /**
     * @var int[]
     */
    public $expectedStatuses;

    /**
     * @example gw-8d410698bd7f4628ab76b*****72dd1d
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example 2
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @example example.com
     *
     * @var string
     */
    public $httpHost;

    /**
     * @example /healthz
     *
     * @var string
     */
    public $httpPath;

    /**
     * @example 2
     *
     * @var int
     */
    public $interval;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @example 12
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example 5
     *
     * @var int
     */
    public $timeout;

    /**
     * @example 2
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'acceptLanguage'     => 'AcceptLanguage',
        'check'              => 'Check',
        'expectedStatuses'   => 'ExpectedStatuses',
        'gatewayUniqueId'    => 'GatewayUniqueId',
        'healthyThreshold'   => 'HealthyThreshold',
        'httpHost'           => 'HttpHost',
        'httpPath'           => 'HttpPath',
        'interval'           => 'Interval',
        'protocol'           => 'Protocol',
        'serviceId'          => 'ServiceId',
        'timeout'            => 'Timeout',
        'unhealthyThreshold' => 'UnhealthyThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->check) {
            $res['Check'] = $this->check;
        }
        if (null !== $this->expectedStatuses) {
            $res['ExpectedStatuses'] = $this->expectedStatuses;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
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
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
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
     * @return UpdateGatewayServiceCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Check'])) {
            $model->check = $map['Check'];
        }
        if (isset($map['ExpectedStatuses'])) {
            if (!empty($map['ExpectedStatuses'])) {
                $model->expectedStatuses = $map['ExpectedStatuses'];
            }
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
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
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
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
