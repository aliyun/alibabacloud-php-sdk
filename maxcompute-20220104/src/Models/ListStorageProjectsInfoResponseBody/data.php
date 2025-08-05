<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageProjectsInfoResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageProjectsInfoResponseBody\data\storageProjectInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 20241205
     *
     * @var string
     */
    public $date;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var storageProjectInfoList[]
     */
    public $storageProjectInfoList;

    /**
     * @example 60
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'date' => 'date',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'storageProjectInfoList' => 'storageProjectInfoList',
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
        if (null !== $this->storageProjectInfoList) {
            $res['storageProjectInfoList'] = [];
            if (null !== $this->storageProjectInfoList && \is_array($this->storageProjectInfoList)) {
                $n = 0;
                foreach ($this->storageProjectInfoList as $item) {
                    $res['storageProjectInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['storageProjectInfoList'])) {
            if (!empty($map['storageProjectInfoList'])) {
                $model->storageProjectInfoList = [];
                $n = 0;
                foreach ($map['storageProjectInfoList'] as $item) {
                    $model->storageProjectInfoList[$n++] = null !== $item ? storageProjectInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
