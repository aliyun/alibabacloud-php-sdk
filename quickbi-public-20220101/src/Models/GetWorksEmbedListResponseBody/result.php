<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetWorksEmbedListResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetWorksEmbedListResponseBody\result\data;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Array of reports
     *
     * @var data[]
     */
    public $data;

    /**
     * @description Page number
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description Number of items per page
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Total number of items
     *
     * @example 18
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description Total number of pages
     *
     * @example 2
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'data' => 'Data',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'totalNum' => 'TotalNum',
        'totalPages' => 'TotalPages',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
