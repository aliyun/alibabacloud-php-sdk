<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectListResponseBody;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectListResponseBody\datas\list_;
use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 总条数
     *
     * @var int
     */
    public $count;

    /**
     * @description 返回数据集合
     *
     * @var list_[]
     */
    public $list;

    /**
     * @description 当前页
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description 每页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 总共多少页
     *
     * @var int
     */
    public $pages;
    protected $_name = [
        'count'    => 'Count',
        'list'     => 'List',
        'pageNum'  => 'PageNum',
        'pageSize' => 'PageSize',
        'pages'    => 'Pages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pages) {
            $res['Pages'] = $this->pages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pages'])) {
            $model->pages = $map['Pages'];
        }

        return $model;
    }
}
