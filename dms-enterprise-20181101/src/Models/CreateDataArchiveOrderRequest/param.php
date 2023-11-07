<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param\tableIncludes;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param\variables;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @description The database for archiving data. Valid values:
     *
     *   inner_oss: Built-in Object Storage Service (OSS) of Database Backup (DBS).
     *   oss_userself: OSS of user.
     *   mysql: ApsaraDB RDS for MySQL.
     *   polardb: PolarDB for MySQL.
     *   lindorm: Lindorm.
     *
     * @example mysql
     *
     * @var string
     */
    public $archiveMethod;

    /**
     * @description 填写Crontab表达式，以便定期执行任务，更多信息，请参见[Crontab表达式](~~206581~~)。
     * 当运行方式为周期归档时需要填写该参数。
     * @example 00 05 11 * * ?
     *
     * @var string
     */
    public $cronStr;

    /**
     * @description Specifies whether the database is a logical database.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The post behaviors.
     *
     * @var string[]
     */
    public $orderAfter;

    /**
     * @description The running mode. Only now is supported, which indicates that data archiving is immediately executed.
     *
     * @example now
     *
     * @var string
     */
    public $runMethod;

    /**
     * @description 源库目录（catalog）。
     * - **def**：对于两层逻辑结构的数据库，如MySQL，PolarDB MySQL，AnalyticDB MySQL，固定为def。
     * - **空字符串**： 对于lindorm与MongoDB，填入空字符串。
     * - **catalog名**：对于三层逻辑结构的数据库，如PostgreSQL，填入catalog名。
     * @example def
     *
     * @var string
     */
    public $sourceCatalogName;

    /**
     * @description 源实例名称。
     *
     * @example pc-bp1*******
     *
     * @var string
     */
    public $sourceInstanceName;

    /**
     * @description 源库Schema，源库与目标库同名。
     * 如MySQL为库名，PostgreSQL为Schema名。
     * @example schema_test
     *
     * @var string
     */
    public $sourceSchemaName;

    /**
     * @description The collection of tables to be archived.
     *
     * @var tableIncludes[]
     */
    public $tableIncludes;

    /**
     * @description The table names mapped in the destination database.
     *
     * @var string[]
     */
    public $tableMapping;

    /**
     * @description 目标库Host，若目标实例同时开放了内网与公网，优先写入内网Host。
     *
     * - 若归档目标为专属存储，则为inner_oss。
     * @example am-bp1*********.ads.aliyuncs.com
     *
     * @var string
     */
    public $targetInstanceHost;

    /**
     * @description The configuration of archiving variables.
     *
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
