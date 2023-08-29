<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class StorageRankDTO extends Model
{
    /**
     * @var DbStorageRank[]
     */
    public $dbStorageRank;

    /**
     * @var SmallFileCntRank[]
     */
    public $smallFileCntRank;

    /**
     * @var TableStorageRank[]
     */
    public $tableStorageRank;
    protected $_name = [
        'dbStorageRank'    => 'dbStorageRank',
        'smallFileCntRank' => 'smallFileCntRank',
        'tableStorageRank' => 'tableStorageRank',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbStorageRank) {
            $res['dbStorageRank'] = [];
            if (null !== $this->dbStorageRank && \is_array($this->dbStorageRank)) {
                $n = 0;
                foreach ($this->dbStorageRank as $item) {
                    $res['dbStorageRank'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->smallFileCntRank) {
            $res['smallFileCntRank'] = [];
            if (null !== $this->smallFileCntRank && \is_array($this->smallFileCntRank)) {
                $n = 0;
                foreach ($this->smallFileCntRank as $item) {
                    $res['smallFileCntRank'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableStorageRank) {
            $res['tableStorageRank'] = [];
            if (null !== $this->tableStorageRank && \is_array($this->tableStorageRank)) {
                $n = 0;
                foreach ($this->tableStorageRank as $item) {
                    $res['tableStorageRank'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StorageRankDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dbStorageRank'])) {
            if (!empty($map['dbStorageRank'])) {
                $model->dbStorageRank = [];
                $n                    = 0;
                foreach ($map['dbStorageRank'] as $item) {
                    $model->dbStorageRank[$n++] = null !== $item ? DbStorageRank::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['smallFileCntRank'])) {
            if (!empty($map['smallFileCntRank'])) {
                $model->smallFileCntRank = [];
                $n                       = 0;
                foreach ($map['smallFileCntRank'] as $item) {
                    $model->smallFileCntRank[$n++] = null !== $item ? SmallFileCntRank::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tableStorageRank'])) {
            if (!empty($map['tableStorageRank'])) {
                $model->tableStorageRank = [];
                $n                       = 0;
                foreach ($map['tableStorageRank'] as $item) {
                    $model->tableStorageRank[$n++] = null !== $item ? TableStorageRank::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
