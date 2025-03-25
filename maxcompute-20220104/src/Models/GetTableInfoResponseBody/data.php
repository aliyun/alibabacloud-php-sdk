<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponseBody\data\clusterInfo;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponseBody\data\nativeColumns;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponseBody\data\partitionColumns;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the materialized view is automatically refreshed. This response parameter is returned when type is set to materializedView.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRefreshEnabled;

    /**
     * @description The clustering attribute. This response parameter is returned when the table is a clustered table.
     *
     * @var clusterInfo
     */
    public $clusterInfo;

    /**
     * @description The comments of the table.
     *
     * @example sale_detail
     *
     * @var string
     */
    public $comment;

    /**
     * @description DDL statement to create a table.
     *
     * @example create table if not exists sale_detail( shop_name STRING, customer_id STRING, total_price DOUBLE) partitioned by (sale_date STRING, region STRING);
     *
     * @var string
     */
    public $createTableDDL;

    /**
     * @description The creation time.
     *
     * @example 2022-01-17T07:07:47Z
     *
     * @var int
     */
    public $creationTime;

    /**
     * @description The display name.
     *
     * @example project_name.schema_name.table_name
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The number of file of the table.
     *
     * @example 200
     *
     * @var int
     */
    public $fileNum;

    /**
     * @description Indicates whether the table is an external table. This response parameter is returned when type is set to external.
     *
     * @example false
     *
     * @var bool
     */
    public $isExternalTable;

    /**
     * @description Indicates whether data of the materialized view is invalid due to changes in the data of the source table. This response parameter is returned when type is set to materializedView.
     *
     * @example false
     *
     * @var bool
     */
    public $isOutdated;

    /**
     * @description The time when data of the table or view was last accessed.
     *
     * @example 2023-11-21T02:05:56Z
     *
     * @var int
     */
    public $lastAccessTime;

    /**
     * @description The time when the data definition language (DDL) statement of the table or view was last modified.
     *
     * @example 2023-11-21T02:05:56Z
     *
     * @var int
     */
    public $lastDDLTime;

    /**
     * @description The time when data of the table or view was last modified.
     *
     * @example 2023-11-21T02:05:56Z
     *
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @description The lifecycle. Unit: days.
     *
     * @example -1
     *
     * @var string
     */
    public $lifecycle;

    /**
     * @description The path of the external table. This response parameter is returned when type is set to external.
     *
     * @example oss://oss-cn-hangzhou-internal.aliyuncs.com/oss-mc-test/Demo1/
     *
     * @var string
     */
    public $location;

    /**
     * @description Indicates whether the table or view is a [materialize view](https://www.alibabacloud.com/help/maxcompute/user-guide/materialized-view-operations).
     *
     * @example false
     *
     * @var bool
     */
    public $materializedView;

    /**
     * @description The name of the table or view.
     *
     * @example sale_detail
     *
     * @var string
     */
    public $name;

    /**
     * @description The field information.
     *
     * @var nativeColumns[]
     */
    public $nativeColumns;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the role AliyunODPSDefaultRole in Resource Access Management (RAM). This response parameter is returned when type is set to external.
     *
     * @example acs:ram::xxxxx:role/aliyunodpsdefaultrole
     *
     * @var string
     */
    public $odpsPropertiesRolearn;

    /**
     * @description Indicates whether the table header is ignored. This response parameter is returned when type is set to external.
     *
     * @example true
     *
     * @var bool
     */
    public $odpsSqlTextOptionFlushHeader;

    /**
     * @description The first N rows that were ignored in the table header. This response parameter is returned when type is set to external.
     *
     * @example 1
     *
     * @var int
     */
    public $odpsTextOptionHeaderLinesCount;

    /**
     * @description The account information of the table or view owner.
     *
     * @example 188785396123****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The information about partition key columns. This response parameter is returned only for partitioned tables.
     *
     * @var partitionColumns[]
     */
    public $partitionColumns;

    /**
     * @description The physical size of the table.
     *
     * @example 2763
     *
     * @var int
     */
    public $physicalSize;

    /**
     * @description The name of the project to which the table or view belongs.
     *
     * @example projectA
     *
     * @var string
     */
    public $projectName;

    /**
     * @description Indicates whether the query rewrite operation can be performed by using the materialized view. This response parameter is returned when type is set to materializedView.
     *
     * @example false
     *
     * @var bool
     */
    public $rewriteEnabled;

    /**
     * @description The name of the schema to which the table or the view belongs.
     *
     * @example default
     *
     * @var string
     */
    public $schema;

    /**
     * @description The data size of the non-partitioned table. If the table is a partitioned table, the system does not calculate the data size of the table. In this case, the value of this parameter is NULL. The PARTITIONS view includes the data size of each partition in a partitioned table. Unit: bytes.
     *
     * @example 5372
     *
     * @var int
     */
    public $size;

    /**
     * @description The storage handler of the external table. This response parameter is returned when type is set to external.
     *
     * @example com.aliyun.odps.CsvStorageHandler
     *
     * @var string
     */
    public $storageHandler;

    /**
     * @description The sensitivity-level label of the table. For more information, see [Label-based access control](https://www.alibabacloud.com/help/maxcompute/user-guide/label-based-access-control).
     *
     * @example 0
     *
     * @var string
     */
    public $tableLabel;

    /**
     * @description The name of the Tablestore table to be accessed. This response parameter is returned when type is set to external.
     *
     * @example ots_tpch_orders
     *
     * @var string
     */
    public $tablesotreTableName;

    /**
     * @description The columns of the Tablestore table to be accessed, including the primary key column and attribute column. This response parameter is returned when type is set to external.
     *
     * @example :o_orderkey,:o_orderdate,o_custkey,o_orderstatus,o_totalprice
     *
     * @var string
     */
    public $tablestoreColumnsMapping;

    /**
     * @description The type of the table or view. Valid values:
     *
     *   **internal**: internal table
     *   **external**: external table
     *   **view**: view
     *   **materializedView**: [materialize view](https://www.alibabacloud.com/help/maxcompute/user-guide/materialized-view-operations)
     *
     * @example internal
     *
     * @var string
     */
    public $type;

    /**
     * @description The statement that generates the view. This response parameter is returned when type is set to view.
     *
     * @example select shop_name, sum(total_price) from sale_detail group by shop_name
     *
     * @var string
     */
    public $viewText;
    protected $_name = [
        'autoRefreshEnabled' => 'autoRefreshEnabled',
        'clusterInfo' => 'clusterInfo',
        'comment' => 'comment',
        'createTableDDL' => 'createTableDDL',
        'creationTime' => 'creationTime',
        'displayName' => 'displayName',
        'fileNum' => 'fileNum',
        'isExternalTable' => 'isExternalTable',
        'isOutdated' => 'isOutdated',
        'lastAccessTime' => 'lastAccessTime',
        'lastDDLTime' => 'lastDDLTime',
        'lastModifiedTime' => 'lastModifiedTime',
        'lifecycle' => 'lifecycle',
        'location' => 'location',
        'materializedView' => 'materializedView',
        'name' => 'name',
        'nativeColumns' => 'nativeColumns',
        'odpsPropertiesRolearn' => 'odpsPropertiesRolearn',
        'odpsSqlTextOptionFlushHeader' => 'odpsSqlTextOptionFlushHeader',
        'odpsTextOptionHeaderLinesCount' => 'odpsTextOptionHeaderLinesCount',
        'owner' => 'owner',
        'partitionColumns' => 'partitionColumns',
        'physicalSize' => 'physicalSize',
        'projectName' => 'projectName',
        'rewriteEnabled' => 'rewriteEnabled',
        'schema' => 'schema',
        'size' => 'size',
        'storageHandler' => 'storageHandler',
        'tableLabel' => 'tableLabel',
        'tablesotreTableName' => 'tablesotreTableName',
        'tablestoreColumnsMapping' => 'tablestoreColumnsMapping',
        'type' => 'type',
        'viewText' => 'viewText',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRefreshEnabled) {
            $res['autoRefreshEnabled'] = $this->autoRefreshEnabled;
        }
        if (null !== $this->clusterInfo) {
            $res['clusterInfo'] = null !== $this->clusterInfo ? $this->clusterInfo->toMap() : null;
        }
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->createTableDDL) {
            $res['createTableDDL'] = $this->createTableDDL;
        }
        if (null !== $this->creationTime) {
            $res['creationTime'] = $this->creationTime;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->fileNum) {
            $res['fileNum'] = $this->fileNum;
        }
        if (null !== $this->isExternalTable) {
            $res['isExternalTable'] = $this->isExternalTable;
        }
        if (null !== $this->isOutdated) {
            $res['isOutdated'] = $this->isOutdated;
        }
        if (null !== $this->lastAccessTime) {
            $res['lastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->lastDDLTime) {
            $res['lastDDLTime'] = $this->lastDDLTime;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->lifecycle) {
            $res['lifecycle'] = $this->lifecycle;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->materializedView) {
            $res['materializedView'] = $this->materializedView;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nativeColumns) {
            $res['nativeColumns'] = [];
            if (null !== $this->nativeColumns && \is_array($this->nativeColumns)) {
                $n = 0;
                foreach ($this->nativeColumns as $item) {
                    $res['nativeColumns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->odpsPropertiesRolearn) {
            $res['odpsPropertiesRolearn'] = $this->odpsPropertiesRolearn;
        }
        if (null !== $this->odpsSqlTextOptionFlushHeader) {
            $res['odpsSqlTextOptionFlushHeader'] = $this->odpsSqlTextOptionFlushHeader;
        }
        if (null !== $this->odpsTextOptionHeaderLinesCount) {
            $res['odpsTextOptionHeaderLinesCount'] = $this->odpsTextOptionHeaderLinesCount;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->partitionColumns) {
            $res['partitionColumns'] = [];
            if (null !== $this->partitionColumns && \is_array($this->partitionColumns)) {
                $n = 0;
                foreach ($this->partitionColumns as $item) {
                    $res['partitionColumns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->physicalSize) {
            $res['physicalSize'] = $this->physicalSize;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->rewriteEnabled) {
            $res['rewriteEnabled'] = $this->rewriteEnabled;
        }
        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->storageHandler) {
            $res['storageHandler'] = $this->storageHandler;
        }
        if (null !== $this->tableLabel) {
            $res['tableLabel'] = $this->tableLabel;
        }
        if (null !== $this->tablesotreTableName) {
            $res['tablesotreTableName'] = $this->tablesotreTableName;
        }
        if (null !== $this->tablestoreColumnsMapping) {
            $res['tablestoreColumnsMapping'] = $this->tablestoreColumnsMapping;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->viewText) {
            $res['viewText'] = $this->viewText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoRefreshEnabled'])) {
            $model->autoRefreshEnabled = $map['autoRefreshEnabled'];
        }
        if (isset($map['clusterInfo'])) {
            $model->clusterInfo = clusterInfo::fromMap($map['clusterInfo']);
        }
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['createTableDDL'])) {
            $model->createTableDDL = $map['createTableDDL'];
        }
        if (isset($map['creationTime'])) {
            $model->creationTime = $map['creationTime'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['fileNum'])) {
            $model->fileNum = $map['fileNum'];
        }
        if (isset($map['isExternalTable'])) {
            $model->isExternalTable = $map['isExternalTable'];
        }
        if (isset($map['isOutdated'])) {
            $model->isOutdated = $map['isOutdated'];
        }
        if (isset($map['lastAccessTime'])) {
            $model->lastAccessTime = $map['lastAccessTime'];
        }
        if (isset($map['lastDDLTime'])) {
            $model->lastDDLTime = $map['lastDDLTime'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['lifecycle'])) {
            $model->lifecycle = $map['lifecycle'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['materializedView'])) {
            $model->materializedView = $map['materializedView'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nativeColumns'])) {
            if (!empty($map['nativeColumns'])) {
                $model->nativeColumns = [];
                $n = 0;
                foreach ($map['nativeColumns'] as $item) {
                    $model->nativeColumns[$n++] = null !== $item ? nativeColumns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['odpsPropertiesRolearn'])) {
            $model->odpsPropertiesRolearn = $map['odpsPropertiesRolearn'];
        }
        if (isset($map['odpsSqlTextOptionFlushHeader'])) {
            $model->odpsSqlTextOptionFlushHeader = $map['odpsSqlTextOptionFlushHeader'];
        }
        if (isset($map['odpsTextOptionHeaderLinesCount'])) {
            $model->odpsTextOptionHeaderLinesCount = $map['odpsTextOptionHeaderLinesCount'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['partitionColumns'])) {
            if (!empty($map['partitionColumns'])) {
                $model->partitionColumns = [];
                $n = 0;
                foreach ($map['partitionColumns'] as $item) {
                    $model->partitionColumns[$n++] = null !== $item ? partitionColumns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['physicalSize'])) {
            $model->physicalSize = $map['physicalSize'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['rewriteEnabled'])) {
            $model->rewriteEnabled = $map['rewriteEnabled'];
        }
        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['storageHandler'])) {
            $model->storageHandler = $map['storageHandler'];
        }
        if (isset($map['tableLabel'])) {
            $model->tableLabel = $map['tableLabel'];
        }
        if (isset($map['tablesotreTableName'])) {
            $model->tablesotreTableName = $map['tablesotreTableName'];
        }
        if (isset($map['tablestoreColumnsMapping'])) {
            $model->tablestoreColumnsMapping = $map['tablestoreColumnsMapping'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['viewText'])) {
            $model->viewText = $map['viewText'];
        }

        return $model;
    }
}
