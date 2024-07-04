<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListResourceHealthInspectionsResponseBody;

use AlibabaCloud\Tea\Model;

class healthInspections extends Model
{
    /**
     * @description 应用名称。
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description 组件名称。
     *
     * @example DataNode
     *
     * @var string
     */
    public $componentName;

    /**
     * @description 健康详细信息。
     *
     * @example Connection timeout
     *
     * @var string
     */
    public $healthMessage;

    /**
     * @description 健康状态。
     *
     * @example GOOD
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description 巡检项名称。
     *
     * @example live_status_check
     *
     * @var string
     */
    public $inspectionName;

    /**
     * @description 节点ID。
     *
     * @example core1-1
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description 节点名称。
     *
     * @example core1-1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description 最近上报时间戳。
     *
     * @example 1639709192940
     *
     * @var int
     */
    public $reportTime;

    /**
     * @description 规则名称。
     *
     * @example live_status_check_1
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'componentName'   => 'ComponentName',
        'healthMessage'   => 'HealthMessage',
        'healthStatus'    => 'HealthStatus',
        'inspectionName'  => 'InspectionName',
        'nodeId'          => 'NodeId',
        'nodeName'        => 'NodeName',
        'reportTime'      => 'ReportTime',
        'ruleName'        => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->healthMessage) {
            $res['HealthMessage'] = $this->healthMessage;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->inspectionName) {
            $res['InspectionName'] = $this->inspectionName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthInspections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['HealthMessage'])) {
            $model->healthMessage = $map['HealthMessage'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InspectionName'])) {
            $model->inspectionName = $map['InspectionName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
