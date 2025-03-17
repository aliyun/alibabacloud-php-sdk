<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginParam\tableIncludes;
use AlibabaCloud\Tea\Model;

class pluginParam extends Model
{
    /**
     * @description The type of the archiving destination.
     *
     * @example inner_oss
     *
     * @var string
     */
    public $archiveMethod;

    /**
     * @description The schema of the database and table to be archived.
     *
     * @example test
     *
     * @var string
     */
    public $dbSchema;

    /**
     * @description Indicates whether the database is logical.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The post behavior of archiving.
     *
     * @var string[]
     */
    public $orderAfter;

    /**
     * @description The running method, which indicates whether to run the task immediately or at a specific point in time.
     *
     * @example now
     *
     * @var string
     */
    public $runMethod;

    /**
     * @description The ID of the source database.
     *
     * @example 12***
     *
     * @var int
     */
    public $sourceDatabaseId;

    /**
     * @description The list of the archived tables and the filter conditions.
     *
     * @var tableIncludes[]
     */
    public $tableIncludes;

    /**
     * @description The mapping of schemas.
     *
     * @var string[]
     */
    public $tableMapping;

    /**
     * @description The ID of the destination instance.
     *
     * @example 12***
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @description The time variable defined for scheduled archiving.
     *
     * @var string[]
     */
    public $variables;
    protected $_name = [
        'archiveMethod' => 'ArchiveMethod',
        'dbSchema' => 'DbSchema',
        'logic' => 'Logic',
        'orderAfter' => 'OrderAfter',
        'runMethod' => 'RunMethod',
        'sourceDatabaseId' => 'SourceDatabaseId',
        'tableIncludes' => 'TableIncludes',
        'tableMapping' => 'TableMapping',
        'targetInstanceId' => 'TargetInstanceId',
        'variables' => 'Variables',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveMethod) {
            $res['ArchiveMethod'] = $this->archiveMethod;
        }
        if (null !== $this->dbSchema) {
            $res['DbSchema'] = $this->dbSchema;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->orderAfter) {
            $res['OrderAfter'] = $this->orderAfter;
        }
        if (null !== $this->runMethod) {
            $res['RunMethod'] = $this->runMethod;
        }
        if (null !== $this->sourceDatabaseId) {
            $res['SourceDatabaseId'] = $this->sourceDatabaseId;
        }
        if (null !== $this->tableIncludes) {
            $res['TableIncludes'] = [];
            if (null !== $this->tableIncludes && \is_array($this->tableIncludes)) {
                $n = 0;
                foreach ($this->tableIncludes as $item) {
                    $res['TableIncludes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableMapping) {
            $res['TableMapping'] = $this->tableMapping;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pluginParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveMethod'])) {
            $model->archiveMethod = $map['ArchiveMethod'];
        }
        if (isset($map['DbSchema'])) {
            $model->dbSchema = $map['DbSchema'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['OrderAfter'])) {
            if (!empty($map['OrderAfter'])) {
                $model->orderAfter = $map['OrderAfter'];
            }
        }
        if (isset($map['RunMethod'])) {
            $model->runMethod = $map['RunMethod'];
        }
        if (isset($map['SourceDatabaseId'])) {
            $model->sourceDatabaseId = $map['SourceDatabaseId'];
        }
        if (isset($map['TableIncludes'])) {
            if (!empty($map['TableIncludes'])) {
                $model->tableIncludes = [];
                $n = 0;
                foreach ($map['TableIncludes'] as $item) {
                    $model->tableIncludes[$n++] = null !== $item ? tableIncludes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableMapping'])) {
            if (!empty($map['TableMapping'])) {
                $model->tableMapping = $map['TableMapping'];
            }
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = $map['Variables'];
            }
        }

        return $model;
    }
}
