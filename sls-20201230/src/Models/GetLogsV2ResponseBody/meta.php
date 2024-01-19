<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsV2ResponseBody;

use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsV2ResponseBody\meta\phraseQueryInfo;
use AlibabaCloud\SDK\Sls\V20201230\Models\LogContent;
use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @description The SQL statement after | in the query statement.
     *
     * @example select *
     *
     * @var string
     */
    public $aggQuery;

    /**
     * @var string[]
     */
    public $columnTypes;

    /**
     * @description The number of rows that are returned.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $cpuCores;

    /**
     * @var float
     */
    public $cpuSec;

    /**
     * @description The amount of time that is consumed by the request. Unit: milliseconds.
     *
     * @example 5
     *
     * @var int
     */
    public $elapsedMillisecond;

    /**
     * @description Indicates whether the query is an SQL query.
     *
     * @example false
     *
     * @var bool
     */
    public $hasSQL;

    /**
     * @var LogContent[][]
     */
    public $highlights;

    /**
     * @description Indicates whether the returned result is accurate.
     *
     * @example true
     *
     * @var bool
     */
    public $isAccurate;

    /**
     * @description All keys in the query result.
     *
     * @var string[]
     */
    public $keys;

    /**
     * @var int
     */
    public $limited;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var phraseQueryInfo
     */
    public $phraseQueryInfo;

    /**
     * @description The number of logs that are processed in the request.
     *
     * @example 10000
     *
     * @var int
     */
    public $processedBytes;

    /**
     * @description The number of rows that are processed in the request.
     *
     * @example 10000
     *
     * @var int
     */
    public $processedRows;

    /**
     * @description Indicates whether the query result is complete. Valid values:
     *
     *   Complete: The query was successful, and the complete result is returned.
     *   Incomplete: The query was successful, but the query result is incomplete. To obtain the complete result, you must call the operation again.
     *
     * @example Complete
     *
     * @var string
     */
    public $progress;

    /**
     * @var int
     */
    public $scanBytes;

    /**
     * @description The type of observable data.
     *
     * @example None
     *
     * @var string
     */
    public $telementryType;

    /**
     * @description All terms in the query statement.
     *
     * @var mixed[][]
     */
    public $terms;

    /**
     * @description The part before | in the query statement.
     *
     * @example *
     *
     * @var string
     */
    public $whereQuery;
    protected $_name = [
        'aggQuery'           => 'aggQuery',
        'columnTypes'        => 'columnTypes',
        'count'              => 'count',
        'cpuCores'           => 'cpuCores',
        'cpuSec'             => 'cpuSec',
        'elapsedMillisecond' => 'elapsedMillisecond',
        'hasSQL'             => 'hasSQL',
        'highlights'         => 'highlights',
        'isAccurate'         => 'isAccurate',
        'keys'               => 'keys',
        'limited'            => 'limited',
        'mode'               => 'mode',
        'phraseQueryInfo'    => 'phraseQueryInfo',
        'processedBytes'     => 'processedBytes',
        'processedRows'      => 'processedRows',
        'progress'           => 'progress',
        'scanBytes'          => 'scanBytes',
        'telementryType'     => 'telementryType',
        'terms'              => 'terms',
        'whereQuery'         => 'whereQuery',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggQuery) {
            $res['aggQuery'] = $this->aggQuery;
        }
        if (null !== $this->columnTypes) {
            $res['columnTypes'] = $this->columnTypes;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->cpuCores) {
            $res['cpuCores'] = $this->cpuCores;
        }
        if (null !== $this->cpuSec) {
            $res['cpuSec'] = $this->cpuSec;
        }
        if (null !== $this->elapsedMillisecond) {
            $res['elapsedMillisecond'] = $this->elapsedMillisecond;
        }
        if (null !== $this->hasSQL) {
            $res['hasSQL'] = $this->hasSQL;
        }
        if (null !== $this->highlights) {
            $res['highlights'] = $this->highlights;
        }
        if (null !== $this->isAccurate) {
            $res['isAccurate'] = $this->isAccurate;
        }
        if (null !== $this->keys) {
            $res['keys'] = $this->keys;
        }
        if (null !== $this->limited) {
            $res['limited'] = $this->limited;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->phraseQueryInfo) {
            $res['phraseQueryInfo'] = null !== $this->phraseQueryInfo ? $this->phraseQueryInfo->toMap() : null;
        }
        if (null !== $this->processedBytes) {
            $res['processedBytes'] = $this->processedBytes;
        }
        if (null !== $this->processedRows) {
            $res['processedRows'] = $this->processedRows;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }
        if (null !== $this->scanBytes) {
            $res['scanBytes'] = $this->scanBytes;
        }
        if (null !== $this->telementryType) {
            $res['telementryType'] = $this->telementryType;
        }
        if (null !== $this->terms) {
            $res['terms'] = $this->terms;
        }
        if (null !== $this->whereQuery) {
            $res['whereQuery'] = $this->whereQuery;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aggQuery'])) {
            $model->aggQuery = $map['aggQuery'];
        }
        if (isset($map['columnTypes'])) {
            if (!empty($map['columnTypes'])) {
                $model->columnTypes = $map['columnTypes'];
            }
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['cpuCores'])) {
            $model->cpuCores = $map['cpuCores'];
        }
        if (isset($map['cpuSec'])) {
            $model->cpuSec = $map['cpuSec'];
        }
        if (isset($map['elapsedMillisecond'])) {
            $model->elapsedMillisecond = $map['elapsedMillisecond'];
        }
        if (isset($map['hasSQL'])) {
            $model->hasSQL = $map['hasSQL'];
        }
        if (isset($map['highlights'])) {
            if (!empty($map['highlights'])) {
                $model->highlights = $map['highlights'];
            }
        }
        if (isset($map['isAccurate'])) {
            $model->isAccurate = $map['isAccurate'];
        }
        if (isset($map['keys'])) {
            if (!empty($map['keys'])) {
                $model->keys = $map['keys'];
            }
        }
        if (isset($map['limited'])) {
            $model->limited = $map['limited'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['phraseQueryInfo'])) {
            $model->phraseQueryInfo = phraseQueryInfo::fromMap($map['phraseQueryInfo']);
        }
        if (isset($map['processedBytes'])) {
            $model->processedBytes = $map['processedBytes'];
        }
        if (isset($map['processedRows'])) {
            $model->processedRows = $map['processedRows'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }
        if (isset($map['scanBytes'])) {
            $model->scanBytes = $map['scanBytes'];
        }
        if (isset($map['telementryType'])) {
            $model->telementryType = $map['telementryType'];
        }
        if (isset($map['terms'])) {
            if (!empty($map['terms'])) {
                $model->terms = $map['terms'];
            }
        }
        if (isset($map['whereQuery'])) {
            $model->whereQuery = $map['whereQuery'];
        }

        return $model;
    }
}
