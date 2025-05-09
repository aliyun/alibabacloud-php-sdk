<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ListDataLakePartitionRequest extends Model
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
     * @var string[]
     */
    public $partNames;

    /**
     * @var string
     */
    public $tableName;

    /**
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
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'partNames' => 'PartNames',
        'tableName' => 'TableName',
        'tid' => 'Tid',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->partNames)) {
            Model::validateArray($this->partNames);
        }
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

        if (null !== $this->partNames) {
            if (\is_array($this->partNames)) {
                $res['PartNames'] = [];
                $n1 = 0;
                foreach ($this->partNames as $item1) {
                    $res['PartNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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

        if (isset($map['PartNames'])) {
            if (!empty($map['PartNames'])) {
                $model->partNames = [];
                $n1 = 0;
                foreach ($map['PartNames'] as $item1) {
                    $model->partNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
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
