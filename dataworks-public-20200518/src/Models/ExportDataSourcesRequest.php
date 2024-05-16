<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ExportDataSourcesRequest extends Model
{
    /**
     * @description The data source type. Valid values:
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
     * @example rds
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The environment to which the data sources belong. Valid values:
     *
     *   0: development environment
     *   1: production environment
     *
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The keyword contained in the names of the data sources to be exported.
     *
     * You can specify only one keyword. For example, if you set this parameter to test, all the data sources whose names contain test in the specified workspace are exported.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the page to return. The value of this parameter must be a positive integer greater than or equal to 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the DataWorks workspace to which the data sources belong. You can call the [ListProjects](https://help.aliyun.com/document_detail/178393.html) operation to query the ID of the workspace.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The data source subtype. This parameter takes effect only if the DataSourceType parameter is set to rds.
     *
     * If the DataSourceType parameter is set to rds, this parameter can be set to mysql, sqlserver, or postgresql.
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
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportDataSourcesRequest
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
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        return $model;
    }
}
