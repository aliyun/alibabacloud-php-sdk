<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageTablesInfoResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageTablesInfoResponseBody\data\storageTableInfoList;
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
     * @description The table storage information.
     *
     * @var storageTableInfoList[]
     */
    public $storageTableInfoList;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'date' => 'date',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'storageTableInfoList' => 'storageTableInfoList',
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
        if (null !== $this->storageTableInfoList) {
            $res['storageTableInfoList'] = [];
            if (null !== $this->storageTableInfoList && \is_array($this->storageTableInfoList)) {
                $n = 0;
                foreach ($this->storageTableInfoList as $item) {
                    $res['storageTableInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['storageTableInfoList'])) {
            if (!empty($map['storageTableInfoList'])) {
                $model->storageTableInfoList = [];
                $n = 0;
                foreach ($map['storageTableInfoList'] as $item) {
                    $model->storageTableInfoList[$n++] = null !== $item ? storageTableInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
