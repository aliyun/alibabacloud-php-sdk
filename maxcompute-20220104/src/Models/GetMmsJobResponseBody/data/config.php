<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string[]
     */
    public $columnMapping;

    /**
     * @var bool
     */
    public $enableVerification;

    /**
     * @var bool
     */
    public $increment;

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

    /**
     * @var string
     */
    public $tunnelQuota;
    protected $_name = [
        'columnMapping' => 'columnMapping',
        'enableVerification' => 'enableVerification',
        'increment' => 'increment',
        'others' => 'others',
        'partitionFilters' => 'partitionFilters',
        'partitions' => 'partitions',
        'schemaOnly' => 'schemaOnly',
        'tableBlackList' => 'tableBlackList',
        'tableMapping' => 'tableMapping',
        'tableWhiteList' => 'tableWhiteList',
        'tables' => 'tables',
        'taskType' => 'taskType',
        'tunnelQuota' => 'tunnelQuota',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnMapping) {
            $res['columnMapping'] = $this->columnMapping;
        }
        if (null !== $this->enableVerification) {
            $res['enableVerification'] = $this->enableVerification;
        }
        if (null !== $this->increment) {
            $res['increment'] = $this->increment;
        }
        if (null !== $this->others) {
            $res['others'] = $this->others;
        }
        if (null !== $this->partitionFilters) {
            $res['partitionFilters'] = $this->partitionFilters;
        }
        if (null !== $this->partitions) {
            $res['partitions'] = $this->partitions;
        }
        if (null !== $this->schemaOnly) {
            $res['schemaOnly'] = $this->schemaOnly;
        }
        if (null !== $this->tableBlackList) {
            $res['tableBlackList'] = $this->tableBlackList;
        }
        if (null !== $this->tableMapping) {
            $res['tableMapping'] = $this->tableMapping;
        }
        if (null !== $this->tableWhiteList) {
            $res['tableWhiteList'] = $this->tableWhiteList;
        }
        if (null !== $this->tables) {
            $res['tables'] = $this->tables;
        }
        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }
        if (null !== $this->tunnelQuota) {
            $res['tunnelQuota'] = $this->tunnelQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['columnMapping'])) {
            $model->columnMapping = $map['columnMapping'];
        }
        if (isset($map['enableVerification'])) {
            $model->enableVerification = $map['enableVerification'];
        }
        if (isset($map['increment'])) {
            $model->increment = $map['increment'];
        }
        if (isset($map['others'])) {
            $model->others = $map['others'];
        }
        if (isset($map['partitionFilters'])) {
            $model->partitionFilters = $map['partitionFilters'];
        }
        if (isset($map['partitions'])) {
            if (!empty($map['partitions'])) {
                $model->partitions = $map['partitions'];
            }
        }
        if (isset($map['schemaOnly'])) {
            $model->schemaOnly = $map['schemaOnly'];
        }
        if (isset($map['tableBlackList'])) {
            if (!empty($map['tableBlackList'])) {
                $model->tableBlackList = $map['tableBlackList'];
            }
        }
        if (isset($map['tableMapping'])) {
            $model->tableMapping = $map['tableMapping'];
        }
        if (isset($map['tableWhiteList'])) {
            if (!empty($map['tableWhiteList'])) {
                $model->tableWhiteList = $map['tableWhiteList'];
            }
        }
        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = $map['tables'];
            }
        }
        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }
        if (isset($map['tunnelQuota'])) {
            $model->tunnelQuota = $map['tunnelQuota'];
        }

        return $model;
    }
}
