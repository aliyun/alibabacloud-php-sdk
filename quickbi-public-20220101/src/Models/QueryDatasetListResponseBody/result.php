<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponseBody\result\data;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Returns the pagination results of the dataset list. The detailed information of the dataset list is stored in the response parameter Data.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The number of rows per page in a paged query.
     *
     *   Default value: 10.
     *   Maximum value: 1,000.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 1
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description Current page number for dataset list:
     *
     *   Pages start from page 1.
     *   Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'data'       => 'Data',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'totalNum'   => 'TotalNum',
        'totalPages' => 'TotalPages',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
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
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
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
