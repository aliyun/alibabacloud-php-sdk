<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class coldData extends Model
{
    /**
     * @example 1048576
     *
     * @var int
     */
    public $dataSize;

    /**
     * @example 1048576
     *
     * @var int
     */
    public $indexSize;

    /**
     * @example 1048576
     *
     * @var int
     */
    public $otherSize;

    /**
     * @example 1048576
     *
     * @var int
     */
    public $primaryKeyIndexSize;

    /**
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
