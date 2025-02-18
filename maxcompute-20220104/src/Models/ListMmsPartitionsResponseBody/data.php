<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsPartitionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsPartitionsResponseBody\data\objectList;

class data extends Model
{
    /**
     * @var objectList[]
     */
    public $objectList;
    /**
     * @var int
     */
    public $pageNum;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'objectList' => 'objectList',
        'pageNum'    => 'pageNum',
        'pageSize'   => 'pageSize',
        'total'      => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->objectList)) {
            Model::validateArray($this->objectList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectList) {
            if (\is_array($this->objectList)) {
                $res['objectList'] = [];
                $n1                = 0;
                foreach ($this->objectList as $item1) {
                    $res['objectList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['objectList'])) {
            if (!empty($map['objectList'])) {
                $model->objectList = [];
                $n1                = 0;
                foreach ($map['objectList'] as $item1) {
                    $model->objectList[$n1++] = objectList::fromMap($item1);
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
