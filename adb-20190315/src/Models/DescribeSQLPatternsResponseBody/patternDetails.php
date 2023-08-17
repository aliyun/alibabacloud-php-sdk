<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPatternsResponseBody;

use AlibabaCloud\Tea\Model;

class patternDetails extends Model
{
    /**
     * @description The IP address of the SQL client that commits the SQL pattern.
     *
     * @example 192.168.xx.xx
     *
     * @var string
     */
    public $accessIp;

    /**
     * @description The average execution duration of the SQL pattern within the query time range. Unit: milliseconds.
     *
     * @example 234.78
     *
     * @var float
     */
    public $averageExecutionTime;

    /**
     * @description The average peak memory usage of the SQL pattern within the query time range. Unit: bytes.
     *
     * @example 234.22
     *
     * @var float
     */
    public $averagePeakMemory;

    /**
     * @description The average total amount of time consumed by the SQL pattern within the query time range. Unit: milliseconds.
     *
     * @example 4
     *
     * @var float
     */
    public $averageQueryTime;

    /**
     * @description The average amount of data scanned based on the SQL pattern within the query time range. Unit: bytes.
     *
     * @example 234149.23
     *
     * @var float
     */
    public $averageScanSize;

    /**
     * @description Indicates whether the execution of the SQL pattern can be blocked. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > Only SELECT and INSERT statements can be blocked.
     * @example true
     *
     * @var bool
     */
    public $blockable;

    /**
     * @description The number of failed queries executed in association with the SQL pattern within the query time range.
     *
     * @example 234
     *
     * @var int
     */
    public $failedCount;

    /**
     * @description The maximum execution duration of the SQL pattern within the query time range. Unit: milliseconds.
     *
     * @example 2142
     *
     * @var int
     */
    public $maxExecutionTime;

    /**
     * @description The maximum peak memory usage of the SQL pattern within the query time range. Unit: bytes.
     *
     * @example 234149
     *
     * @var int
     */
    public $maxPeakMemory;

    /**
     * @description The maximum total amount of time consumed by the SQL pattern within the query time range. Unit: milliseconds.
     *
     * @example 2341
     *
     * @var int
     */
    public $maxQueryTime;

    /**
     * @description The maximum amount of data scanned based on the SQL pattern within the query time range. Unit: bytes.
     *
     * @example 234149
     *
     * @var int
     */
    public $maxScanSize;

    /**
     * @description The earliest commit time of the SQL pattern within the query time range. Unit: milliseconds.
     *
     * @example 2021-11-12 03:06:00
     *
     * @var string
     */
    public $patternCreationTime;

    /**
     * @description The ID of the SQL pattern.
     *
     * @example 5575924945138******
     *
     * @var string
     */
    public $patternId;

    /**
     * @description The number of queries executed in association with the SQL pattern within the query time range.
     *
     * @example 345
     *
     * @var int
     */
    public $queryCount;

    /**
     * @description The statement of the SQL pattern.
     *
     * @example SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)
     *
     * @var string
     */
    public $SQLPattern;

    /**
     * @description The tables scanned based on the SQL pattern.
     *
     * @example tpch.orders
     *
     * @var string
     */
    public $tables;

    /**
     * @description The database username that is used to commit the SQL pattern.
     *
     * @example reporter
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'accessIp'             => 'AccessIp',
        'averageExecutionTime' => 'AverageExecutionTime',
        'averagePeakMemory'    => 'AveragePeakMemory',
        'averageQueryTime'     => 'AverageQueryTime',
        'averageScanSize'      => 'AverageScanSize',
        'blockable'            => 'Blockable',
        'failedCount'          => 'FailedCount',
        'maxExecutionTime'     => 'MaxExecutionTime',
        'maxPeakMemory'        => 'MaxPeakMemory',
        'maxQueryTime'         => 'MaxQueryTime',
        'maxScanSize'          => 'MaxScanSize',
        'patternCreationTime'  => 'PatternCreationTime',
        'patternId'            => 'PatternId',
        'queryCount'           => 'QueryCount',
        'SQLPattern'           => 'SQLPattern',
        'tables'               => 'Tables',
        'user'                 => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessIp) {
            $res['AccessIp'] = $this->accessIp;
        }
        if (null !== $this->averageExecutionTime) {
            $res['AverageExecutionTime'] = $this->averageExecutionTime;
        }
        if (null !== $this->averagePeakMemory) {
            $res['AveragePeakMemory'] = $this->averagePeakMemory;
        }
        if (null !== $this->averageQueryTime) {
            $res['AverageQueryTime'] = $this->averageQueryTime;
        }
        if (null !== $this->averageScanSize) {
            $res['AverageScanSize'] = $this->averageScanSize;
        }
        if (null !== $this->blockable) {
            $res['Blockable'] = $this->blockable;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->maxExecutionTime) {
            $res['MaxExecutionTime'] = $this->maxExecutionTime;
        }
        if (null !== $this->maxPeakMemory) {
            $res['MaxPeakMemory'] = $this->maxPeakMemory;
        }
        if (null !== $this->maxQueryTime) {
            $res['MaxQueryTime'] = $this->maxQueryTime;
        }
        if (null !== $this->maxScanSize) {
            $res['MaxScanSize'] = $this->maxScanSize;
        }
        if (null !== $this->patternCreationTime) {
            $res['PatternCreationTime'] = $this->patternCreationTime;
        }
        if (null !== $this->patternId) {
            $res['PatternId'] = $this->patternId;
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }
        if (null !== $this->SQLPattern) {
            $res['SQLPattern'] = $this->SQLPattern;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return patternDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessIp'])) {
            $model->accessIp = $map['AccessIp'];
        }
        if (isset($map['AverageExecutionTime'])) {
            $model->averageExecutionTime = $map['AverageExecutionTime'];
        }
        if (isset($map['AveragePeakMemory'])) {
            $model->averagePeakMemory = $map['AveragePeakMemory'];
        }
        if (isset($map['AverageQueryTime'])) {
            $model->averageQueryTime = $map['AverageQueryTime'];
        }
        if (isset($map['AverageScanSize'])) {
            $model->averageScanSize = $map['AverageScanSize'];
        }
        if (isset($map['Blockable'])) {
            $model->blockable = $map['Blockable'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['MaxExecutionTime'])) {
            $model->maxExecutionTime = $map['MaxExecutionTime'];
        }
        if (isset($map['MaxPeakMemory'])) {
            $model->maxPeakMemory = $map['MaxPeakMemory'];
        }
        if (isset($map['MaxQueryTime'])) {
            $model->maxQueryTime = $map['MaxQueryTime'];
        }
        if (isset($map['MaxScanSize'])) {
            $model->maxScanSize = $map['MaxScanSize'];
        }
        if (isset($map['PatternCreationTime'])) {
            $model->patternCreationTime = $map['PatternCreationTime'];
        }
        if (isset($map['PatternId'])) {
            $model->patternId = $map['PatternId'];
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }
        if (isset($map['SQLPattern'])) {
            $model->SQLPattern = $map['SQLPattern'];
        }
        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
