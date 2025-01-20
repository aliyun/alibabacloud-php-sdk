<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteDataLakePartitionsRequest extends Model
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
     * @var bool
     */
    public $ifExists;
    /**
     * @var string[][]
     */
    public $partitionValuesList;
    /**
     * @var string
     */
    public $tableName;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'catalogName'         => 'CatalogName',
        'dataRegion'          => 'DataRegion',
        'dbName'              => 'DbName',
        'ifExists'            => 'IfExists',
        'partitionValuesList' => 'PartitionValuesList',
        'tableName'           => 'TableName',
        'tid'                 => 'Tid',
    ];

    public function validate()
    {
        if (\is_array($this->partitionValuesList)) {
            Model::validateArray($this->partitionValuesList);
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

        if (null !== $this->ifExists) {
            $res['IfExists'] = $this->ifExists;
        }

        if (null !== $this->partitionValuesList) {
            if (\is_array($this->partitionValuesList)) {
                $res['PartitionValuesList'] = [];
                $n1                         = 0;
                foreach ($this->partitionValuesList as $item1) {
                    if (\is_array($item1)) {
                        $res['PartitionValuesList'][$n1++] = [];
                        $n2                                = 0;
                        foreach ($item1 as $item2) {
                            $res['PartitionValuesList'][$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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

        if (isset($map['IfExists'])) {
            $model->ifExists = $map['IfExists'];
        }

        if (isset($map['PartitionValuesList'])) {
            if (!empty($map['PartitionValuesList'])) {
                $model->partitionValuesList = [];
                $n1                         = 0;
                foreach ($map['PartitionValuesList'] as $item1) {
                    if (!empty($item1)) {
                        $model->partitionValuesList[$n1++] = [];
                        $n2                                = 0;
                        foreach ($item1 as $item2) {
                            $model->partitionValuesList[$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
