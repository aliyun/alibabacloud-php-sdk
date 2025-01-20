<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param\tableIncludes;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param\variables;

class param extends Model
{
    /**
     * @var string
     */
    public $archiveMethod;
    /**
     * @var string
     */
    public $cronStr;
    /**
     * @var string
     */
    public $databaseId;
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
     * @var string
     */
    public $sourceCatalogName;
    /**
     * @var string
     */
    public $sourceInstanceName;
    /**
     * @var string
     */
    public $sourceSchemaName;
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
    public $targetInstanceHost;
    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'archiveMethod'      => 'ArchiveMethod',
        'cronStr'            => 'CronStr',
        'databaseId'         => 'DatabaseId',
        'logic'              => 'Logic',
        'orderAfter'         => 'OrderAfter',
        'runMethod'          => 'RunMethod',
        'sourceCatalogName'  => 'SourceCatalogName',
        'sourceInstanceName' => 'SourceInstanceName',
        'sourceSchemaName'   => 'SourceSchemaName',
        'tableIncludes'      => 'TableIncludes',
        'tableMapping'       => 'TableMapping',
        'targetInstanceHost' => 'TargetInstanceHost',
        'variables'          => 'Variables',
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

        if (null !== $this->cronStr) {
            $res['CronStr'] = $this->cronStr;
        }

        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
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

        if (null !== $this->sourceCatalogName) {
            $res['SourceCatalogName'] = $this->sourceCatalogName;
        }

        if (null !== $this->sourceInstanceName) {
            $res['SourceInstanceName'] = $this->sourceInstanceName;
        }

        if (null !== $this->sourceSchemaName) {
            $res['SourceSchemaName'] = $this->sourceSchemaName;
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

        if (null !== $this->targetInstanceHost) {
            $res['TargetInstanceHost'] = $this->targetInstanceHost;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['Variables'] = [];
                $n1               = 0;
                foreach ($this->variables as $item1) {
                    $res['Variables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['CronStr'])) {
            $model->cronStr = $map['CronStr'];
        }

        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
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

        if (isset($map['SourceCatalogName'])) {
            $model->sourceCatalogName = $map['SourceCatalogName'];
        }

        if (isset($map['SourceInstanceName'])) {
            $model->sourceInstanceName = $map['SourceInstanceName'];
        }

        if (isset($map['SourceSchemaName'])) {
            $model->sourceSchemaName = $map['SourceSchemaName'];
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

        if (isset($map['TargetInstanceHost'])) {
            $model->targetInstanceHost = $map['TargetInstanceHost'];
        }

        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n1               = 0;
                foreach ($map['Variables'] as $item1) {
                    $model->variables[$n1++] = variables::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
