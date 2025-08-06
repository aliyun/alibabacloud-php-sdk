<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody\data\sourceMySQLDiscovery\tableSchema;

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

    public function validate()
    {
        if (\is_array($this->databaseNames)) {
            Model::validateArray($this->databaseNames);
        }
        if (\is_array($this->tableNames)) {
            Model::validateArray($this->tableNames);
        }
        if (null !== $this->tableSchema) {
            $this->tableSchema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseNames) {
            if (\is_array($this->databaseNames)) {
                $res['DatabaseNames'] = [];
                $n1 = 0;
                foreach ($this->databaseNames as $item1) {
                    $res['DatabaseNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->tableNames)) {
                $res['TableNames'] = [];
                $n1 = 0;
                foreach ($this->tableNames as $item1) {
                    $res['TableNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableSchema) {
            $res['TableSchema'] = null !== $this->tableSchema ? $this->tableSchema->toArray($noStream) : $this->tableSchema;
        }

        if (null !== $this->waitTimeout) {
            $res['WaitTimeout'] = $this->waitTimeout;
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
        if (isset($map['DatabaseNames'])) {
            if (!empty($map['DatabaseNames'])) {
                $model->databaseNames = [];
                $n1 = 0;
                foreach ($map['DatabaseNames'] as $item1) {
                    $model->databaseNames[$n1] = $item1;
                    ++$n1;
                }
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
                $model->tableNames = [];
                $n1 = 0;
                foreach ($map['TableNames'] as $item1) {
                    $model->tableNames[$n1] = $item1;
                    ++$n1;
                }
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
