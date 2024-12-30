<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListDataLakeTableNameRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example hive
     *
     * @var string
     */
    public $catalogName;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $dataRegion;

    /**
     * @description This parameter is required.
     *
     * @example default
     *
     * @var string
     */
    public $dbName;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example f056501ada12c1cc
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example .*
     *
     * @var string
     */
    public $tableNamePattern;

    /**
     * @example MANAGED_TABLE
     *
     * @var string
     */
    public $tableType;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'catalogName'      => 'CatalogName',
        'dataRegion'       => 'DataRegion',
        'dbName'           => 'DbName',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'tableNamePattern' => 'TableNamePattern',
        'tableType'        => 'TableType',
        'tid'              => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }
        if (null !== $this->dataRegion) {
            $res['DataRegion'] = $this->dataRegion;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->tableNamePattern) {
            $res['TableNamePattern'] = $this->tableNamePattern;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataLakeTableNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }
        if (isset($map['DataRegion'])) {
            $model->dataRegion = $map['DataRegion'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TableNamePattern'])) {
            $model->tableNamePattern = $map['TableNamePattern'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
