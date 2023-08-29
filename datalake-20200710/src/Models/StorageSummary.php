<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class StorageSummary extends Model
{
    /**
     * @var int
     */
    public $databaseNum;

    /**
     * @var int
     */
    public $partitionNum;

    /**
     * @var int
     */
    public $tableNum;
    protected $_name = [
        'databaseNum'  => 'DatabaseNum',
        'partitionNum' => 'PartitionNum',
        'tableNum'     => 'TableNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseNum) {
            $res['DatabaseNum'] = $this->databaseNum;
        }
        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = $this->partitionNum;
        }
        if (null !== $this->tableNum) {
            $res['TableNum'] = $this->tableNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StorageSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseNum'])) {
            $model->databaseNum = $map['DatabaseNum'];
        }
        if (isset($map['PartitionNum'])) {
            $model->partitionNum = $map['PartitionNum'];
        }
        if (isset($map['TableNum'])) {
            $model->tableNum = $map['TableNum'];
        }

        return $model;
    }
}
