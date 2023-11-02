<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DoQuickFieldResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $aggQueryd;

    /**
     * @example true
     *
     * @var bool
     */
    public $completeOrNot;

    /**
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasSQL;

    /**
     * @var string[]
     */
    public $keys;

    /**
     * @example 0
     *
     * @var int
     */
    public $limited;

    /**
     * @var mixed[]
     */
    public $logs;

    /**
     * @example ""
     *
     * @var string
     */
    public $PQuery;

    /**
     * @example 1000
     *
     * @var int
     */
    public $processedRows;

    /**
     * @example 0
     *
     * @var int
     */
    public $queryMode;

    /**
     * @example * and alert_level : remind | with_pack_meta
     *
     * @var string
     */
    public $whereQuery;
    protected $_name = [
        'aggQueryd'     => 'AggQueryd',
        'completeOrNot' => 'CompleteOrNot',
        'count'         => 'Count',
        'hasSQL'        => 'HasSQL',
        'keys'          => 'Keys',
        'limited'       => 'Limited',
        'logs'          => 'Logs',
        'PQuery'        => 'PQuery',
        'processedRows' => 'ProcessedRows',
        'queryMode'     => 'QueryMode',
        'whereQuery'    => 'WhereQuery',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggQueryd) {
            $res['AggQueryd'] = $this->aggQueryd;
        }
        if (null !== $this->completeOrNot) {
            $res['CompleteOrNot'] = $this->completeOrNot;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->hasSQL) {
            $res['HasSQL'] = $this->hasSQL;
        }
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
        }
        if (null !== $this->limited) {
            $res['Limited'] = $this->limited;
        }
        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
        }
        if (null !== $this->PQuery) {
            $res['PQuery'] = $this->PQuery;
        }
        if (null !== $this->processedRows) {
            $res['ProcessedRows'] = $this->processedRows;
        }
        if (null !== $this->queryMode) {
            $res['QueryMode'] = $this->queryMode;
        }
        if (null !== $this->whereQuery) {
            $res['WhereQuery'] = $this->whereQuery;
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
        if (isset($map['AggQueryd'])) {
            $model->aggQueryd = $map['AggQueryd'];
        }
        if (isset($map['CompleteOrNot'])) {
            $model->completeOrNot = $map['CompleteOrNot'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['HasSQL'])) {
            $model->hasSQL = $map['HasSQL'];
        }
        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = $map['Keys'];
            }
        }
        if (isset($map['Limited'])) {
            $model->limited = $map['Limited'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = $map['Logs'];
            }
        }
        if (isset($map['PQuery'])) {
            $model->PQuery = $map['PQuery'];
        }
        if (isset($map['ProcessedRows'])) {
            $model->processedRows = $map['ProcessedRows'];
        }
        if (isset($map['QueryMode'])) {
            $model->queryMode = $map['QueryMode'];
        }
        if (isset($map['WhereQuery'])) {
            $model->whereQuery = $map['WhereQuery'];
        }

        return $model;
    }
}
