<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListTablesRequest extends Model
{
    /**
     * @example this is a comment
     *
     * @var string
     */
    public $comment;

    /**
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @example Asc
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The parent metadata entity ID. You can refer to the responses of the ListDatabases or ListSchemas operation and [Description of concepts related to metadata entities.](https://help.aliyun.com/document_detail/2880092.html)
     *
     *   The parent metadata entity is a database: The format of `ParentMetaEntityId` is `${EntityType}:${Instance ID or encoded URL}:${Catalog Identifier}:${Database Name}`. Use an empty string (\\`""\\`) as a placeholder for any non-existent level.
     *   The parent metadata entity is a database schema:. The format of `ParentMetaEntityId` is `${EntityType}:${Instance ID or encoded URL}:${Catalog Identifier}:${Database Name}:${Schema Name}`. Use an empty string (\\`""\\`) as a placeholder for any non-existent level.
     *
     * >  The schema level in `ParentMetaEntityId` is supported only for database types that support schemas, such as MaxCompute (with schema enabled), Hologres, PostgreSQL, SQL Server, HybridDB for PostgreSQL, and Oracle.``
     *
     * >  For MaxCompute and DLF types, use empty strings as the instance ID. For MaxCompute, the database name is the same as the project name.
     *
     * >  For the StarRocks type, the catalog identifier is the catalog name. For the DLF type, it refers to the catalog ID. Other types do not support a catalog-level hierarchy and the catalog identifier must be replaced with an empty string as a placeholder.
     *
     * Examples of common ParentMetaEntityId formats
     *
     * `maxcompute-project:::project_name`
     *
     * `maxcompute-schema:::project_name:schema_name` (for MaxCompute projects with schema enabled)
     *
     * `dlf-database::catalog_id:database_name`
     *
     * `hms-database:instance_id::database_name`
     *
     * `holo-schema:instance_id::database_name:schema_name`
     *
     * `mysql-database:(instance_id|encoded_jdbc_url)::database_name`
     *
     * > \\
     * `instance_id`: The instance ID, required when the data source is registered in instance mode.\\
     * `encoded_jdbc_url`: The JDBC connection string that has been URL encoded, required for the data source registered via a connection string.\\
     * `catalog_id`: The DLF catalog ID.\\
     * `project_name`: The MaxCompute project name.\\
     * `database_name`: The database name.\\
     * `schema_name`: The schema name.
     *
     * This parameter is required.
     *
     * @example maxcompute-schema:123456XXX::test_project_with_schema:default
     * maxcompute-project:123456XXX::test_project_without_schema
     * dlf-database:123456XXX:test_catalog:test_db
     * hms-database:c-abc123xxx::test_db
     * holo-schema:h-abc123xxx::test_db:test_schema
     * mysql-database:jdbc%3Amysql%3A%2F%2F127.0.0.1%3A3306%2Ftest_db::test_db
     *
     * @var string
     */
    public $parentMetaEntityId;

    /**
     * @example CreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @var string[]
     */
    public $tableTypes;
    protected $_name = [
        'comment' => 'Comment',
        'name' => 'Name',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'parentMetaEntityId' => 'ParentMetaEntityId',
        'sortBy' => 'SortBy',
        'tableTypes' => 'TableTypes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentMetaEntityId) {
            $res['ParentMetaEntityId'] = $this->parentMetaEntityId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->tableTypes) {
            $res['TableTypes'] = $this->tableTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentMetaEntityId'])) {
            $model->parentMetaEntityId = $map['ParentMetaEntityId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['TableTypes'])) {
            if (!empty($map['TableTypes'])) {
                $model->tableTypes = $map['TableTypes'];
            }
        }

        return $model;
    }
}
