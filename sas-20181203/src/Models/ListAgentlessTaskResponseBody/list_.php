<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessTaskResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The end timestamp of the task. Unit: milliseconds.
     *
     * @example 1678895999999
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The name of the asset.
     *
     * @example sql-test-0****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 8.210.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 172.25.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The volume of detection data, in MB.
     *
     * @example 154.11
     *
     * @var int
     */
    public $measureSpace;

    /**
     * @description The progress of the task.
     *
     * @example 60
     *
     * @var int
     */
    public $progress;

    /**
     * @description The execution progress of the inspection items.
     *
     * @example "{\"scaVul\":100,\"binary\":100,\"baseline\":100,\"vul\":100,\"webshell\":100,\"script\":100,\"sensitiveInfo\":100}"
     *
     * @var string
     */
    public $progressByProject;

    /**
     * @description The download link for the report.
     *
     * @example http://newsas-oss-bucket.oss-cn-hangzhou.aliyuncs.com/agent_less_single_report****
     *
     * @var string
     */
    public $reportDownloadUrl;

    /**
     * @description The status of the report. Possible values:
     *
     *   **PREPARED**: In preparation.
     *   **RUNNING**: In progress.
     *   **SUCCESS**: Successful.
     *   **TIMEOUT**: Timeout.
     *   **FAILED**: Failed.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $reportStatus;

    /**
     * @description The result of the detection.
     *
     * @example True
     *
     * @var string
     */
    public $result;

    /**
     * @description The start timestamp of the task. Unit: milliseconds.
     *
     * @example 1672741657897
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the detection task.
     *
     *   **1**: The detection task is in progress.
     *   **2**: The detection task is complete.
     *   **3**: The detection task fails.
     *   **4**: The detection task times out.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The name of the asset that is detected.
     *
     * @example hkdevt****
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The type of the asset that is detected. Valid values:
     *
     *   **1**: snapshot
     *   **2**: image
     *
     * @example 2
     *
     * @var int
     */
    public $targetType;

    /**
     * @description The ID of the task.
     *
     * @example 1538****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the detection task.
     *
     * @example AGENTLESS_SCAN
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The UUID of the asset.
     *
     * @example 49e25e0f-bb51-4a5a-a1b3-13a4ddaa****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'endTime'           => 'EndTime',
        'instanceName'      => 'InstanceName',
        'internetIp'        => 'InternetIp',
        'intranetIp'        => 'IntranetIp',
        'measureSpace'      => 'MeasureSpace',
        'progress'          => 'Progress',
        'progressByProject' => 'ProgressByProject',
        'reportDownloadUrl' => 'ReportDownloadUrl',
        'reportStatus'      => 'ReportStatus',
        'result'            => 'Result',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
        'targetName'        => 'TargetName',
        'targetType'        => 'TargetType',
        'taskId'            => 'TaskId',
        'taskName'          => 'TaskName',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->measureSpace) {
            $res['MeasureSpace'] = $this->measureSpace;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->progressByProject) {
            $res['ProgressByProject'] = $this->progressByProject;
        }
        if (null !== $this->reportDownloadUrl) {
            $res['ReportDownloadUrl'] = $this->reportDownloadUrl;
        }
        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['MeasureSpace'])) {
            $model->measureSpace = $map['MeasureSpace'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProgressByProject'])) {
            $model->progressByProject = $map['ProgressByProject'];
        }
        if (isset($map['ReportDownloadUrl'])) {
            $model->reportDownloadUrl = $map['ReportDownloadUrl'];
        }
        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
