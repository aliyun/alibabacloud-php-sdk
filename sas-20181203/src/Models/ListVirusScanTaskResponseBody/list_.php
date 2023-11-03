<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListVirusScanTaskResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1662343860051
     *
     * @var int
     */
    public $endTime;

    /**
     * @example sql-test-0****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 8.210.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 172.25.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example 62
     *
     * @var int
     */
    public $progress;

    /**
     * @var string[]
     */
    public $scanPath;

    /**
     * @example system
     *
     * @var string
     */
    public $scanType;

    /**
     * @example 1651290987000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 2e75557bfa570381f5c516cad9b6xxxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @example VIRUS_VUL_SCHEDULE_SCAN
     *
     * @var string
     */
    public $taskName;

    /**
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
