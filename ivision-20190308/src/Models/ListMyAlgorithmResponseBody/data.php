<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models\ListMyAlgorithmResponseBody;

use AlibabaCloud\SDK\Ivision\V20190308\Models\ListMyAlgorithmResponseBody\data\algorithmList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var algorithmList[]
     */
    public $algorithmList;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'algorithmList' => 'AlgorithmList',
        'pageSize'      => 'PageSize',
        'pageNumber'    => 'PageNumber',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmList) {
            $res['AlgorithmList'] = [];
            if (null !== $this->algorithmList && \is_array($this->algorithmList)) {
                $n = 0;
                foreach ($this->algorithmList as $item) {
                    $res['AlgorithmList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
        if (isset($map['AlgorithmList'])) {
            if (!empty($map['AlgorithmList'])) {
                $model->algorithmList = [];
                $n                    = 0;
                foreach ($map['AlgorithmList'] as $item) {
                    $model->algorithmList[$n++] = null !== $item ? algorithmList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
