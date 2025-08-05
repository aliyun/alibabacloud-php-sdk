<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody\data\sourceMySQLDiscovery\tableSchema;
use AlibabaCloud\Tea\Model;

class sourceMySQLDiscovery extends Model
{
    /**
     * @var string[]
     */
    public $databaseNames;

    /**
     * @var int
     */
    public $estimatedRows;

    /**
     * @var int
     */
    public $expireLogsDays;

    /**
     * @example [{\\"is_active\\":\\"1\\",\\"name\\":\\"0c0c5d1a-e844-44a8-902d-4f62cbcb0479\\",\\"id\\":\\"21\\"},{\\"is_active\\":\\"1\\",\\"name\\":\\"18ef033e-70bb-4795-8222-6cfb54f38f26\\",\\"id\\":\\"22\\"}]
     *
     * @var string
     */
    public $simpleData;

    /**
     * @var string[]
     */
    public $tableNames;

    /**
     * @var tableSchema
     */
    public $tableSchema;

    /**
     * @var int
     */
    public $waitTimeout;
    protected $_name = [
        'databaseNames' => 'DatabaseNames',
        'estimatedRows' => 'EstimatedRows',
        'expireLogsDays' => 'ExpireLogsDays',
        'simpleData' => 'SimpleData',
        'tableNames' => 'TableNames',
        'tableSchema' => 'TableSchema',
        'waitTimeout' => 'WaitTimeout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseNames) {
            $res['DatabaseNames'] = $this->databaseNames;
        }
        if (null !== $this->estimatedRows) {
            $res['EstimatedRows'] = $this->estimatedRows;
        }
        if (null !== $this->expireLogsDays) {
            $res['ExpireLogsDays'] = $this->expireLogsDays;
        }
        if (null !== $this->simpleData) {
            $res['SimpleData'] = $this->simpleData;
        }
        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
        }
        if (null !== $this->tableSchema) {
            $res['TableSchema'] = null !== $this->tableSchema ? $this->tableSchema->toMap() : null;
        }
        if (null !== $this->waitTimeout) {
            $res['WaitTimeout'] = $this->waitTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceMySQLDiscovery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseNames'])) {
            if (!empty($map['DatabaseNames'])) {
                $model->databaseNames = $map['DatabaseNames'];
            }
        }
        if (isset($map['EstimatedRows'])) {
            $model->estimatedRows = $map['EstimatedRows'];
        }
        if (isset($map['ExpireLogsDays'])) {
            $model->expireLogsDays = $map['ExpireLogsDays'];
        }
        if (isset($map['SimpleData'])) {
            $model->simpleData = $map['SimpleData'];
        }
        if (isset($map['TableNames'])) {
            if (!empty($map['TableNames'])) {
                $model->tableNames = $map['TableNames'];
            }
        }
        if (isset($map['TableSchema'])) {
            $model->tableSchema = tableSchema::fromMap($map['TableSchema']);
        }
        if (isset($map['WaitTimeout'])) {
            $model->waitTimeout = $map['WaitTimeout'];
        }

        return $model;
    }
}
