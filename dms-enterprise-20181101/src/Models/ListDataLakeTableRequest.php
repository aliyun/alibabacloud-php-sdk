<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ListDataLakeTableRequest extends Model
{
    /**
     * @var string
     */
    public $catalogName;
    /**
     * @var string
     */
    public $dataRegion;
    /**
     * @var string
     */
    public $dbName;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $tableNamePattern;
    /**
     * @var string
     */
    public $tableType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
