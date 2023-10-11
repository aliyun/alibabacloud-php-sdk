<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param\tableIncludes;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param\variables;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @example mysql
     *
     * @var string
     */
    public $archiveMethod;

    /**
     * @var string
     */
    public $cronStr;

    /**
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @var string[]
     */
    public $orderAfter;

    /**
     * @example now
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveMethod) {
            $res['ArchiveMethod'] = $this->archiveMethod;
        }
        if (null !== $this->cronStr) {
            $res['CronStr'] = $this->cronStr;
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
        if (null !== $this->targetInstanceHost) {
            $res['TargetInstanceHost'] = $this->targetInstanceHost;
        }
        if (null !== $this->variables) {
            $res['Variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['Variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveMethod'])) {
            $model->archiveMethod = $map['ArchiveMethod'];
        }
        if (isset($map['CronStr'])) {
            $model->cronStr = $map['CronStr'];
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
                $n                    = 0;
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
        if (isset($map['TargetInstanceHost'])) {
            $model->targetInstanceHost = $map['TargetInstanceHost'];
        }
        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['Variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
