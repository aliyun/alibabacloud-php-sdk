<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class QueryMonitorRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The timestamp when the monitoring ends.
     *
     * @example 1666678376
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the instance.
     *
     * @example mse-cn-****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The metric type. The following metric types are supported:
     *
     * \[Basic system metrics]
     *
     *   cpuUsage
     *   memoryUsage
     *   diskUsage
     *   gcCount
     *   gcTime
     *
     * \[Nacos registry]
     *
     *   serviceCount
     *   writeCostTime
     *   readCostTime
     *   TPS regCenterTps
     *   QPS regCenterQps
     *
     * \[Nacos configuration center]
     *
     *   publish
     *   getConfig
     *
     * \[zookeeper]
     *
     *   TPS zk_TpsCount
     *   QPS zk_QpsCount
     *   zookeeper_AvgRequestLatency
     *
     * @example regCenterQps
     *
     * @var string
     */
    public $monitorType;

    /**
     * @description The extended request parameters in the JSON format.
     *
     * @example {}
     *
     * @var string
     */
    public $requestPars;

    /**
     * @description The timestamp when the monitoring starts.
     *
     * @example 1666678376
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The interval between data points. Unit: seconds.
     *
     * @example 7
     *
     * @var int
     */
    public $step;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'endTime'        => 'EndTime',
        'instanceId'     => 'InstanceId',
        'monitorType'    => 'MonitorType',
        'requestPars'    => 'RequestPars',
        'startTime'      => 'StartTime',
        'step'           => 'Step',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
