<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListIntervenesResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListIntervenesResponseBody\data\interveneList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var interveneList[]
     */
    public $interveneList;

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
     * @example 1
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'interveneList' => 'InterveneList',
        'pageIndex'     => 'PageIndex',
        'pageSize'      => 'PageSize',
        'totalSize'     => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interveneList) {
            $res['InterveneList'] = [];
            if (null !== $this->interveneList && \is_array($this->interveneList)) {
                $n = 0;
                foreach ($this->interveneList as $item) {
                    $res['InterveneList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
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
        if (isset($map['InterveneList'])) {
            if (!empty($map['InterveneList'])) {
                $model->interveneList = [];
                $n                    = 0;
                foreach ($map['InterveneList'] as $item) {
                    $model->interveneList[$n++] = null !== $item ? interveneList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
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
