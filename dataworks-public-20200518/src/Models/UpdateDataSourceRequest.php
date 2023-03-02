<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataSourceRequest extends Model
{
    /**
     * @description The details about the data source that you want to update.
     *
     * Examples of details of some common data sources:
     *
     *   odps
     *
     * ```
     *
     *   mysql
     *
     * ```
     *
     *   rds
     *
     * ```
     *
     *   oss
     *
     * ```
     *
     *   sqlserver
     *
     * ```
     *
     *   polardb
     *
     * ```
     *
     *   oracle
     *
     * ```
     *
     *   mongodb
     *
     * ```
     *
     *   emr
     *
     * ```
     *
     *   postgresql
     *
     * ```
     *
     *   analyticdb_for_mysql
     *
     * ```
     *
     *   hybriddb_for_postgresql
     *
     * ```
     *
     *   holo
     *
     * ```
     *
     *   kafka
     *
     * ```
     * @example {"accessId":"xssssss","accessKey":"xsaxsaxsa","authType":2,"endpoint":"http://service.odps.aliyun.com/api","project":"xsaxsax","tag":"public"}
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the data source that you want to update. You can call the [ListDataSources](~~211431~~) operation to obtain the ID.
     *
     * @example 1
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @description The description of the data source.
     *
     * @example xxx
     *
     * @var string
     */
    public $description;

    /**
     * @description The environment in which the data source runs. Valid values:
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
     * @description The status of the data source. The parameter is deprecated. Do not use this parameter.
     *
     * @example ENABLED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'content'      => 'Content',
        'dataSourceId' => 'DataSourceId',
        'description'  => 'Description',
        'envType'      => 'EnvType',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
