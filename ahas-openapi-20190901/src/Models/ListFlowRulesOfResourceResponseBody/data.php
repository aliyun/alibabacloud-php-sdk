<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListFlowRulesOfResourceResponseBody;

use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListFlowRulesOfResourceResponseBody\data\datas;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var datas[]
     */
    public $datas;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageIndex'  => 'PageIndex',
        'datas'      => 'Datas',
        'totalPage'  => 'TotalPage',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->datas) {
            $res['Datas'] = [];
            if (null !== $this->datas && \is_array($this->datas)) {
                $n = 0;
                foreach ($this->datas as $item) {
                    $res['Datas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
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
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['Datas'])) {
            if (!empty($map['Datas'])) {
                $model->datas = [];
                $n            = 0;
                foreach ($map['Datas'] as $item) {
                    $model->datas[$n++] = null !== $item ? datas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
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
