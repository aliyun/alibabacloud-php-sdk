<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class CreateMmsTimerRequest extends Model
{
    /**
     * @var string[]
     */
    public $columnMapping;

    /**
     * @var bool
     */
    public $enableDataMigration;

    /**
     * @var bool
     */
    public $enableSchemaMigration;

    /**
     * @var bool
     */
    public $enableVerification;

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
     * @var string
     */
    public $scheduleType;

    /**
     * @var int
     */
    public $sourceId;

    /**
     * @var string
     */
    public $srcDbName;

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
    public $value;
    protected $_name = [
        'columnMapping' => 'columnMapping',
        'enableDataMigration' => 'enableDataMigration',
        'enableSchemaMigration' => 'enableSchemaMigration',
        'enableVerification' => 'enableVerification',
        'name' => 'name',
        'others' => 'others',
        'partitionFilters' => 'partitionFilters',
        'partitions' => 'partitions',
        'scheduleType' => 'scheduleType',
        'sourceId' => 'sourceId',
        'srcDbName' => 'srcDbName',
        'tableBlackList' => 'tableBlackList',
        'tableMapping' => 'tableMapping',
        'tableWhiteList' => 'tableWhiteList',
        'tables' => 'tables',
        'value' => 'value',
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

        if (null !== $this->enableDataMigration) {
            $res['enableDataMigration'] = $this->enableDataMigration;
        }

        if (null !== $this->enableSchemaMigration) {
            $res['enableSchemaMigration'] = $this->enableSchemaMigration;
        }

        if (null !== $this->enableVerification) {
            $res['enableVerification'] = $this->enableVerification;
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
                    $res['partitions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scheduleType) {
            $res['scheduleType'] = $this->scheduleType;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->srcDbName) {
            $res['srcDbName'] = $this->srcDbName;
        }

        if (null !== $this->tableBlackList) {
            if (\is_array($this->tableBlackList)) {
                $res['tableBlackList'] = [];
                $n1 = 0;
                foreach ($this->tableBlackList as $item1) {
                    $res['tableBlackList'][$n1] = $item1;
                    ++$n1;
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
                    $res['tableWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['tables'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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

        if (isset($map['enableDataMigration'])) {
            $model->enableDataMigration = $map['enableDataMigration'];
        }

        if (isset($map['enableSchemaMigration'])) {
            $model->enableSchemaMigration = $map['enableSchemaMigration'];
        }

        if (isset($map['enableVerification'])) {
            $model->enableVerification = $map['enableVerification'];
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
                    $model->partitions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['scheduleType'])) {
            $model->scheduleType = $map['scheduleType'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['srcDbName'])) {
            $model->srcDbName = $map['srcDbName'];
        }

        if (isset($map['tableBlackList'])) {
            if (!empty($map['tableBlackList'])) {
                $model->tableBlackList = [];
                $n1 = 0;
                foreach ($map['tableBlackList'] as $item1) {
                    $model->tableBlackList[$n1] = $item1;
                    ++$n1;
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
                    $model->tableWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['tables'] as $item1) {
                    $model->tables[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
