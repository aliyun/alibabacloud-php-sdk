<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeArchiveTableListResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeArchiveTableListResponseBody\data\tables;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pausedCount;

    /**
     * @var int
     */
    public $runningCount;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @var int
     */
    public $tobeArchivedConut;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'pageIndex'         => 'PageIndex',
        'pageSize'          => 'PageSize',
        'pausedCount'       => 'PausedCount',
        'runningCount'      => 'RunningCount',
        'successCount'      => 'SuccessCount',
        'tables'            => 'Tables',
        'tobeArchivedConut' => 'TobeArchivedConut',
        'total'             => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pausedCount) {
            $res['PausedCount'] = $this->pausedCount;
        }
        if (null !== $this->runningCount) {
            $res['RunningCount'] = $this->runningCount;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->tables) {
            $res['Tables'] = [];
            if (null !== $this->tables && \is_array($this->tables)) {
                $n = 0;
                foreach ($this->tables as $item) {
                    $res['Tables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tobeArchivedConut) {
            $res['TobeArchivedConut'] = $this->tobeArchivedConut;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PausedCount'])) {
            $model->pausedCount = $map['PausedCount'];
        }
        if (isset($map['RunningCount'])) {
            $model->runningCount = $map['RunningCount'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n             = 0;
                foreach ($map['Tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? tables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TobeArchivedConut'])) {
            $model->tobeArchivedConut = $map['TobeArchivedConut'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
