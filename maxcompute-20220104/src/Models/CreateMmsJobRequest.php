<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class CreateMmsJobRequest extends Model
{
    /**
     * @var string[]
     */
    public $columnMapping;

    /**
     * @var string
     */
    public $dstDbName;

    /**
     * @var string
     */
    public $dstSchemaName;

    /**
     * @var bool
     */
    public $enableVerification;

    /**
     * @var string
     */
    public $eta;

    /**
     * @var bool
     */
    public $increment;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $others;

    /**
     * @var string[]
     */
    public $partitionFilters;

    /**
     * @var int[]
     */
    public $partitions;

    /**
     * @var bool
     */
    public $schemaOnly;

    /**
     * @var int
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceName;

    /**
     * @var string
     */
    public $srcDbName;

    /**
     * @var string
     */
    public $srcSchemaName;

    /**
     * @var string[]
     */
    public $tableBlackList;

    /**
     * @var string[]
     */
    public $tableMapping;

    /**
     * @var string[]
     */
    public $tableWhiteList;

    /**
     * @var string[]
     */
    public $tables;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'columnMapping' => 'columnMapping',
        'dstDbName' => 'dstDbName',
        'dstSchemaName' => 'dstSchemaName',
        'enableVerification' => 'enableVerification',
        'eta' => 'eta',
        'increment' => 'increment',
        'name' => 'name',
        'others' => 'others',
        'partitionFilters' => 'partitionFilters',
        'partitions' => 'partitions',
        'schemaOnly' => 'schemaOnly',
        'sourceId' => 'sourceId',
        'sourceName' => 'sourceName',
        'srcDbName' => 'srcDbName',
        'srcSchemaName' => 'srcSchemaName',
        'tableBlackList' => 'tableBlackList',
        'tableMapping' => 'tableMapping',
        'tableWhiteList' => 'tableWhiteList',
        'tables' => 'tables',
        'taskType' => 'taskType',
    ];

    public function validate()
    {
        if (\is_array($this->columnMapping)) {
            Model::validateArray($this->columnMapping);
        }
        if (\is_array($this->others)) {
            Model::validateArray($this->others);
        }
        if (\is_array($this->partitionFilters)) {
            Model::validateArray($this->partitionFilters);
        }
        if (\is_array($this->partitions)) {
            Model::validateArray($this->partitions);
        }
        if (\is_array($this->tableBlackList)) {
            Model::validateArray($this->tableBlackList);
        }
        if (\is_array($this->tableMapping)) {
            Model::validateArray($this->tableMapping);
        }
        if (\is_array($this->tableWhiteList)) {
            Model::validateArray($this->tableWhiteList);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnMapping) {
            if (\is_array($this->columnMapping)) {
                $res['columnMapping'] = [];
                foreach ($this->columnMapping as $key1 => $value1) {
                    $res['columnMapping'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dstDbName) {
            $res['dstDbName'] = $this->dstDbName;
        }

        if (null !== $this->dstSchemaName) {
            $res['dstSchemaName'] = $this->dstSchemaName;
        }

        if (null !== $this->enableVerification) {
            $res['enableVerification'] = $this->enableVerification;
        }

        if (null !== $this->eta) {
            $res['eta'] = $this->eta;
        }

        if (null !== $this->increment) {
            $res['increment'] = $this->increment;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->others) {
            if (\is_array($this->others)) {
                $res['others'] = [];
                foreach ($this->others as $key1 => $value1) {
                    $res['others'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->partitionFilters) {
            if (\is_array($this->partitionFilters)) {
                $res['partitionFilters'] = [];
                foreach ($this->partitionFilters as $key1 => $value1) {
                    $res['partitionFilters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->partitions) {
            if (\is_array($this->partitions)) {
                $res['partitions'] = [];
                $n1 = 0;
                foreach ($this->partitions as $item1) {
                    $res['partitions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->schemaOnly) {
            $res['schemaOnly'] = $this->schemaOnly;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceName) {
            $res['sourceName'] = $this->sourceName;
        }

        if (null !== $this->srcDbName) {
            $res['srcDbName'] = $this->srcDbName;
        }

        if (null !== $this->srcSchemaName) {
            $res['srcSchemaName'] = $this->srcSchemaName;
        }

        if (null !== $this->tableBlackList) {
            if (\is_array($this->tableBlackList)) {
                $res['tableBlackList'] = [];
                $n1 = 0;
                foreach ($this->tableBlackList as $item1) {
                    $res['tableBlackList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tableMapping) {
            if (\is_array($this->tableMapping)) {
                $res['tableMapping'] = [];
                foreach ($this->tableMapping as $key1 => $value1) {
                    $res['tableMapping'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->tableWhiteList) {
            if (\is_array($this->tableWhiteList)) {
                $res['tableWhiteList'] = [];
                $n1 = 0;
                foreach ($this->tableWhiteList as $item1) {
                    $res['tableWhiteList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['tables'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
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
        if (isset($map['columnMapping'])) {
            if (!empty($map['columnMapping'])) {
                $model->columnMapping = [];
                foreach ($map['columnMapping'] as $key1 => $value1) {
                    $model->columnMapping[$key1] = $value1;
                }
            }
        }

        if (isset($map['dstDbName'])) {
            $model->dstDbName = $map['dstDbName'];
        }

        if (isset($map['dstSchemaName'])) {
            $model->dstSchemaName = $map['dstSchemaName'];
        }

        if (isset($map['enableVerification'])) {
            $model->enableVerification = $map['enableVerification'];
        }

        if (isset($map['eta'])) {
            $model->eta = $map['eta'];
        }

        if (isset($map['increment'])) {
            $model->increment = $map['increment'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['others'])) {
            if (!empty($map['others'])) {
                $model->others = [];
                foreach ($map['others'] as $key1 => $value1) {
                    $model->others[$key1] = $value1;
                }
            }
        }

        if (isset($map['partitionFilters'])) {
            if (!empty($map['partitionFilters'])) {
                $model->partitionFilters = [];
                foreach ($map['partitionFilters'] as $key1 => $value1) {
                    $model->partitionFilters[$key1] = $value1;
                }
            }
        }

        if (isset($map['partitions'])) {
            if (!empty($map['partitions'])) {
                $model->partitions = [];
                $n1 = 0;
                foreach ($map['partitions'] as $item1) {
                    $model->partitions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['schemaOnly'])) {
            $model->schemaOnly = $map['schemaOnly'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['sourceName'])) {
            $model->sourceName = $map['sourceName'];
        }

        if (isset($map['srcDbName'])) {
            $model->srcDbName = $map['srcDbName'];
        }

        if (isset($map['srcSchemaName'])) {
            $model->srcSchemaName = $map['srcSchemaName'];
        }

        if (isset($map['tableBlackList'])) {
            if (!empty($map['tableBlackList'])) {
                $model->tableBlackList = [];
                $n1 = 0;
                foreach ($map['tableBlackList'] as $item1) {
                    $model->tableBlackList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['tableMapping'])) {
            if (!empty($map['tableMapping'])) {
                $model->tableMapping = [];
                foreach ($map['tableMapping'] as $key1 => $value1) {
                    $model->tableMapping[$key1] = $value1;
                }
            }
        }

        if (isset($map['tableWhiteList'])) {
            if (!empty($map['tableWhiteList'])) {
                $model->tableWhiteList = [];
                $n1 = 0;
                foreach ($map['tableWhiteList'] as $item1) {
                    $model->tableWhiteList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['tables'] as $item1) {
                    $model->tables[$n1++] = $item1;
                }
            }
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}
