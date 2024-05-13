<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param\tableIncludes;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataArchiveOrderRequest\param\variables;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @description The type of the destination database for archiving data. Valid values:
     *
     * >  If you set ArchiveMethod to a value other than inner_oss, you must connect the destination database for archiving data to Data Management (DMS) before you create the data archiving ticket. After the database is connected to DMS, the database is displayed in the Instances Connected section of the DMS console.
     *
     *   **inner_oss**: dedicated storage, which is a built-in Object Storage Service (OSS) bucket.
     *   **oss_userself**: OSS bucket of the user.
     *   **mysql**: ApsaraDB RDS for MySQL instance.
     *   **polardb**: PolarDB for MySQL cluster.
     *   **adb_mysql**: AnalyticDB for MySQL V3.0 cluster.
     *   **lindorm**: ApsaraDB for Lindorm instance.
     *
     * This parameter is required.
     * @example mysql
     *
     * @var string
     */
    public $archiveMethod;

    /**
     * @description A crontab expression that specifies the scheduling cycle to run the task. For more information, see the [Crontab expressions](https://help.aliyun.com/document_detail/206581.html) section of the "Create shadow tables for synchronization" topic. This parameter is required if RunMethod is set to schedule.
     *
     * @example 00 05 11 * * ?
     *
     * @var string
     */
    public $cronStr;

    /**
     * @var string
     */
    public $databaseId;

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
     * @description The method that is used to run the data archiving task. Valid values:
     *
     *   **schedule**: The data archiving task is periodically scheduled.
     *   **now**: The data archiving task is immediately run.
     *
     * This parameter is required.
     * @example now
     *
     * @var string
     */
    public $runMethod;

    /**
     * @description The catalog of the source database. Valid values:
     *
     *   **def**: Set this parameter to def if the source database is of the two-layer logical schema, such as a MySQL database, a PolarDB for MySQL cluster, or an AnalyticDB for MySQL instance.
     *   **An empty string**: Set this parameter to an empty string if the source database is an ApsaraDB for Lindorm or ApsaraDB for MongoDB instance.
     *   **Catalog name**: Set this parameter to the catalog name of the source database if the source database is of the three-layer logical schema, such as a PostgreSQL database.
     *
     * This parameter is required.
     * @example def
     *
     * @var string
     */
    public $sourceCatalogName;

    /**
     * @description The name of the source instance.
     *
     * This parameter is required.
     * @example pc-bp1*******
     *
     * @var string
     */
    public $sourceInstanceName;

    /**
     * @description The schema name of the source database. The schema name of the source database is the same as that of the destination database. If the source database is a MySQL database, this parameter specifies the name of the source database. If the source database is a PostgreSQL database, this parameter specifies the schema name of the source database.
     *
     * This parameter is required.
     * @example schema_test
     *
     * @var string
     */
    public $sourceSchemaName;

    /**
     * @description The collection of tables to be archived.
     *
     * This parameter is required.
     * @var tableIncludes[]
     */
    public $tableIncludes;

    /**
     * @description The table names mapped to the destination database. If you call an API operation to create the data archiving ticket, you do not need to specify this parameter. The default value is used.
     *
     * @var string[]
     */
    public $tableMapping;

    /**
     * @description The host of the destination instance. If the destination instance can be accessed over an internal network or the Internet, preferentially set the value to the internal endpoint of the destination instance.
     *
     *   If the data is archived in an OSS bucket, set the value to the name of the bucket.
     *   If the data is archived in the dedicated storage space, set the value to inner_oss.
     *
     * This parameter is required.
     * @example am-bp1*********.ads.aliyuncs.com
     *
     * @var string
     */
    public $targetInstanceHost;

    /**
     * @description The configuration of archiving variables. You can use a time variable as a filter condition for archiving data. Each variable has two attributes: name and pattern.
     *
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
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
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
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
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
