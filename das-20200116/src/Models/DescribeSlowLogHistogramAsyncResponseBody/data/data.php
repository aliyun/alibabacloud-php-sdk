<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponseBody\data\data\item;

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

    public function validate()
    {
        if (\is_array($this->avgCPUTime)) {
            Model::validateArray($this->avgCPUTime);
        }
        if (\is_array($this->avgDocExamined)) {
            Model::validateArray($this->avgDocExamined);
        }
        if (\is_array($this->avgFrows)) {
            Model::validateArray($this->avgFrows);
        }
        if (\is_array($this->avgIOWrites)) {
            Model::validateArray($this->avgIOWrites);
        }
        if (\is_array($this->avgKeysExamined)) {
            Model::validateArray($this->avgKeysExamined);
        }
        if (\is_array($this->avgLastRowsCountAffected)) {
            Model::validateArray($this->avgLastRowsCountAffected);
        }
        if (\is_array($this->avgLockTime)) {
            Model::validateArray($this->avgLockTime);
        }
        if (\is_array($this->avgLogicalIOReads)) {
            Model::validateArray($this->avgLogicalIOReads);
        }
        if (\is_array($this->avgPhysicalIOReads)) {
            Model::validateArray($this->avgPhysicalIOReads);
        }
        if (\is_array($this->avgReturnNum)) {
            Model::validateArray($this->avgReturnNum);
        }
        if (\is_array($this->avgRows)) {
            Model::validateArray($this->avgRows);
        }
        if (\is_array($this->avgRowsCountAffected)) {
            Model::validateArray($this->avgRowsCountAffected);
        }
        if (\is_array($this->avgRowsExamined)) {
            Model::validateArray($this->avgRowsExamined);
        }
        if (\is_array($this->avgRowsSent)) {
            Model::validateArray($this->avgRowsSent);
        }
        if (\is_array($this->avgRt)) {
            Model::validateArray($this->avgRt);
        }
        if (\is_array($this->avgScnt)) {
            Model::validateArray($this->avgScnt);
        }
        if (\is_array($this->CPUTime)) {
            Model::validateArray($this->CPUTime);
        }
        if (\is_array($this->count)) {
            Model::validateArray($this->count);
        }
        if (\is_array($this->docExamined)) {
            Model::validateArray($this->docExamined);
        }
        if (\is_array($this->frows)) {
            Model::validateArray($this->frows);
        }
        if (\is_array($this->IOWrites)) {
            Model::validateArray($this->IOWrites);
        }
        if (\is_array($this->item)) {
            Model::validateArray($this->item);
        }
        if (\is_array($this->keysExamined)) {
            Model::validateArray($this->keysExamined);
        }
        if (\is_array($this->lastRowsCountAffected)) {
            Model::validateArray($this->lastRowsCountAffected);
        }
        if (\is_array($this->lockTime)) {
            Model::validateArray($this->lockTime);
        }
        if (\is_array($this->logicalIOReads)) {
            Model::validateArray($this->logicalIOReads);
        }
        if (\is_array($this->maxCPUTime)) {
            Model::validateArray($this->maxCPUTime);
        }
        if (\is_array($this->maxDocExamined)) {
            Model::validateArray($this->maxDocExamined);
        }
        if (\is_array($this->maxFrows)) {
            Model::validateArray($this->maxFrows);
        }
        if (\is_array($this->maxIOWrites)) {
            Model::validateArray($this->maxIOWrites);
        }
        if (\is_array($this->maxKeysExamined)) {
            Model::validateArray($this->maxKeysExamined);
        }
        if (\is_array($this->maxLastRowsCountAffected)) {
            Model::validateArray($this->maxLastRowsCountAffected);
        }
        if (\is_array($this->maxLockTime)) {
            Model::validateArray($this->maxLockTime);
        }
        if (\is_array($this->maxLogicalIOReads)) {
            Model::validateArray($this->maxLogicalIOReads);
        }
        if (\is_array($this->maxPhysicalIOReads)) {
            Model::validateArray($this->maxPhysicalIOReads);
        }
        if (\is_array($this->maxReturnNum)) {
            Model::validateArray($this->maxReturnNum);
        }
        if (\is_array($this->maxRows)) {
            Model::validateArray($this->maxRows);
        }
        if (\is_array($this->maxRowsCountAffected)) {
            Model::validateArray($this->maxRowsCountAffected);
        }
        if (\is_array($this->maxRowsExamined)) {
            Model::validateArray($this->maxRowsExamined);
        }
        if (\is_array($this->maxRowsSent)) {
            Model::validateArray($this->maxRowsSent);
        }
        if (\is_array($this->maxRt)) {
            Model::validateArray($this->maxRt);
        }
        if (\is_array($this->maxScnt)) {
            Model::validateArray($this->maxScnt);
        }
        if (\is_array($this->physicalIOReads)) {
            Model::validateArray($this->physicalIOReads);
        }
        if (\is_array($this->returnNum)) {
            Model::validateArray($this->returnNum);
        }
        if (\is_array($this->rows)) {
            Model::validateArray($this->rows);
        }
        if (\is_array($this->rowsCountAffected)) {
            Model::validateArray($this->rowsCountAffected);
        }
        if (\is_array($this->rowsExamined)) {
            Model::validateArray($this->rowsExamined);
        }
        if (\is_array($this->rowsSent)) {
            Model::validateArray($this->rowsSent);
        }
        if (\is_array($this->rt)) {
            Model::validateArray($this->rt);
        }
        if (\is_array($this->scnt)) {
            Model::validateArray($this->scnt);
        }
        if (\is_array($this->ts)) {
            Model::validateArray($this->ts);
        }
        if (\is_array($this->tsEnd)) {
            Model::validateArray($this->tsEnd);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgCPUTime) {
            if (\is_array($this->avgCPUTime)) {
                $res['AvgCPUTime'] = [];
                $n1 = 0;
                foreach ($this->avgCPUTime as $item1) {
                    $res['AvgCPUTime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgDocExamined) {
            if (\is_array($this->avgDocExamined)) {
                $res['AvgDocExamined'] = [];
                $n1 = 0;
                foreach ($this->avgDocExamined as $item1) {
                    $res['AvgDocExamined'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgFrows) {
            if (\is_array($this->avgFrows)) {
                $res['AvgFrows'] = [];
                $n1 = 0;
                foreach ($this->avgFrows as $item1) {
                    $res['AvgFrows'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgIOWrites) {
            if (\is_array($this->avgIOWrites)) {
                $res['AvgIOWrites'] = [];
                $n1 = 0;
                foreach ($this->avgIOWrites as $item1) {
                    $res['AvgIOWrites'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgKeysExamined) {
            if (\is_array($this->avgKeysExamined)) {
                $res['AvgKeysExamined'] = [];
                $n1 = 0;
                foreach ($this->avgKeysExamined as $item1) {
                    $res['AvgKeysExamined'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgLastRowsCountAffected) {
            if (\is_array($this->avgLastRowsCountAffected)) {
                $res['AvgLastRowsCountAffected'] = [];
                $n1 = 0;
                foreach ($this->avgLastRowsCountAffected as $item1) {
                    $res['AvgLastRowsCountAffected'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgLockTime) {
            if (\is_array($this->avgLockTime)) {
                $res['AvgLockTime'] = [];
                $n1 = 0;
                foreach ($this->avgLockTime as $item1) {
                    $res['AvgLockTime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgLogicalIOReads) {
            if (\is_array($this->avgLogicalIOReads)) {
                $res['AvgLogicalIOReads'] = [];
                $n1 = 0;
                foreach ($this->avgLogicalIOReads as $item1) {
                    $res['AvgLogicalIOReads'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgPhysicalIOReads) {
            if (\is_array($this->avgPhysicalIOReads)) {
                $res['AvgPhysicalIOReads'] = [];
                $n1 = 0;
                foreach ($this->avgPhysicalIOReads as $item1) {
                    $res['AvgPhysicalIOReads'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgReturnNum) {
            if (\is_array($this->avgReturnNum)) {
                $res['AvgReturnNum'] = [];
                $n1 = 0;
                foreach ($this->avgReturnNum as $item1) {
                    $res['AvgReturnNum'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgRows) {
            if (\is_array($this->avgRows)) {
                $res['AvgRows'] = [];
                $n1 = 0;
                foreach ($this->avgRows as $item1) {
                    $res['AvgRows'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgRowsCountAffected) {
            if (\is_array($this->avgRowsCountAffected)) {
                $res['AvgRowsCountAffected'] = [];
                $n1 = 0;
                foreach ($this->avgRowsCountAffected as $item1) {
                    $res['AvgRowsCountAffected'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgRowsExamined) {
            if (\is_array($this->avgRowsExamined)) {
                $res['AvgRowsExamined'] = [];
                $n1 = 0;
                foreach ($this->avgRowsExamined as $item1) {
                    $res['AvgRowsExamined'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgRowsSent) {
            if (\is_array($this->avgRowsSent)) {
                $res['AvgRowsSent'] = [];
                $n1 = 0;
                foreach ($this->avgRowsSent as $item1) {
                    $res['AvgRowsSent'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgRt) {
            if (\is_array($this->avgRt)) {
                $res['AvgRt'] = [];
                $n1 = 0;
                foreach ($this->avgRt as $item1) {
                    $res['AvgRt'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->avgScnt) {
            if (\is_array($this->avgScnt)) {
                $res['AvgScnt'] = [];
                $n1 = 0;
                foreach ($this->avgScnt as $item1) {
                    $res['AvgScnt'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->CPUTime) {
            if (\is_array($this->CPUTime)) {
                $res['CPUTime'] = [];
                $n1 = 0;
                foreach ($this->CPUTime as $item1) {
                    $res['CPUTime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->count) {
            if (\is_array($this->count)) {
                $res['Count'] = [];
                $n1 = 0;
                foreach ($this->count as $item1) {
                    $res['Count'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docExamined) {
            if (\is_array($this->docExamined)) {
                $res['DocExamined'] = [];
                $n1 = 0;
                foreach ($this->docExamined as $item1) {
                    $res['DocExamined'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->frows) {
            if (\is_array($this->frows)) {
                $res['Frows'] = [];
                $n1 = 0;
                foreach ($this->frows as $item1) {
                    $res['Frows'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->IOWrites) {
            if (\is_array($this->IOWrites)) {
                $res['IOWrites'] = [];
                $n1 = 0;
                foreach ($this->IOWrites as $item1) {
                    $res['IOWrites'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->item) {
            if (\is_array($this->item)) {
                $res['Item'] = [];
                $n1 = 0;
                foreach ($this->item as $item1) {
                    $res['Item'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keysExamined) {
            if (\is_array($this->keysExamined)) {
                $res['KeysExamined'] = [];
                $n1 = 0;
                foreach ($this->keysExamined as $item1) {
                    $res['KeysExamined'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastRowsCountAffected) {
            if (\is_array($this->lastRowsCountAffected)) {
                $res['LastRowsCountAffected'] = [];
                $n1 = 0;
                foreach ($this->lastRowsCountAffected as $item1) {
                    $res['LastRowsCountAffected'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lockTime) {
            if (\is_array($this->lockTime)) {
                $res['LockTime'] = [];
                $n1 = 0;
                foreach ($this->lockTime as $item1) {
                    $res['LockTime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logicalIOReads) {
            if (\is_array($this->logicalIOReads)) {
                $res['LogicalIOReads'] = [];
                $n1 = 0;
                foreach ($this->logicalIOReads as $item1) {
                    $res['LogicalIOReads'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxCPUTime) {
            if (\is_array($this->maxCPUTime)) {
                $res['MaxCPUTime'] = [];
                $n1 = 0;
                foreach ($this->maxCPUTime as $item1) {
                    $res['MaxCPUTime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxDocExamined) {
            if (\is_array($this->maxDocExamined)) {
                $res['MaxDocExamined'] = [];
                $n1 = 0;
                foreach ($this->maxDocExamined as $item1) {
                    $res['MaxDocExamined'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxFrows) {
            if (\is_array($this->maxFrows)) {
                $res['MaxFrows'] = [];
                $n1 = 0;
                foreach ($this->maxFrows as $item1) {
                    $res['MaxFrows'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxIOWrites) {
            if (\is_array($this->maxIOWrites)) {
                $res['MaxIOWrites'] = [];
                $n1 = 0;
                foreach ($this->maxIOWrites as $item1) {
                    $res['MaxIOWrites'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxKeysExamined) {
            if (\is_array($this->maxKeysExamined)) {
                $res['MaxKeysExamined'] = [];
                $n1 = 0;
                foreach ($this->maxKeysExamined as $item1) {
                    $res['MaxKeysExamined'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxLastRowsCountAffected) {
            if (\is_array($this->maxLastRowsCountAffected)) {
                $res['MaxLastRowsCountAffected'] = [];
                $n1 = 0;
                foreach ($this->maxLastRowsCountAffected as $item1) {
                    $res['MaxLastRowsCountAffected'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxLockTime) {
            if (\is_array($this->maxLockTime)) {
                $res['MaxLockTime'] = [];
                $n1 = 0;
                foreach ($this->maxLockTime as $item1) {
                    $res['MaxLockTime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxLogicalIOReads) {
            if (\is_array($this->maxLogicalIOReads)) {
                $res['MaxLogicalIOReads'] = [];
                $n1 = 0;
                foreach ($this->maxLogicalIOReads as $item1) {
                    $res['MaxLogicalIOReads'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxPhysicalIOReads) {
            if (\is_array($this->maxPhysicalIOReads)) {
                $res['MaxPhysicalIOReads'] = [];
                $n1 = 0;
                foreach ($this->maxPhysicalIOReads as $item1) {
                    $res['MaxPhysicalIOReads'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxReturnNum) {
            if (\is_array($this->maxReturnNum)) {
                $res['MaxReturnNum'] = [];
                $n1 = 0;
                foreach ($this->maxReturnNum as $item1) {
                    $res['MaxReturnNum'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxRows) {
            if (\is_array($this->maxRows)) {
                $res['MaxRows'] = [];
                $n1 = 0;
                foreach ($this->maxRows as $item1) {
                    $res['MaxRows'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxRowsCountAffected) {
            if (\is_array($this->maxRowsCountAffected)) {
                $res['MaxRowsCountAffected'] = [];
                $n1 = 0;
                foreach ($this->maxRowsCountAffected as $item1) {
                    $res['MaxRowsCountAffected'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxRowsExamined) {
            if (\is_array($this->maxRowsExamined)) {
                $res['MaxRowsExamined'] = [];
                $n1 = 0;
                foreach ($this->maxRowsExamined as $item1) {
                    $res['MaxRowsExamined'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxRowsSent) {
            if (\is_array($this->maxRowsSent)) {
                $res['MaxRowsSent'] = [];
                $n1 = 0;
                foreach ($this->maxRowsSent as $item1) {
                    $res['MaxRowsSent'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxRt) {
            if (\is_array($this->maxRt)) {
                $res['MaxRt'] = [];
                $n1 = 0;
                foreach ($this->maxRt as $item1) {
                    $res['MaxRt'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxScnt) {
            if (\is_array($this->maxScnt)) {
                $res['MaxScnt'] = [];
                $n1 = 0;
                foreach ($this->maxScnt as $item1) {
                    $res['MaxScnt'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->physicalIOReads) {
            if (\is_array($this->physicalIOReads)) {
                $res['PhysicalIOReads'] = [];
                $n1 = 0;
                foreach ($this->physicalIOReads as $item1) {
                    $res['PhysicalIOReads'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->returnNum) {
            if (\is_array($this->returnNum)) {
                $res['ReturnNum'] = [];
                $n1 = 0;
                foreach ($this->returnNum as $item1) {
                    $res['ReturnNum'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rows) {
            if (\is_array($this->rows)) {
                $res['Rows'] = [];
                $n1 = 0;
                foreach ($this->rows as $item1) {
                    $res['Rows'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rowsCountAffected) {
            if (\is_array($this->rowsCountAffected)) {
                $res['RowsCountAffected'] = [];
                $n1 = 0;
                foreach ($this->rowsCountAffected as $item1) {
                    $res['RowsCountAffected'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rowsExamined) {
            if (\is_array($this->rowsExamined)) {
                $res['RowsExamined'] = [];
                $n1 = 0;
                foreach ($this->rowsExamined as $item1) {
                    $res['RowsExamined'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rowsSent) {
            if (\is_array($this->rowsSent)) {
                $res['RowsSent'] = [];
                $n1 = 0;
                foreach ($this->rowsSent as $item1) {
                    $res['RowsSent'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rt) {
            if (\is_array($this->rt)) {
                $res['Rt'] = [];
                $n1 = 0;
                foreach ($this->rt as $item1) {
                    $res['Rt'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scnt) {
            if (\is_array($this->scnt)) {
                $res['Scnt'] = [];
                $n1 = 0;
                foreach ($this->scnt as $item1) {
                    $res['Scnt'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->ts) {
            if (\is_array($this->ts)) {
                $res['Ts'] = [];
                $n1 = 0;
                foreach ($this->ts as $item1) {
                    $res['Ts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tsEnd) {
            if (\is_array($this->tsEnd)) {
                $res['TsEnd'] = [];
                $n1 = 0;
                foreach ($this->tsEnd as $item1) {
                    $res['TsEnd'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AvgCPUTime'])) {
            if (!empty($map['AvgCPUTime'])) {
                $model->avgCPUTime = [];
                $n1 = 0;
                foreach ($map['AvgCPUTime'] as $item1) {
                    $model->avgCPUTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgDocExamined'])) {
            if (!empty($map['AvgDocExamined'])) {
                $model->avgDocExamined = [];
                $n1 = 0;
                foreach ($map['AvgDocExamined'] as $item1) {
                    $model->avgDocExamined[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgFrows'])) {
            if (!empty($map['AvgFrows'])) {
                $model->avgFrows = [];
                $n1 = 0;
                foreach ($map['AvgFrows'] as $item1) {
                    $model->avgFrows[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgIOWrites'])) {
            if (!empty($map['AvgIOWrites'])) {
                $model->avgIOWrites = [];
                $n1 = 0;
                foreach ($map['AvgIOWrites'] as $item1) {
                    $model->avgIOWrites[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgKeysExamined'])) {
            if (!empty($map['AvgKeysExamined'])) {
                $model->avgKeysExamined = [];
                $n1 = 0;
                foreach ($map['AvgKeysExamined'] as $item1) {
                    $model->avgKeysExamined[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgLastRowsCountAffected'])) {
            if (!empty($map['AvgLastRowsCountAffected'])) {
                $model->avgLastRowsCountAffected = [];
                $n1 = 0;
                foreach ($map['AvgLastRowsCountAffected'] as $item1) {
                    $model->avgLastRowsCountAffected[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgLockTime'])) {
            if (!empty($map['AvgLockTime'])) {
                $model->avgLockTime = [];
                $n1 = 0;
                foreach ($map['AvgLockTime'] as $item1) {
                    $model->avgLockTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgLogicalIOReads'])) {
            if (!empty($map['AvgLogicalIOReads'])) {
                $model->avgLogicalIOReads = [];
                $n1 = 0;
                foreach ($map['AvgLogicalIOReads'] as $item1) {
                    $model->avgLogicalIOReads[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgPhysicalIOReads'])) {
            if (!empty($map['AvgPhysicalIOReads'])) {
                $model->avgPhysicalIOReads = [];
                $n1 = 0;
                foreach ($map['AvgPhysicalIOReads'] as $item1) {
                    $model->avgPhysicalIOReads[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgReturnNum'])) {
            if (!empty($map['AvgReturnNum'])) {
                $model->avgReturnNum = [];
                $n1 = 0;
                foreach ($map['AvgReturnNum'] as $item1) {
                    $model->avgReturnNum[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgRows'])) {
            if (!empty($map['AvgRows'])) {
                $model->avgRows = [];
                $n1 = 0;
                foreach ($map['AvgRows'] as $item1) {
                    $model->avgRows[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgRowsCountAffected'])) {
            if (!empty($map['AvgRowsCountAffected'])) {
                $model->avgRowsCountAffected = [];
                $n1 = 0;
                foreach ($map['AvgRowsCountAffected'] as $item1) {
                    $model->avgRowsCountAffected[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgRowsExamined'])) {
            if (!empty($map['AvgRowsExamined'])) {
                $model->avgRowsExamined = [];
                $n1 = 0;
                foreach ($map['AvgRowsExamined'] as $item1) {
                    $model->avgRowsExamined[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgRowsSent'])) {
            if (!empty($map['AvgRowsSent'])) {
                $model->avgRowsSent = [];
                $n1 = 0;
                foreach ($map['AvgRowsSent'] as $item1) {
                    $model->avgRowsSent[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgRt'])) {
            if (!empty($map['AvgRt'])) {
                $model->avgRt = [];
                $n1 = 0;
                foreach ($map['AvgRt'] as $item1) {
                    $model->avgRt[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AvgScnt'])) {
            if (!empty($map['AvgScnt'])) {
                $model->avgScnt = [];
                $n1 = 0;
                foreach ($map['AvgScnt'] as $item1) {
                    $model->avgScnt[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CPUTime'])) {
            if (!empty($map['CPUTime'])) {
                $model->CPUTime = [];
                $n1 = 0;
                foreach ($map['CPUTime'] as $item1) {
                    $model->CPUTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Count'])) {
            if (!empty($map['Count'])) {
                $model->count = [];
                $n1 = 0;
                foreach ($map['Count'] as $item1) {
                    $model->count[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DocExamined'])) {
            if (!empty($map['DocExamined'])) {
                $model->docExamined = [];
                $n1 = 0;
                foreach ($map['DocExamined'] as $item1) {
                    $model->docExamined[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Frows'])) {
            if (!empty($map['Frows'])) {
                $model->frows = [];
                $n1 = 0;
                foreach ($map['Frows'] as $item1) {
                    $model->frows[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IOWrites'])) {
            if (!empty($map['IOWrites'])) {
                $model->IOWrites = [];
                $n1 = 0;
                foreach ($map['IOWrites'] as $item1) {
                    $model->IOWrites[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Item'])) {
            if (!empty($map['Item'])) {
                $model->item = [];
                $n1 = 0;
                foreach ($map['Item'] as $item1) {
                    $model->item[$n1] = item::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['KeysExamined'])) {
            if (!empty($map['KeysExamined'])) {
                $model->keysExamined = [];
                $n1 = 0;
                foreach ($map['KeysExamined'] as $item1) {
                    $model->keysExamined[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LastRowsCountAffected'])) {
            if (!empty($map['LastRowsCountAffected'])) {
                $model->lastRowsCountAffected = [];
                $n1 = 0;
                foreach ($map['LastRowsCountAffected'] as $item1) {
                    $model->lastRowsCountAffected[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LockTime'])) {
            if (!empty($map['LockTime'])) {
                $model->lockTime = [];
                $n1 = 0;
                foreach ($map['LockTime'] as $item1) {
                    $model->lockTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LogicalIOReads'])) {
            if (!empty($map['LogicalIOReads'])) {
                $model->logicalIOReads = [];
                $n1 = 0;
                foreach ($map['LogicalIOReads'] as $item1) {
                    $model->logicalIOReads[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxCPUTime'])) {
            if (!empty($map['MaxCPUTime'])) {
                $model->maxCPUTime = [];
                $n1 = 0;
                foreach ($map['MaxCPUTime'] as $item1) {
                    $model->maxCPUTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxDocExamined'])) {
            if (!empty($map['MaxDocExamined'])) {
                $model->maxDocExamined = [];
                $n1 = 0;
                foreach ($map['MaxDocExamined'] as $item1) {
                    $model->maxDocExamined[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxFrows'])) {
            if (!empty($map['MaxFrows'])) {
                $model->maxFrows = [];
                $n1 = 0;
                foreach ($map['MaxFrows'] as $item1) {
                    $model->maxFrows[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxIOWrites'])) {
            if (!empty($map['MaxIOWrites'])) {
                $model->maxIOWrites = [];
                $n1 = 0;
                foreach ($map['MaxIOWrites'] as $item1) {
                    $model->maxIOWrites[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxKeysExamined'])) {
            if (!empty($map['MaxKeysExamined'])) {
                $model->maxKeysExamined = [];
                $n1 = 0;
                foreach ($map['MaxKeysExamined'] as $item1) {
                    $model->maxKeysExamined[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxLastRowsCountAffected'])) {
            if (!empty($map['MaxLastRowsCountAffected'])) {
                $model->maxLastRowsCountAffected = [];
                $n1 = 0;
                foreach ($map['MaxLastRowsCountAffected'] as $item1) {
                    $model->maxLastRowsCountAffected[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxLockTime'])) {
            if (!empty($map['MaxLockTime'])) {
                $model->maxLockTime = [];
                $n1 = 0;
                foreach ($map['MaxLockTime'] as $item1) {
                    $model->maxLockTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxLogicalIOReads'])) {
            if (!empty($map['MaxLogicalIOReads'])) {
                $model->maxLogicalIOReads = [];
                $n1 = 0;
                foreach ($map['MaxLogicalIOReads'] as $item1) {
                    $model->maxLogicalIOReads[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxPhysicalIOReads'])) {
            if (!empty($map['MaxPhysicalIOReads'])) {
                $model->maxPhysicalIOReads = [];
                $n1 = 0;
                foreach ($map['MaxPhysicalIOReads'] as $item1) {
                    $model->maxPhysicalIOReads[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxReturnNum'])) {
            if (!empty($map['MaxReturnNum'])) {
                $model->maxReturnNum = [];
                $n1 = 0;
                foreach ($map['MaxReturnNum'] as $item1) {
                    $model->maxReturnNum[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxRows'])) {
            if (!empty($map['MaxRows'])) {
                $model->maxRows = [];
                $n1 = 0;
                foreach ($map['MaxRows'] as $item1) {
                    $model->maxRows[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxRowsCountAffected'])) {
            if (!empty($map['MaxRowsCountAffected'])) {
                $model->maxRowsCountAffected = [];
                $n1 = 0;
                foreach ($map['MaxRowsCountAffected'] as $item1) {
                    $model->maxRowsCountAffected[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxRowsExamined'])) {
            if (!empty($map['MaxRowsExamined'])) {
                $model->maxRowsExamined = [];
                $n1 = 0;
                foreach ($map['MaxRowsExamined'] as $item1) {
                    $model->maxRowsExamined[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxRowsSent'])) {
            if (!empty($map['MaxRowsSent'])) {
                $model->maxRowsSent = [];
                $n1 = 0;
                foreach ($map['MaxRowsSent'] as $item1) {
                    $model->maxRowsSent[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxRt'])) {
            if (!empty($map['MaxRt'])) {
                $model->maxRt = [];
                $n1 = 0;
                foreach ($map['MaxRt'] as $item1) {
                    $model->maxRt[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxScnt'])) {
            if (!empty($map['MaxScnt'])) {
                $model->maxScnt = [];
                $n1 = 0;
                foreach ($map['MaxScnt'] as $item1) {
                    $model->maxScnt[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PhysicalIOReads'])) {
            if (!empty($map['PhysicalIOReads'])) {
                $model->physicalIOReads = [];
                $n1 = 0;
                foreach ($map['PhysicalIOReads'] as $item1) {
                    $model->physicalIOReads[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReturnNum'])) {
            if (!empty($map['ReturnNum'])) {
                $model->returnNum = [];
                $n1 = 0;
                foreach ($map['ReturnNum'] as $item1) {
                    $model->returnNum[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Rows'])) {
            if (!empty($map['Rows'])) {
                $model->rows = [];
                $n1 = 0;
                foreach ($map['Rows'] as $item1) {
                    $model->rows[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RowsCountAffected'])) {
            if (!empty($map['RowsCountAffected'])) {
                $model->rowsCountAffected = [];
                $n1 = 0;
                foreach ($map['RowsCountAffected'] as $item1) {
                    $model->rowsCountAffected[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RowsExamined'])) {
            if (!empty($map['RowsExamined'])) {
                $model->rowsExamined = [];
                $n1 = 0;
                foreach ($map['RowsExamined'] as $item1) {
                    $model->rowsExamined[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RowsSent'])) {
            if (!empty($map['RowsSent'])) {
                $model->rowsSent = [];
                $n1 = 0;
                foreach ($map['RowsSent'] as $item1) {
                    $model->rowsSent[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Rt'])) {
            if (!empty($map['Rt'])) {
                $model->rt = [];
                $n1 = 0;
                foreach ($map['Rt'] as $item1) {
                    $model->rt[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Scnt'])) {
            if (!empty($map['Scnt'])) {
                $model->scnt = [];
                $n1 = 0;
                foreach ($map['Scnt'] as $item1) {
                    $model->scnt[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['Ts'])) {
            if (!empty($map['Ts'])) {
                $model->ts = [];
                $n1 = 0;
                foreach ($map['Ts'] as $item1) {
                    $model->ts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TsEnd'])) {
            if (!empty($map['TsEnd'])) {
                $model->tsEnd = [];
                $n1 = 0;
                foreach ($map['TsEnd'] as $item1) {
                    $model->tsEnd[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
