<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListAlgorithmsResponseBody;

use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListAlgorithmsResponseBody\data\algorithms;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 算法列表。
     *
     * @var algorithms[]
     */
    public $algorithms;

    /**
     * @description 分页数，从1开始，默认为1。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小，默认为10。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 总算法数量。
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'algorithms' => 'Algorithms',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithms) {
            $res['Algorithms'] = [];
            if (null !== $this->algorithms && \is_array($this->algorithms)) {
                $n = 0;
                foreach ($this->algorithms as $item) {
                    $res['Algorithms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Algorithms'])) {
            if (!empty($map['Algorithms'])) {
                $model->algorithms = [];
                $n                 = 0;
                foreach ($map['Algorithms'] as $item) {
                    $model->algorithms[$n++] = null !== $item ? algorithms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
