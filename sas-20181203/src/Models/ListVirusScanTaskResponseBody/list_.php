<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListVirusScanTaskResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The timestamp when the virus scan task ended. Unit: milliseconds.
     *
     * @example 1662343860051
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The name of the server.
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
     * @description The progress of the task in percentage.
     *
     * @example 62
     *
     * @var int
     */
    public $progress;

    /**
     * @description The information about the file that is scanned.
     *
     * @var string[]
     */
    public $scanPath;

    /**
     * @description The type of the virus scan task. Valid values:
     *
     *   **system**: automatic scan task
     *   **user**: custom scan task
     *
     * @example system
     *
     * @var string
     */
    public $scanType;

    /**
     * @description The timestamp when the virus scan task started. Unit: milliseconds.
     *
     * @example 1651290987000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the virus scan task. Valid values:
     *
     *   **1**: running
     *   **2**: complete
     *   **3**: failed
     *   **4**: timed out
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the virus scan task.
     *
     * @example 2e75557bfa570381f5c516cad9b6xxxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the virus scan task.
     *
     *   The value is fixed as **VIRUS_VUL_SCHEDULE_SCAN**, which indicates a virus scan task.
     *
     * @example VIRUS_VUL_SCHEDULE_SCAN
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The UUID of the server.
     *
     * @example 49e25e0f-bb51-4a5a-a1b3-13a4ddaa****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'endTime'      => 'EndTime',
        'instanceName' => 'InstanceName',
        'internetIp'   => 'InternetIp',
        'intranetIp'   => 'IntranetIp',
        'progress'     => 'Progress',
        'scanPath'     => 'ScanPath',
        'scanType'     => 'ScanType',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'taskId'       => 'TaskId',
        'taskName'     => 'TaskName',
        'uuid'         => 'Uuid',
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
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->scanPath) {
            $res['ScanPath'] = $this->scanPath;
        }
        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ScanPath'])) {
            if (!empty($map['ScanPath'])) {
                $model->scanPath = $map['ScanPath'];
            }
        }
        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
