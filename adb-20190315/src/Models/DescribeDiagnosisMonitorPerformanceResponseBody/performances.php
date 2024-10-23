<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisMonitorPerformanceResponseBody;

use AlibabaCloud\Tea\Model;

class performances extends Model
{
    /**
     * @description The total execution duration. Unit: milliseconds.
     *
     * >  This value is the cumulative value of the `QueuedTime`, `TotalPlanningTime`, and `ExecutionTime` parameters.
     * @example 252
     *
     * @var int
     */
    public $cost;

    /**
     * @description The peak memory of the query. Unit: bytes.
     *
     * @example 123
     *
     * @var int
     */
    public $peakMemory;

    /**
     * @description The query ID.
     *
     * @example 202210311015270330101470300315153****
     *
     * @var string
     */
    public $processId;

    /**
     * @description The IP address of the AnalyticDB for MySQL frontend node on which the SQL statement is executed.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $rcHost;

    /**
     * @description The number of rows scanned.
     *
     * @example 2345
     *
     * @var int
     */
    public $scanRows;

    /**
     * @description The amount of scanned data. Unit: bytes.
     *
     * @example 123
     *
     * @var int
     */
    public $scanSize;

    /**
     * @description The execution start time of the SQL statement. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1669011260000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the SQL statement. Valid values:
     *
     *   **running**
     *   **finished**
     *   **failed**
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The database account that is used to submit the query.
     *
     * @example rpt
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'cost'       => 'Cost',
        'peakMemory' => 'PeakMemory',
        'processId'  => 'ProcessId',
        'rcHost'     => 'RcHost',
        'scanRows'   => 'ScanRows',
        'scanSize'   => 'ScanSize',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
        'userName'   => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->rcHost) {
            $res['RcHost'] = $this->rcHost;
        }
        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }
        if (null !== $this->scanSize) {
            $res['ScanSize'] = $this->scanSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['RcHost'])) {
            $model->rcHost = $map['RcHost'];
        }
        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }
        if (isset($map['ScanSize'])) {
            $model->scanSize = $map['ScanSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
