<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListDataLakeFunctionNameRequest extends Model
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
     * @example .*
     *
     * @var string
     */
    public $functionNamePattern;

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
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'catalogName' => 'CatalogName',
        'dataRegion' => 'DataRegion',
        'dbName' => 'DbName',
        'functionNamePattern' => 'FunctionNamePattern',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'tid' => 'Tid',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

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
        if (null !== $this->functionNamePattern) {
            $res['FunctionNamePattern'] = $this->functionNamePattern;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataLakeFunctionNameRequest
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
        if (isset($map['FunctionNamePattern'])) {
            $model->functionNamePattern = $map['FunctionNamePattern'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
