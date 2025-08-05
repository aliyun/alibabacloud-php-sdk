<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsPartitionsResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsPartitionsResponseBody\data\objectList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var objectList[]
     */
    public $objectList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1000
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'objectList' => 'objectList',
        'pageNum' => 'pageNum',
        'pageSize' => 'pageSize',
        'total' => 'total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectList) {
            $res['objectList'] = [];
            if (null !== $this->objectList && \is_array($this->objectList)) {
                $n = 0;
                foreach ($this->objectList as $item) {
                    $res['objectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['objectList'])) {
            if (!empty($map['objectList'])) {
                $model->objectList = [];
                $n = 0;
                foreach ($map['objectList'] as $item) {
                    $model->objectList[$n++] = null !== $item ? objectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
