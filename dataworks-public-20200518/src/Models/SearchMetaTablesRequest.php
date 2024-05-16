<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class SearchMetaTablesRequest extends Model
{
    /**
     * @description The type of the metatables. Valid values: 0 and 1. The value 0 indicates that tables are queried. The value 1 indicates that views are queried. If you do not configure this parameter, all types of metatables are queried.
     *
     * @example odps.engine_name
     *
     * @var string
     */
    public $appGuid;

    /**
     * @description The schema information of the table. You need to configure this parameter if you enable the table schema in MaxCompute.
     *
     * @example abc
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The HTTP status code returned.
     *
     * @example emr
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The type of the data source. Valid values: odps and emr.
     *
     * @example 0
     *
     * @var int
     */
    public $entityType;

    /**
     * @description The ID of the EMR cluster. This parameter is required only if you set the DataSourceType parameter to emr.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The GUID of the workspace where the metatables reside.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The keyword based on which metatables are queried. During the query, the system tokenizes the names of metatables and matches the names with the keyword. If no name is matched, an empty result is returned. By default, the system uses underscores (_) to tokenize the names.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The error message returned.
     *
     * @example default
     *
     * @var string
     */
    public $schema;
    protected $_name = [
        'appGuid'        => 'AppGuid',
        'clusterId'      => 'ClusterId',
        'dataSourceType' => 'DataSourceType',
        'entityType'     => 'EntityType',
        'keyword'        => 'Keyword',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'schema'         => 'Schema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMetaTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        return $model;
    }
}
