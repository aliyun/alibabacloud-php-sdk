<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginParam\tableIncludes;

class pluginParam extends Model
{
    /**
     * @var string
     */
    public $archiveMethod;
    /**
     * @var string
     */
    public $dbSchema;
    /**
     * @var bool
     */
    public $logic;
    /**
     * @var string[]
     */
    public $orderAfter;
    /**
     * @var string
     */
    public $runMethod;
    /**
     * @var int
     */
    public $sourceDatabaseId;
    /**
     * @var tableIncludes[]
     */
    public $tableIncludes;
    /**
     * @var string[]
     */
    public $tableMapping;
    /**
     * @var string
     */
    public $targetInstanceId;
    /**
     * @var string[]
     */
    public $variables;
    protected $_name = [
        'archiveMethod'    => 'ArchiveMethod',
        'dbSchema'         => 'DbSchema',
        'logic'            => 'Logic',
        'orderAfter'       => 'OrderAfter',
        'runMethod'        => 'RunMethod',
        'sourceDatabaseId' => 'SourceDatabaseId',
        'tableIncludes'    => 'TableIncludes',
        'tableMapping'     => 'TableMapping',
        'targetInstanceId' => 'TargetInstanceId',
        'variables'        => 'Variables',
    ];

    public function validate()
    {
        if (\is_array($this->orderAfter)) {
            Model::validateArray($this->orderAfter);
        }
        if (\is_array($this->tableIncludes)) {
            Model::validateArray($this->tableIncludes);
        }
        if (\is_array($this->tableMapping)) {
            Model::validateArray($this->tableMapping);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->orderAfter)) {
                $res['OrderAfter'] = [];
                $n1                = 0;
                foreach ($this->orderAfter as $item1) {
                    $res['OrderAfter'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->runMethod) {
            $res['RunMethod'] = $this->runMethod;
        }

        if (null !== $this->sourceDatabaseId) {
            $res['SourceDatabaseId'] = $this->sourceDatabaseId;
        }

        if (null !== $this->tableIncludes) {
            if (\is_array($this->tableIncludes)) {
                $res['TableIncludes'] = [];
                $n1                   = 0;
                foreach ($this->tableIncludes as $item1) {
                    $res['TableIncludes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tableMapping) {
            if (\is_array($this->tableMapping)) {
                $res['TableMapping'] = [];
                $n1                  = 0;
                foreach ($this->tableMapping as $item1) {
                    $res['TableMapping'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['Variables'] = [];
                $n1               = 0;
                foreach ($this->variables as $item1) {
                    $res['Variables'][$n1++] = $item1;
                }
            }
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
                $model->orderAfter = [];
                $n1                = 0;
                foreach ($map['OrderAfter'] as $item1) {
                    $model->orderAfter[$n1++] = $item1;
                }
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
                $n1                   = 0;
                foreach ($map['TableIncludes'] as $item1) {
                    $model->tableIncludes[$n1++] = tableIncludes::fromMap($item1);
                }
            }
        }

        if (isset($map['TableMapping'])) {
            if (!empty($map['TableMapping'])) {
                $model->tableMapping = [];
                $n1                  = 0;
                foreach ($map['TableMapping'] as $item1) {
                    $model->tableMapping[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }

        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n1               = 0;
                foreach ($map['Variables'] as $item1) {
                    $model->variables[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
