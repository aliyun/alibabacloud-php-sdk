<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponseBody\data;

use AlibabaCloud\Tea\Model;

class appDetail extends Model
{
    /**
     * @description The ID of the application for which Microservices Governance is enabled.
     *
     * @example hkhon1po62@904cba2c0xxxxxx
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application for which Microservices Governance is enabled.
     *
     * @example spring-cloud-b
     *
     * @var string
     */
    public $appName;

    /**
     * @description The health check interval. Unit: seconds.
     *
     * @example 2
     *
     * @var int
     */
    public $checkInternal;

    /**
     * @description The path of the health check. This parameter is required only when the CheckType parameter is set to http.
     *
     * @example /health
     *
     * @var string
     */
    public $checkPath;

    /**
     * @description The timeout period of the health check response. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $checkTimeout;

    /**
     * @description The type of the health check. Valid values:
     *
     *   connection: connection status check
     *   tcp: TCP connection check
     *   http: HTTP connection check
     *
     * @example connection
     *
     * @var string
     */
    public $checkType;

    /**
     * @description The maximum number of health check retries when the instance state changes from unhealthy to healthy.
     *
     * @example 2
     *
     * @var int
     */
    public $healthyCheckTimes;

    /**
     * @description The port number of the application for which Microservices Governance is enabled.
     *
     * @example 6001
     *
     * @var int
     */
    public $port;

    /**
     * @description The maximum number of health check retries when the instance state changes from healthy to unhealthy.
     *
     * @example 2
     *
     * @var int
     */
    public $unhealthyCheckTimes;
    protected $_name = [
        'appId'               => 'AppId',
        'appName'             => 'AppName',
        'checkInternal'       => 'CheckInternal',
        'checkPath'           => 'CheckPath',
        'checkTimeout'        => 'CheckTimeout',
        'checkType'           => 'CheckType',
        'healthyCheckTimes'   => 'HealthyCheckTimes',
        'port'                => 'Port',
        'unhealthyCheckTimes' => 'UnhealthyCheckTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->checkInternal) {
            $res['CheckInternal'] = $this->checkInternal;
        }
        if (null !== $this->checkPath) {
            $res['CheckPath'] = $this->checkPath;
        }
        if (null !== $this->checkTimeout) {
            $res['CheckTimeout'] = $this->checkTimeout;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->healthyCheckTimes) {
            $res['HealthyCheckTimes'] = $this->healthyCheckTimes;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->unhealthyCheckTimes) {
            $res['UnhealthyCheckTimes'] = $this->unhealthyCheckTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CheckInternal'])) {
            $model->checkInternal = $map['CheckInternal'];
        }
        if (isset($map['CheckPath'])) {
            $model->checkPath = $map['CheckPath'];
        }
        if (isset($map['CheckTimeout'])) {
            $model->checkTimeout = $map['CheckTimeout'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['HealthyCheckTimes'])) {
            $model->healthyCheckTimes = $map['HealthyCheckTimes'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['UnhealthyCheckTimes'])) {
            $model->unhealthyCheckTimes = $map['UnhealthyCheckTimes'];
        }

        return $model;
    }
}
