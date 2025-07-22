<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponseBody\data\data\item;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float[]
     */
    public $avgCPUTime;

    /**
     * @var float[]
     */
    public $avgDocExamined;

    /**
     * @var float[]
     */
    public $avgFrows;

    /**
     * @var float[]
     */
    public $avgIOWrites;

    /**
     * @var float[]
     */
    public $avgKeysExamined;

    /**
     * @var float[]
     */
    public $avgLastRowsCountAffected;

    /**
     * @var float[]
     */
    public $avgLockTime;

    /**
     * @var float[]
     */
    public $avgLogicalIOReads;

    /**
     * @var float[]
     */
    public $avgPhysicalIOReads;

    /**
     * @var float[]
     */
    public $avgReturnNum;

    /**
     * @var float[]
     */
    public $avgRows;

    /**
     * @var float[]
     */
    public $avgRowsCountAffected;

    /**
     * @var float[]
     */
    public $avgRowsExamined;

    /**
     * @var float[]
     */
    public $avgRowsSent;

    /**
     * @var float[]
     */
    public $avgRt;

    /**
     * @var float[]
     */
    public $avgScnt;

    /**
     * @var float[]
     */
    public $CPUTime;

    /**
     * @var int[]
     */
    public $count;

    /**
     * @var int[]
     */
    public $docExamined;

    /**
     * @var int[]
     */
    public $frows;

    /**
     * @var int[]
     */
    public $IOWrites;

    /**
     * @var item[]
     */
    public $item;

    /**
     * @var int[]
     */
    public $keysExamined;

    /**
     * @var int[]
     */
    public $lastRowsCountAffected;

    /**
     * @var float[]
     */
    public $lockTime;

    /**
     * @var int[]
     */
    public $logicalIOReads;

    /**
     * @var float[]
     */
    public $maxCPUTime;

    /**
     * @var int[]
     */
    public $maxDocExamined;

    /**
     * @var int[]
     */
    public $maxFrows;

    /**
     * @var int[]
     */
    public $maxIOWrites;

    /**
     * @var int[]
     */
    public $maxKeysExamined;

    /**
     * @var int[]
     */
    public $maxLastRowsCountAffected;

    /**
     * @var float[]
     */
    public $maxLockTime;

    /**
     * @var int[]
     */
    public $maxLogicalIOReads;

    /**
     * @var int[]
     */
    public $maxPhysicalIOReads;

    /**
     * @var int[]
     */
    public $maxReturnNum;

    /**
     * @var int[]
     */
    public $maxRows;

    /**
     * @var int[]
     */
    public $maxRowsCountAffected;

    /**
     * @var int[]
     */
    public $maxRowsExamined;

    /**
     * @var int[]
     */
    public $maxRowsSent;

    /**
     * @var float[]
     */
    public $maxRt;

    /**
     * @var int[]
     */
    public $maxScnt;

    /**
     * @var int[]
     */
    public $physicalIOReads;

    /**
     * @var int[]
     */
    public $returnNum;

    /**
     * @var int[]
     */
    public $rows;

    /**
     * @var int[]
     */
    public $rowsCountAffected;

    /**
     * @var int[]
     */
    public $rowsExamined;

    /**
     * @var int[]
     */
    public $rowsSent;

    /**
     * @var float[]
     */
    public $rt;

    /**
     * @var int[]
     */
    public $scnt;

    /**
     * @example 1
     *
     * @var int
     */
    public $total;

    /**
     * @var int[]
     */
    public $ts;

    /**
     * @var int[]
     */
    public $tsEnd;
    protected $_name = [
        'avgCPUTime' => 'AvgCPUTime',
        'avgDocExamined' => 'AvgDocExamined',
        'avgFrows' => 'AvgFrows',
        'avgIOWrites' => 'AvgIOWrites',
        'avgKeysExamined' => 'AvgKeysExamined',
        'avgLastRowsCountAffected' => 'AvgLastRowsCountAffected',
        'avgLockTime' => 'AvgLockTime',
        'avgLogicalIOReads' => 'AvgLogicalIOReads',
        'avgPhysicalIOReads' => 'AvgPhysicalIOReads',
        'avgReturnNum' => 'AvgReturnNum',
        'avgRows' => 'AvgRows',
        'avgRowsCountAffected' => 'AvgRowsCountAffected',
        'avgRowsExamined' => 'AvgRowsExamined',
        'avgRowsSent' => 'AvgRowsSent',
        'avgRt' => 'AvgRt',
        'avgScnt' => 'AvgScnt',
        'CPUTime' => 'CPUTime',
        'count' => 'Count',
        'docExamined' => 'DocExamined',
        'frows' => 'Frows',
        'IOWrites' => 'IOWrites',
        'item' => 'Item',
        'keysExamined' => 'KeysExamined',
        'lastRowsCountAffected' => 'LastRowsCountAffected',
        'lockTime' => 'LockTime',
        'logicalIOReads' => 'LogicalIOReads',
        'maxCPUTime' => 'MaxCPUTime',
        'maxDocExamined' => 'MaxDocExamined',
        'maxFrows' => 'MaxFrows',
        'maxIOWrites' => 'MaxIOWrites',
        'maxKeysExamined' => 'MaxKeysExamined',
        'maxLastRowsCountAffected' => 'MaxLastRowsCountAffected',
        'maxLockTime' => 'MaxLockTime',
        'maxLogicalIOReads' => 'MaxLogicalIOReads',
        'maxPhysicalIOReads' => 'MaxPhysicalIOReads',
        'maxReturnNum' => 'MaxReturnNum',
        'maxRows' => 'MaxRows',
        'maxRowsCountAffected' => 'MaxRowsCountAffected',
        'maxRowsExamined' => 'MaxRowsExamined',
        'maxRowsSent' => 'MaxRowsSent',
        'maxRt' => 'MaxRt',
        'maxScnt' => 'MaxScnt',
        'physicalIOReads' => 'PhysicalIOReads',
        'returnNum' => 'ReturnNum',
        'rows' => 'Rows',
        'rowsCountAffected' => 'RowsCountAffected',
        'rowsExamined' => 'RowsExamined',
        'rowsSent' => 'RowsSent',
        'rt' => 'Rt',
        'scnt' => 'Scnt',
        'total' => 'Total',
        'ts' => 'Ts',
        'tsEnd' => 'TsEnd',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgCPUTime) {
            $res['AvgCPUTime'] = $this->avgCPUTime;
        }
        if (null !== $this->avgDocExamined) {
            $res['AvgDocExamined'] = $this->avgDocExamined;
        }
        if (null !== $this->avgFrows) {
            $res['AvgFrows'] = $this->avgFrows;
        }
        if (null !== $this->avgIOWrites) {
            $res['AvgIOWrites'] = $this->avgIOWrites;
        }
        if (null !== $this->avgKeysExamined) {
            $res['AvgKeysExamined'] = $this->avgKeysExamined;
        }
        if (null !== $this->avgLastRowsCountAffected) {
            $res['AvgLastRowsCountAffected'] = $this->avgLastRowsCountAffected;
        }
        if (null !== $this->avgLockTime) {
            $res['AvgLockTime'] = $this->avgLockTime;
        }
        if (null !== $this->avgLogicalIOReads) {
            $res['AvgLogicalIOReads'] = $this->avgLogicalIOReads;
        }
        if (null !== $this->avgPhysicalIOReads) {
            $res['AvgPhysicalIOReads'] = $this->avgPhysicalIOReads;
        }
        if (null !== $this->avgReturnNum) {
            $res['AvgReturnNum'] = $this->avgReturnNum;
        }
        if (null !== $this->avgRows) {
            $res['AvgRows'] = $this->avgRows;
        }
        if (null !== $this->avgRowsCountAffected) {
            $res['AvgRowsCountAffected'] = $this->avgRowsCountAffected;
        }
        if (null !== $this->avgRowsExamined) {
            $res['AvgRowsExamined'] = $this->avgRowsExamined;
        }
        if (null !== $this->avgRowsSent) {
            $res['AvgRowsSent'] = $this->avgRowsSent;
        }
        if (null !== $this->avgRt) {
            $res['AvgRt'] = $this->avgRt;
        }
        if (null !== $this->avgScnt) {
            $res['AvgScnt'] = $this->avgScnt;
        }
        if (null !== $this->CPUTime) {
            $res['CPUTime'] = $this->CPUTime;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->docExamined) {
            $res['DocExamined'] = $this->docExamined;
        }
        if (null !== $this->frows) {
            $res['Frows'] = $this->frows;
        }
        if (null !== $this->IOWrites) {
            $res['IOWrites'] = $this->IOWrites;
        }
        if (null !== $this->item) {
            $res['Item'] = [];
            if (null !== $this->item && \is_array($this->item)) {
                $n = 0;
                foreach ($this->item as $item) {
                    $res['Item'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->keysExamined) {
            $res['KeysExamined'] = $this->keysExamined;
        }
        if (null !== $this->lastRowsCountAffected) {
            $res['LastRowsCountAffected'] = $this->lastRowsCountAffected;
        }
        if (null !== $this->lockTime) {
            $res['LockTime'] = $this->lockTime;
        }
        if (null !== $this->logicalIOReads) {
            $res['LogicalIOReads'] = $this->logicalIOReads;
        }
        if (null !== $this->maxCPUTime) {
            $res['MaxCPUTime'] = $this->maxCPUTime;
        }
        if (null !== $this->maxDocExamined) {
            $res['MaxDocExamined'] = $this->maxDocExamined;
        }
        if (null !== $this->maxFrows) {
            $res['MaxFrows'] = $this->maxFrows;
        }
        if (null !== $this->maxIOWrites) {
            $res['MaxIOWrites'] = $this->maxIOWrites;
        }
        if (null !== $this->maxKeysExamined) {
            $res['MaxKeysExamined'] = $this->maxKeysExamined;
        }
        if (null !== $this->maxLastRowsCountAffected) {
            $res['MaxLastRowsCountAffected'] = $this->maxLastRowsCountAffected;
        }
        if (null !== $this->maxLockTime) {
            $res['MaxLockTime'] = $this->maxLockTime;
        }
        if (null !== $this->maxLogicalIOReads) {
            $res['MaxLogicalIOReads'] = $this->maxLogicalIOReads;
        }
        if (null !== $this->maxPhysicalIOReads) {
            $res['MaxPhysicalIOReads'] = $this->maxPhysicalIOReads;
        }
        if (null !== $this->maxReturnNum) {
            $res['MaxReturnNum'] = $this->maxReturnNum;
        }
        if (null !== $this->maxRows) {
            $res['MaxRows'] = $this->maxRows;
        }
        if (null !== $this->maxRowsCountAffected) {
            $res['MaxRowsCountAffected'] = $this->maxRowsCountAffected;
        }
        if (null !== $this->maxRowsExamined) {
            $res['MaxRowsExamined'] = $this->maxRowsExamined;
        }
        if (null !== $this->maxRowsSent) {
            $res['MaxRowsSent'] = $this->maxRowsSent;
        }
        if (null !== $this->maxRt) {
            $res['MaxRt'] = $this->maxRt;
        }
        if (null !== $this->maxScnt) {
            $res['MaxScnt'] = $this->maxScnt;
        }
        if (null !== $this->physicalIOReads) {
            $res['PhysicalIOReads'] = $this->physicalIOReads;
        }
        if (null !== $this->returnNum) {
            $res['ReturnNum'] = $this->returnNum;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->rowsCountAffected) {
            $res['RowsCountAffected'] = $this->rowsCountAffected;
        }
        if (null !== $this->rowsExamined) {
            $res['RowsExamined'] = $this->rowsExamined;
        }
        if (null !== $this->rowsSent) {
            $res['RowsSent'] = $this->rowsSent;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }
        if (null !== $this->scnt) {
            $res['Scnt'] = $this->scnt;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
        }
        if (null !== $this->tsEnd) {
            $res['TsEnd'] = $this->tsEnd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgCPUTime'])) {
            if (!empty($map['AvgCPUTime'])) {
                $model->avgCPUTime = $map['AvgCPUTime'];
            }
        }
        if (isset($map['AvgDocExamined'])) {
            if (!empty($map['AvgDocExamined'])) {
                $model->avgDocExamined = $map['AvgDocExamined'];
            }
        }
        if (isset($map['AvgFrows'])) {
            if (!empty($map['AvgFrows'])) {
                $model->avgFrows = $map['AvgFrows'];
            }
        }
        if (isset($map['AvgIOWrites'])) {
            if (!empty($map['AvgIOWrites'])) {
                $model->avgIOWrites = $map['AvgIOWrites'];
            }
        }
        if (isset($map['AvgKeysExamined'])) {
            if (!empty($map['AvgKeysExamined'])) {
                $model->avgKeysExamined = $map['AvgKeysExamined'];
            }
        }
        if (isset($map['AvgLastRowsCountAffected'])) {
            if (!empty($map['AvgLastRowsCountAffected'])) {
                $model->avgLastRowsCountAffected = $map['AvgLastRowsCountAffected'];
            }
        }
        if (isset($map['AvgLockTime'])) {
            if (!empty($map['AvgLockTime'])) {
                $model->avgLockTime = $map['AvgLockTime'];
            }
        }
        if (isset($map['AvgLogicalIOReads'])) {
            if (!empty($map['AvgLogicalIOReads'])) {
                $model->avgLogicalIOReads = $map['AvgLogicalIOReads'];
            }
        }
        if (isset($map['AvgPhysicalIOReads'])) {
            if (!empty($map['AvgPhysicalIOReads'])) {
                $model->avgPhysicalIOReads = $map['AvgPhysicalIOReads'];
            }
        }
        if (isset($map['AvgReturnNum'])) {
            if (!empty($map['AvgReturnNum'])) {
                $model->avgReturnNum = $map['AvgReturnNum'];
            }
        }
        if (isset($map['AvgRows'])) {
            if (!empty($map['AvgRows'])) {
                $model->avgRows = $map['AvgRows'];
            }
        }
        if (isset($map['AvgRowsCountAffected'])) {
            if (!empty($map['AvgRowsCountAffected'])) {
                $model->avgRowsCountAffected = $map['AvgRowsCountAffected'];
            }
        }
        if (isset($map['AvgRowsExamined'])) {
            if (!empty($map['AvgRowsExamined'])) {
                $model->avgRowsExamined = $map['AvgRowsExamined'];
            }
        }
        if (isset($map['AvgRowsSent'])) {
            if (!empty($map['AvgRowsSent'])) {
                $model->avgRowsSent = $map['AvgRowsSent'];
            }
        }
        if (isset($map['AvgRt'])) {
            if (!empty($map['AvgRt'])) {
                $model->avgRt = $map['AvgRt'];
            }
        }
        if (isset($map['AvgScnt'])) {
            if (!empty($map['AvgScnt'])) {
                $model->avgScnt = $map['AvgScnt'];
            }
        }
        if (isset($map['CPUTime'])) {
            if (!empty($map['CPUTime'])) {
                $model->CPUTime = $map['CPUTime'];
            }
        }
        if (isset($map['Count'])) {
            if (!empty($map['Count'])) {
                $model->count = $map['Count'];
            }
        }
        if (isset($map['DocExamined'])) {
            if (!empty($map['DocExamined'])) {
                $model->docExamined = $map['DocExamined'];
            }
        }
        if (isset($map['Frows'])) {
            if (!empty($map['Frows'])) {
                $model->frows = $map['Frows'];
            }
        }
        if (isset($map['IOWrites'])) {
            if (!empty($map['IOWrites'])) {
                $model->IOWrites = $map['IOWrites'];
            }
        }
        if (isset($map['Item'])) {
            if (!empty($map['Item'])) {
                $model->item = [];
                $n = 0;
                foreach ($map['Item'] as $item) {
                    $model->item[$n++] = null !== $item ? item::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['KeysExamined'])) {
            if (!empty($map['KeysExamined'])) {
                $model->keysExamined = $map['KeysExamined'];
            }
        }
        if (isset($map['LastRowsCountAffected'])) {
            if (!empty($map['LastRowsCountAffected'])) {
                $model->lastRowsCountAffected = $map['LastRowsCountAffected'];
            }
        }
        if (isset($map['LockTime'])) {
            if (!empty($map['LockTime'])) {
                $model->lockTime = $map['LockTime'];
            }
        }
        if (isset($map['LogicalIOReads'])) {
            if (!empty($map['LogicalIOReads'])) {
                $model->logicalIOReads = $map['LogicalIOReads'];
            }
        }
        if (isset($map['MaxCPUTime'])) {
            if (!empty($map['MaxCPUTime'])) {
                $model->maxCPUTime = $map['MaxCPUTime'];
            }
        }
        if (isset($map['MaxDocExamined'])) {
            if (!empty($map['MaxDocExamined'])) {
                $model->maxDocExamined = $map['MaxDocExamined'];
            }
        }
        if (isset($map['MaxFrows'])) {
            if (!empty($map['MaxFrows'])) {
                $model->maxFrows = $map['MaxFrows'];
            }
        }
        if (isset($map['MaxIOWrites'])) {
            if (!empty($map['MaxIOWrites'])) {
                $model->maxIOWrites = $map['MaxIOWrites'];
            }
        }
        if (isset($map['MaxKeysExamined'])) {
            if (!empty($map['MaxKeysExamined'])) {
                $model->maxKeysExamined = $map['MaxKeysExamined'];
            }
        }
        if (isset($map['MaxLastRowsCountAffected'])) {
            if (!empty($map['MaxLastRowsCountAffected'])) {
                $model->maxLastRowsCountAffected = $map['MaxLastRowsCountAffected'];
            }
        }
        if (isset($map['MaxLockTime'])) {
            if (!empty($map['MaxLockTime'])) {
                $model->maxLockTime = $map['MaxLockTime'];
            }
        }
        if (isset($map['MaxLogicalIOReads'])) {
            if (!empty($map['MaxLogicalIOReads'])) {
                $model->maxLogicalIOReads = $map['MaxLogicalIOReads'];
            }
        }
        if (isset($map['MaxPhysicalIOReads'])) {
            if (!empty($map['MaxPhysicalIOReads'])) {
                $model->maxPhysicalIOReads = $map['MaxPhysicalIOReads'];
            }
        }
        if (isset($map['MaxReturnNum'])) {
            if (!empty($map['MaxReturnNum'])) {
                $model->maxReturnNum = $map['MaxReturnNum'];
            }
        }
        if (isset($map['MaxRows'])) {
            if (!empty($map['MaxRows'])) {
                $model->maxRows = $map['MaxRows'];
            }
        }
        if (isset($map['MaxRowsCountAffected'])) {
            if (!empty($map['MaxRowsCountAffected'])) {
                $model->maxRowsCountAffected = $map['MaxRowsCountAffected'];
            }
        }
        if (isset($map['MaxRowsExamined'])) {
            if (!empty($map['MaxRowsExamined'])) {
                $model->maxRowsExamined = $map['MaxRowsExamined'];
            }
        }
        if (isset($map['MaxRowsSent'])) {
            if (!empty($map['MaxRowsSent'])) {
                $model->maxRowsSent = $map['MaxRowsSent'];
            }
        }
        if (isset($map['MaxRt'])) {
            if (!empty($map['MaxRt'])) {
                $model->maxRt = $map['MaxRt'];
            }
        }
        if (isset($map['MaxScnt'])) {
            if (!empty($map['MaxScnt'])) {
                $model->maxScnt = $map['MaxScnt'];
            }
        }
        if (isset($map['PhysicalIOReads'])) {
            if (!empty($map['PhysicalIOReads'])) {
                $model->physicalIOReads = $map['PhysicalIOReads'];
            }
        }
        if (isset($map['ReturnNum'])) {
            if (!empty($map['ReturnNum'])) {
                $model->returnNum = $map['ReturnNum'];
            }
        }
        if (isset($map['Rows'])) {
            if (!empty($map['Rows'])) {
                $model->rows = $map['Rows'];
            }
        }
        if (isset($map['RowsCountAffected'])) {
            if (!empty($map['RowsCountAffected'])) {
                $model->rowsCountAffected = $map['RowsCountAffected'];
            }
        }
        if (isset($map['RowsExamined'])) {
            if (!empty($map['RowsExamined'])) {
                $model->rowsExamined = $map['RowsExamined'];
            }
        }
        if (isset($map['RowsSent'])) {
            if (!empty($map['RowsSent'])) {
                $model->rowsSent = $map['RowsSent'];
            }
        }
        if (isset($map['Rt'])) {
            if (!empty($map['Rt'])) {
                $model->rt = $map['Rt'];
            }
        }
        if (isset($map['Scnt'])) {
            if (!empty($map['Scnt'])) {
                $model->scnt = $map['Scnt'];
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Ts'])) {
            if (!empty($map['Ts'])) {
                $model->ts = $map['Ts'];
            }
        }
        if (isset($map['TsEnd'])) {
            if (!empty($map['TsEnd'])) {
                $model->tsEnd = $map['TsEnd'];
            }
        }

        return $model;
    }
}
