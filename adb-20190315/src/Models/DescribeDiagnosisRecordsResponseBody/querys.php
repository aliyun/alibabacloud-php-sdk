<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class querys extends Model
{
    /**
     * @var string
     */
    public $SQL;

    /**
     * @var int
     */
    public $SQLTruncatedThreshold;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $outputDataSize;

    /**
     * @var int
     */
    public $cost;

    /**
     * @var int
     */
    public $outputRows;

    /**
     * @var string
     */
    public $rcHost;

    /**
     * @var int
     */
    public $scanSize;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var bool
     */
    public $SQLTruncated;

    /**
     * @var string
     */
    public $database;

    /**
     * @var int
     */
    public $scanRows;

    /**
     * @var int
     */
    public $resourceCostRank;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $peakMemory;

    /**
     * @var int
     */
    public $queueTime;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $executionTime;

    /**
     * @var int
     */
    public $totalPlanningTime;

    /**
     * @var int
     */
    public $etlWriteRows;

    /**
     * @var int
     */
    public $totalStages;
    protected $_name = [
        'SQL'                   => 'SQL',
        'SQLTruncatedThreshold' => 'SQLTruncatedThreshold',
        'status'                => 'Status',
        'outputDataSize'        => 'OutputDataSize',
        'cost'                  => 'Cost',
        'outputRows'            => 'OutputRows',
        'rcHost'                => 'RcHost',
        'scanSize'              => 'ScanSize',
        'processId'             => 'ProcessId',
        'startTime'             => 'StartTime',
        'SQLTruncated'          => 'SQLTruncated',
        'database'              => 'Database',
        'scanRows'              => 'ScanRows',
        'resourceCostRank'      => 'ResourceCostRank',
        'clientIp'              => 'ClientIp',
        'peakMemory'            => 'PeakMemory',
        'queueTime'             => 'QueueTime',
        'resourceGroup'         => 'ResourceGroup',
        'userName'              => 'UserName',
        'executionTime'         => 'ExecutionTime',
        'totalPlanningTime'     => 'TotalPlanningTime',
        'etlWriteRows'          => 'EtlWriteRows',
        'totalStages'           => 'TotalStages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }
        if (null !== $this->SQLTruncatedThreshold) {
            $res['SQLTruncatedThreshold'] = $this->SQLTruncatedThreshold;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->outputDataSize) {
            $res['OutputDataSize'] = $this->outputDataSize;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->outputRows) {
            $res['OutputRows'] = $this->outputRows;
        }
        if (null !== $this->rcHost) {
            $res['RcHost'] = $this->rcHost;
        }
        if (null !== $this->scanSize) {
            $res['ScanSize'] = $this->scanSize;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->SQLTruncated) {
            $res['SQLTruncated'] = $this->SQLTruncated;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }
        if (null !== $this->resourceCostRank) {
            $res['ResourceCostRank'] = $this->resourceCostRank;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->executionTime) {
            $res['ExecutionTime'] = $this->executionTime;
        }
        if (null !== $this->totalPlanningTime) {
            $res['TotalPlanningTime'] = $this->totalPlanningTime;
        }
        if (null !== $this->etlWriteRows) {
            $res['EtlWriteRows'] = $this->etlWriteRows;
        }
        if (null !== $this->totalStages) {
            $res['TotalStages'] = $this->totalStages;
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
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }
        if (isset($map['SQLTruncatedThreshold'])) {
            $model->SQLTruncatedThreshold = $map['SQLTruncatedThreshold'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['OutputDataSize'])) {
            $model->outputDataSize = $map['OutputDataSize'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['OutputRows'])) {
            $model->outputRows = $map['OutputRows'];
        }
        if (isset($map['RcHost'])) {
            $model->rcHost = $map['RcHost'];
        }
        if (isset($map['ScanSize'])) {
            $model->scanSize = $map['ScanSize'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SQLTruncated'])) {
            $model->SQLTruncated = $map['SQLTruncated'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }
        if (isset($map['ResourceCostRank'])) {
            $model->resourceCostRank = $map['ResourceCostRank'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['ExecutionTime'])) {
            $model->executionTime = $map['ExecutionTime'];
        }
        if (isset($map['TotalPlanningTime'])) {
            $model->totalPlanningTime = $map['TotalPlanningTime'];
        }
        if (isset($map['EtlWriteRows'])) {
            $model->etlWriteRows = $map['EtlWriteRows'];
        }
        if (isset($map['TotalStages'])) {
            $model->totalStages = $map['TotalStages'];
        }

        return $model;
    }
}
