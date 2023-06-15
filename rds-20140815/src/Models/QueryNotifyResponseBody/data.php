<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\QueryNotifyResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\QueryNotifyResponseBody\data\notifyItemList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of the notification.
     *
     * @var notifyItemList[]
     */
    public $notifyItemList;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 25
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries.
     *
     * @example 1
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'notifyItemList'   => 'NotifyItemList',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyItemList) {
            $res['NotifyItemList'] = [];
            if (null !== $this->notifyItemList && \is_array($this->notifyItemList)) {
                $n = 0;
                foreach ($this->notifyItemList as $item) {
                    $res['NotifyItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['NotifyItemList'])) {
            if (!empty($map['NotifyItemList'])) {
                $model->notifyItemList = [];
                $n                     = 0;
                foreach ($map['NotifyItemList'] as $item) {
                    $model->notifyItemList[$n++] = null !== $item ? notifyItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
