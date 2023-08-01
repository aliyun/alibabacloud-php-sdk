<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsV2ResponseBody;

use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @example select *
     *
     * @var string
     */
    public $aggQuery;

    /**
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @example 5
     *
     * @var int
     */
    public $elapsedMillisecond;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasSQL;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAccurate;

    /**
     * @var string[]
     */
    public $keys;

    /**
     * @example 10000
     *
     * @var int
     */
    public $processedBytes;

    /**
     * @example 10000
     *
     * @var int
     */
    public $processedRows;

    /**
     * @example Complete
     *
     * @var string
     */
    public $progress;

    /**
     * @example None
     *
     * @var string
     */
    public $telementryType;

    /**
     * @var mixed[][]
     */
    public $terms;

    /**
     * @example *
     *
     * @var string
     */
    public $whereQuery;
    protected $_name = [
        'aggQuery'           => 'aggQuery',
        'count'              => 'count',
        'elapsedMillisecond' => 'elapsedMillisecond',
        'hasSQL'             => 'hasSQL',
        'isAccurate'         => 'isAccurate',
        'keys'               => 'keys',
        'processedBytes'     => 'processedBytes',
        'processedRows'      => 'processedRows',
        'progress'           => 'progress',
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
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->elapsedMillisecond) {
            $res['elapsedMillisecond'] = $this->elapsedMillisecond;
        }
        if (null !== $this->hasSQL) {
            $res['hasSQL'] = $this->hasSQL;
        }
        if (null !== $this->isAccurate) {
            $res['isAccurate'] = $this->isAccurate;
        }
        if (null !== $this->keys) {
            $res['keys'] = $this->keys;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['elapsedMillisecond'])) {
            $model->elapsedMillisecond = $map['elapsedMillisecond'];
        }
        if (isset($map['hasSQL'])) {
            $model->hasSQL = $map['hasSQL'];
        }
        if (isset($map['isAccurate'])) {
            $model->isAccurate = $map['isAccurate'];
        }
        if (isset($map['keys'])) {
            if (!empty($map['keys'])) {
                $model->keys = $map['keys'];
            }
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
