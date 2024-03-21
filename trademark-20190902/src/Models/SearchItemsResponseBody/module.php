<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\SearchItemsResponseBody;

use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchItemsResponseBody\module\date;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $currentPageNum;

    /**
     * @var date
     */
    public $date;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalItemNum;

    /**
     * @var int
     */
    public $totalPageNum;
    protected $_name = [
        'currentPageNum' => 'CurrentPageNum',
        'date'           => 'Date',
        'pageSize'       => 'PageSize',
        'totalItemNum'   => 'TotalItemNum',
        'totalPageNum'   => 'TotalPageNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPageNum) {
            $res['CurrentPageNum'] = $this->currentPageNum;
        }
        if (null !== $this->date) {
            $res['Date'] = null !== $this->date ? $this->date->toMap() : null;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalItemNum) {
            $res['TotalItemNum'] = $this->totalItemNum;
        }
        if (null !== $this->totalPageNum) {
            $res['TotalPageNum'] = $this->totalPageNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }
        if (isset($map['Date'])) {
            $model->date = date::fromMap($map['Date']);
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalItemNum'])) {
            $model->totalItemNum = $map['TotalItemNum'];
        }
        if (isset($map['TotalPageNum'])) {
            $model->totalPageNum = $map['TotalPageNum'];
        }

        return $model;
    }
}
