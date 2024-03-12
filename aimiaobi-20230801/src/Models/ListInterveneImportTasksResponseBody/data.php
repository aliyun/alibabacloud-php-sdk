<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneImportTasksResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneImportTasksResponseBody\data\statusList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var statusList[]
     */
    public $statusList;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'pageIndex'  => 'PageIndex',
        'pageSize'   => 'PageSize',
        'statusList' => 'StatusList',
        'totalSize'  => 'TotalSize',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = [];
            if (null !== $this->statusList && \is_array($this->statusList)) {
                $n = 0;
                foreach ($this->statusList as $item) {
                    $res['StatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n                 = 0;
                foreach ($map['StatusList'] as $item) {
                    $model->statusList[$n++] = null !== $item ? statusList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
