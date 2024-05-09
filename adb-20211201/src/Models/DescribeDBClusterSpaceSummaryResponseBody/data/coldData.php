<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class coldData extends Model
{
    /**
     * @description The data size of table records. Unit: bytes.
     *
     * @example 1048576
     *
     * @var int
     */
    public $dataSize;

    /**
     * @description The data size of regular indexes. Unit: bytes.
     *
     * @example 1048576
     *
     * @var int
     */
    public $indexSize;

    /**
     * @description The data size of other data. Unit: bytes.
     *
     * @example 1048576
     *
     * @var int
     */
    public $otherSize;

    /**
     * @description The data size of primary key indexes. Unit: bytes.
     *
     * @example 1048576
     *
     * @var int
     */
    public $primaryKeyIndexSize;

    /**
     * @description The cold data size. Unit: bytes.
     *
     * >  Formula: Cold data size = Data size of table records + Data size of regular indexes + Data size of primary key indexes + Data size of other data.
     * @example 4194304
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'dataSize'            => 'DataSize',
        'indexSize'           => 'IndexSize',
        'otherSize'           => 'OtherSize',
        'primaryKeyIndexSize' => 'PrimaryKeyIndexSize',
        'totalSize'           => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->indexSize) {
            $res['IndexSize'] = $this->indexSize;
        }
        if (null !== $this->otherSize) {
            $res['OtherSize'] = $this->otherSize;
        }
        if (null !== $this->primaryKeyIndexSize) {
            $res['PrimaryKeyIndexSize'] = $this->primaryKeyIndexSize;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coldData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['IndexSize'])) {
            $model->indexSize = $map['IndexSize'];
        }
        if (isset($map['OtherSize'])) {
            $model->otherSize = $map['OtherSize'];
        }
        if (isset($map['PrimaryKeyIndexSize'])) {
            $model->primaryKeyIndexSize = $map['PrimaryKeyIndexSize'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
