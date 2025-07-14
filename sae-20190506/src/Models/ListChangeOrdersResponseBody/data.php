<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListChangeOrdersResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListChangeOrdersResponseBody\data\changeOrderList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The change orders.
     *
     * @var changeOrderList[]
     */
    public $changeOrderList;

    /**
     * @description The total number of change orders.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The error code.
     *
     *   The **ErrorCode** parameter is not returned when the request succeeds.
     *   The **ErrorCode** parameter is returned when the request fails. For more information, see **Error codes** in this topic.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The list of change orders.
     *
     * @example 1
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'changeOrderList' => 'ChangeOrderList',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'totalSize' => 'TotalSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderList) {
            $res['ChangeOrderList'] = [];
            if (null !== $this->changeOrderList && \is_array($this->changeOrderList)) {
                $n = 0;
                foreach ($this->changeOrderList as $item) {
                    $res['ChangeOrderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['ChangeOrderList'])) {
            if (!empty($map['ChangeOrderList'])) {
                $model->changeOrderList = [];
                $n = 0;
                foreach ($map['ChangeOrderList'] as $item) {
                    $model->changeOrderList[$n++] = null !== $item ? changeOrderList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
