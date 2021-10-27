<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableShardingInfoResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableShardingInfoResponseBody\data\columnList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var columnList[]
     */
    public $columnList;

    /**
     * @var int
     */
    public $dbComputeLength;

    /**
     * @var int
     */
    public $dbRightShiftOffset;

    /**
     * @var string[]
     */
    public $dbShardingColumnList;

    /**
     * @var string
     */
    public $dbShardingFunction;

    /**
     * @var bool
     */
    public $isShard;

    /**
     * @var int
     */
    public $tbComputeLength;

    /**
     * @var int
     */
    public $tbPartitions;

    /**
     * @var int
     */
    public $tbRightShiftOffset;

    /**
     * @var string[]
     */
    public $tbShardingColumnList;

    /**
     * @var string
     */
    public $tbShardingFunction;
    protected $_name = [
        'columnList'           => 'ColumnList',
        'dbComputeLength'      => 'DbComputeLength',
        'dbRightShiftOffset'   => 'DbRightShiftOffset',
        'dbShardingColumnList' => 'DbShardingColumnList',
        'dbShardingFunction'   => 'DbShardingFunction',
        'isShard'              => 'IsShard',
        'tbComputeLength'      => 'TbComputeLength',
        'tbPartitions'         => 'TbPartitions',
        'tbRightShiftOffset'   => 'TbRightShiftOffset',
        'tbShardingColumnList' => 'TbShardingColumnList',
        'tbShardingFunction'   => 'TbShardingFunction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnList) {
            $res['ColumnList'] = [];
            if (null !== $this->columnList && \is_array($this->columnList)) {
                $n = 0;
                foreach ($this->columnList as $item) {
                    $res['ColumnList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dbComputeLength) {
            $res['DbComputeLength'] = $this->dbComputeLength;
        }
        if (null !== $this->dbRightShiftOffset) {
            $res['DbRightShiftOffset'] = $this->dbRightShiftOffset;
        }
        if (null !== $this->dbShardingColumnList) {
            $res['DbShardingColumnList'] = $this->dbShardingColumnList;
        }
        if (null !== $this->dbShardingFunction) {
            $res['DbShardingFunction'] = $this->dbShardingFunction;
        }
        if (null !== $this->isShard) {
            $res['IsShard'] = $this->isShard;
        }
        if (null !== $this->tbComputeLength) {
            $res['TbComputeLength'] = $this->tbComputeLength;
        }
        if (null !== $this->tbPartitions) {
            $res['TbPartitions'] = $this->tbPartitions;
        }
        if (null !== $this->tbRightShiftOffset) {
            $res['TbRightShiftOffset'] = $this->tbRightShiftOffset;
        }
        if (null !== $this->tbShardingColumnList) {
            $res['TbShardingColumnList'] = $this->tbShardingColumnList;
        }
        if (null !== $this->tbShardingFunction) {
            $res['TbShardingFunction'] = $this->tbShardingFunction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnList'])) {
            if (!empty($map['ColumnList'])) {
                $model->columnList = [];
                $n                 = 0;
                foreach ($map['ColumnList'] as $item) {
                    $model->columnList[$n++] = null !== $item ? columnList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DbComputeLength'])) {
            $model->dbComputeLength = $map['DbComputeLength'];
        }
        if (isset($map['DbRightShiftOffset'])) {
            $model->dbRightShiftOffset = $map['DbRightShiftOffset'];
        }
        if (isset($map['DbShardingColumnList'])) {
            if (!empty($map['DbShardingColumnList'])) {
                $model->dbShardingColumnList = $map['DbShardingColumnList'];
            }
        }
        if (isset($map['DbShardingFunction'])) {
            $model->dbShardingFunction = $map['DbShardingFunction'];
        }
        if (isset($map['IsShard'])) {
            $model->isShard = $map['IsShard'];
        }
        if (isset($map['TbComputeLength'])) {
            $model->tbComputeLength = $map['TbComputeLength'];
        }
        if (isset($map['TbPartitions'])) {
            $model->tbPartitions = $map['TbPartitions'];
        }
        if (isset($map['TbRightShiftOffset'])) {
            $model->tbRightShiftOffset = $map['TbRightShiftOffset'];
        }
        if (isset($map['TbShardingColumnList'])) {
            if (!empty($map['TbShardingColumnList'])) {
                $model->tbShardingColumnList = $map['TbShardingColumnList'];
            }
        }
        if (isset($map['TbShardingFunction'])) {
            $model->tbShardingFunction = $map['TbShardingFunction'];
        }

        return $model;
    }
}
