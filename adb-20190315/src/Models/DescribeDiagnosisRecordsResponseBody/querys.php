<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class querys extends Model
{
    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $cost;

    /**
     * @var string
     */
    public $database;

    /**
     * @var int
     */
    public $etlWriteRows;

    /**
     * @var int
     */
    public $executionTime;

    /**
     * @var int
     */
    public $outputDataSize;

    /**
     * @var int
     */
    public $outputRows;

    /**
     * @var int
     */
    public $peakMemory;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var int
     */
    public $queueTime;

    /**
     * @var string
     */
    public $rcHost;

    /**
     * @var int
     */
    public $resourceCostRank;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $SQL;

    /**
     * @var bool
     */
    public $SQLTruncated;

    /**
     * @var int
     */
    public $SQLTruncatedThreshold;

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
     * @var int
     */
    public $totalPlanningTime;

    /**
     * @var int
     */
    public $totalStages;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'clientIp'              => 'ClientIp',
        'cost'                  => 'Cost',
        'database'              => 'Database',
        'etlWriteRows'          => 'EtlWriteRows',
        'executionTime'         => 'ExecutionTime',
        'outputDataSize'        => 'OutputDataSize',
        'outputRows'            => 'OutputRows',
        'peakMemory'            => 'PeakMemory',
        'processId'             => 'ProcessId',
        'queueTime'             => 'QueueTime',
        'rcHost'                => 'RcHost',
        'resourceCostRank'      => 'ResourceCostRank',
        'resourceGroup'         => 'ResourceGroup',
        'SQL'                   => 'SQL',
        'SQLTruncated'          => 'SQLTruncated',
        'SQLTruncatedThreshold' => 'SQLTruncatedThreshold',
        'scanRows'              => 'ScanRows',
        'scanSize'              => 'ScanSize',
        'startTime'             => 'StartTime',
        'status'                => 'Status',
        'totalPlanningTime'     => 'TotalPlanningTime',
        'totalStages'           => 'TotalStages',
        'userName'              => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->etlWriteRows) {
            $res['EtlWriteRows'] = $this->etlWriteRows;
        }
        if (null !== $this->executionTime) {
            $res['ExecutionTime'] = $this->executionTime;
        }
        if (null !== $this->outputDataSize) {
            $res['OutputDataSize'] = $this->outputDataSize;
        }
        if (null !== $this->outputRows) {
            $res['OutputRows'] = $this->outputRows;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }
        if (null !== $this->rcHost) {
            $res['RcHost'] = $this->rcHost;
        }
        if (null !== $this->resourceCostRank) {
            $res['ResourceCostRank'] = $this->resourceCostRank;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }
        if (null !== $this->SQLTruncated) {
            $res['SQLTruncated'] = $this->SQLTruncated;
        }
        if (null !== $this->SQLTruncatedThreshold) {
            $res['SQLTruncatedThreshold'] = $this->SQLTruncatedThreshold;
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
        if (null !== $this->totalPlanningTime) {
            $res['TotalPlanningTime'] = $this->totalPlanningTime;
        }
        if (null !== $this->totalStages) {
            $res['TotalStages'] = $this->totalStages;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return querys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['EtlWriteRows'])) {
            $model->etlWriteRows = $map['EtlWriteRows'];
        }
        if (isset($map['ExecutionTime'])) {
            $model->executionTime = $map['ExecutionTime'];
        }
        if (isset($map['OutputDataSize'])) {
            $model->outputDataSize = $map['OutputDataSize'];
        }
        if (isset($map['OutputRows'])) {
            $model->outputRows = $map['OutputRows'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }
        if (isset($map['RcHost'])) {
            $model->rcHost = $map['RcHost'];
        }
        if (isset($map['ResourceCostRank'])) {
            $model->resourceCostRank = $map['ResourceCostRank'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }
        if (isset($map['SQLTruncated'])) {
            $model->SQLTruncated = $map['SQLTruncated'];
        }
        if (isset($map['SQLTruncatedThreshold'])) {
            $model->SQLTruncatedThreshold = $map['SQLTruncatedThreshold'];
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
        if (isset($map['TotalPlanningTime'])) {
            $model->totalPlanningTime = $map['TotalPlanningTime'];
        }
        if (isset($map['TotalStages'])) {
            $model->totalStages = $map['TotalStages'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
