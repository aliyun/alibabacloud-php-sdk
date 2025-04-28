<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisMonitorPerformanceResponseBody;

use AlibabaCloud\Dara\Model;

class performances extends Model
{
    /**
     * @var int
     */
    public $cost;

    /**
     * @var int
     */
    public $peakMemory;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $rcHost;

    /**
     * @var int
     */
    public $scanRows;

    /**
     * @var int
     */
    public $scanSize;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'cost' => 'Cost',
        'peakMemory' => 'PeakMemory',
        'processId' => 'ProcessId',
        'rcHost' => 'RcHost',
        'scanRows' => 'ScanRows',
        'scanSize' => 'ScanSize',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
