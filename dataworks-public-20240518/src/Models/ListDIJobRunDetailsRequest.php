<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListDIJobRunDetailsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 11265
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @example 1234
     *
     * @var int
     */
    public $instanceId;

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
     * @example ds_name
     *
     * @var string
     */
    public $sourceDataSourceName;

    /**
     * @example db_name
     *
     * @var string
     */
    public $sourceDatabaseName;

    /**
     * @example schema_name
     *
     * @var string
     */
    public $sourceSchemaName;

    /**
     * @example table_name
     *
     * @var string
     */
    public $sourceTableName;
    protected $_name = [
        'DIJobId'              => 'DIJobId',
        'instanceId'           => 'InstanceId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'sourceDataSourceName' => 'SourceDataSourceName',
        'sourceDatabaseName'   => 'SourceDatabaseName',
        'sourceSchemaName'     => 'SourceSchemaName',
        'sourceTableName'      => 'SourceTableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sourceDataSourceName) {
            $res['SourceDataSourceName'] = $this->sourceDataSourceName;
        }
        if (null !== $this->sourceDatabaseName) {
            $res['SourceDatabaseName'] = $this->sourceDatabaseName;
        }
        if (null !== $this->sourceSchemaName) {
            $res['SourceSchemaName'] = $this->sourceSchemaName;
        }
        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDIJobRunDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SourceDataSourceName'])) {
            $model->sourceDataSourceName = $map['SourceDataSourceName'];
        }
        if (isset($map['SourceDatabaseName'])) {
            $model->sourceDatabaseName = $map['SourceDatabaseName'];
        }
        if (isset($map['SourceSchemaName'])) {
            $model->sourceSchemaName = $map['SourceSchemaName'];
        }
        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }

        return $model;
    }
}
