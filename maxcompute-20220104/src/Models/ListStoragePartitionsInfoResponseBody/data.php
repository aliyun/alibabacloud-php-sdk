<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStoragePartitionsInfoResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStoragePartitionsInfoResponseBody\data\storagePartitionInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The date on which the statistics are collected.
     *
     * @example 20241205
     *
     * @var string
     */
    public $date;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The partition storage information.
     *
     * @var storagePartitionInfoList[]
     */
    public $storagePartitionInfoList;

    /**
     * @description The total number of returned entries.
     *
     * @example 57
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'date' => 'date',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'storagePartitionInfoList' => 'storagePartitionInfoList',
        'totalCount' => 'totalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->storagePartitionInfoList) {
            $res['storagePartitionInfoList'] = [];
            if (null !== $this->storagePartitionInfoList && \is_array($this->storagePartitionInfoList)) {
                $n = 0;
                foreach ($this->storagePartitionInfoList as $item) {
                    $res['storagePartitionInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['storagePartitionInfoList'])) {
            if (!empty($map['storagePartitionInfoList'])) {
                $model->storagePartitionInfoList = [];
                $n = 0;
                foreach ($map['storagePartitionInfoList'] as $item) {
                    $model->storagePartitionInfoList[$n++] = null !== $item ? storagePartitionInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
