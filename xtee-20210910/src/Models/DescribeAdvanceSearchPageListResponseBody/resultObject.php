<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAdvanceSearchPageListResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAdvanceSearchPageListResponseBody\resultObject\header;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var mixed[][]
     */
    public $data;

    /**
     * @var header[]
     */
    public $header;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalItem;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'currentPage' => 'currentPage',
        'data'        => 'data',
        'header'      => 'header',
        'pageSize'    => 'pageSize',
        'totalItem'   => 'totalItem',
        'totalPage'   => 'totalPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->header) {
            $res['header'] = [];
            if (null !== $this->header && \is_array($this->header)) {
                $n = 0;
                foreach ($this->header as $item) {
                    $res['header'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->totalItem) {
            $res['totalItem'] = $this->totalItem;
        }
        if (null !== $this->totalPage) {
            $res['totalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = $map['data'];
            }
        }
        if (isset($map['header'])) {
            if (!empty($map['header'])) {
                $model->header = [];
                $n             = 0;
                foreach ($map['header'] as $item) {
                    $model->header[$n++] = null !== $item ? header::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['totalItem'])) {
            $model->totalItem = $map['totalItem'];
        }
        if (isset($map['totalPage'])) {
            $model->totalPage = $map['totalPage'];
        }

        return $model;
    }
}
