<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDataSourcesRequest extends Model
{
    /**
     * @description The status of the data source. Valid values:
     *
     *   ENABLED: The data source is accessible.
     *   DISABLED: The data source is inaccessible.
     *
     * @example rds
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The number of the page to return. The value of this parameter must be an integer greater than or equal to 1.
     *
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The subtype of the data source. This parameter takes effect only if the DataSourceType parameter is set to rds.
     *
     * If the DataSourceType parameter is set to rds, this parameter can be set to mysql, sqlserver, or postgresql.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The HTTP status code returned.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the data source. Valid values:
     *
     *   odps
     *   mysql
     *   rds
     *   oss
     *   sqlserver
     *   polardb
     *   oracle
     *   mongodb
     *   emr
     *   postgresql
     *   analyticdb_for_mysql
     *   hybriddb_for_postgresql
     *   holo
     *
     * @example 1
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * @example ENABLED
     *
     * @var string
     */
    public $status;

    /**
     * @description The environment in which the data source is used. Valid values: 0 and 1. The value 0 indicates the development environment. The value 1 indicates the production environment.
     *
     * @example mysql
     *
     * @var string
     */
    public $subType;
    protected $_name = [
        'dataSourceType' => 'DataSourceType',
        'envType'        => 'EnvType',
        'name'           => 'Name',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'projectId'      => 'ProjectId',
        'status'         => 'Status',
        'subType'        => 'SubType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataSourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        return $model;
    }
}
